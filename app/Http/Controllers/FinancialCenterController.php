<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Excel;
use App\FinancialCenter;
use App\ProfitsAndLosses;
use App\IndirectCashFlows;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Imports\Sheets\ImportFinancialCenter;
use App\Imports\Sheets\ImportProfitsAndLosses;
use App\Imports\Sheets\ImportIndirectCashFlows;
class FinancialCenterController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($id)
    {
        // $company = Company::where('id', $id);
        return view('user.importExcel', ['id' => $id]);
    }

    public function import(Request $request, $id)
    {
        $company = Company::where('id', $id)->first();

        $this->validate($request, [
            'select_file'  => 'required|mimes:xls,xlsx'
           ]);

        $path = $request->file('select_file')->getRealPath();

        $data = Excel::selectSheets('مركز مالي متداول غير متداول', 'ربح وخسارة حسب الوظيفه', 'تدفقات نقدية غير مباشرة')->load($path, function($reader) {
            $reader->ignoreEmpty();
            $reader->noHeading();
            $reader->skipRows(19);
        })->get();

        // dd($data->toArray());
        if($data->count() > 0)
        {
            $data = $data->toArray();

            $ImportFinance = ImportFinancialCenter::handleExcel($data[0], $company->id);
            $ImportProfitsAndLosses = ImportProfitsAndLosses::handleExcel($data[1], $company->id);
            $ImportIndirectCashFlows = ImportIndirectCashFlows::handleExcel($data[2], $company->id);
            if (!$ImportFinance || !$ImportProfitsAndLosses || !$ImportIndirectCashFlows) {
                return Redirect::back()->withErrors("Please Enter a number instead of string");
            }

            $FinancialCenter = FinancialCenter::insert($ImportFinance);
            if (!$FinancialCenter) {
                throw new Exception('Error in saving data.');
            }

            $ProfitsAndLosses = ProfitsAndLosses::insert($ImportProfitsAndLosses);
            if (!$ProfitsAndLosses) {
                throw new Exception('Error in saving data.');
            }

            $IndirectCashFlows = IndirectCashFlows::insert($ImportIndirectCashFlows);
            if (!$IndirectCashFlows) {
                throw new Exception('Error in saving data.');
            }

            return back()->with('success', 'Excel date has been successfully imported!!');
        }
    }    
}
