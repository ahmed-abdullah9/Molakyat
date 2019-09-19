<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Excel;
use App\FinancialCenter;
use App\ProfitsAndLosses;
use App\ComprehensiveIncome;
use App\IndirectCashFlows;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Imports\Sheets\ImportFinancialCenter;
use App\Imports\Sheets\ImportProfitsAndLosses;
use App\Imports\Sheets\ImportIndirectCashFlows;
use App\Imports\Sheets\ImportComprehensiveIncome;
use DB; 
use App\Helpers as helper;
use Auth;


class ListController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('guest:researchers');
    }

    public function showAllList($companyId)
    {
        $user_id = Auth::id();
        // $companies = Company::where('user_id',$user_id)->get();
        $FinancialCenter = FinancialCenter::where('company_id', $companyId)->get();
        $ProfitsAndLosses = ProfitsAndLosses::where('company_id', $companyId)->get();
        $ComprehensiveIncome = ComprehensiveIncome::where('company_id', $companyId)->get();
        $IndirectCashFlows = IndirectCashFlows::where('company_id', $companyId)->get();
        return view('user.showLists', ['FinancialCenter' => $FinancialCenter, 
                        'ProfitsAndLosses' => $ProfitsAndLosses,
                        'ComprehensiveIncome' => $ComprehensiveIncome,
                        'IndirectCashFlows' => $IndirectCashFlows]);
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

        $data = Excel::selectSheets('مركز مالي متداول غير متداول', 'ربح وخسارة حسب الوظيفه', 'تدفقات نقدية غير مباشرة', 'دخل شامل بعد الضريبة')->load($path, function($reader) {
            $reader->ignoreEmpty();
            $reader->noHeading();
            $reader->skipRows(19);
        })->get();

        if($data->count() > 0)
        {
            $data = $data->toArray();

            $collectionForFinance = helper::handleExcel($data[0]);
            $collectionForProfitsAndLossese = helper::handleExcel($data[1]);
            $collectionForComprehensiveIncome = helper::handleExcel($data[2]);
            $collectionForIndirectCashFlows = helper::handleExcel($data[3]);

            if (!$collectionForFinance || !$collectionForProfitsAndLossese || !$collectionForComprehensiveIncome || !$collectionForIndirectCashFlows)  
            {
                return Redirect::back()->withErrors("Please Enter a number instead of string");
            }
            $ImportFinance = ImportFinancialCenter::handleExcel($collectionForFinance, $company->id);
            $ImportProfitsAndLosses = ImportProfitsAndLosses::handleExcel($collectionForProfitsAndLossese, $company->id);
            $ImportComprehensiveIncome = ImportComprehensiveIncome::handleExcel($collectionForComprehensiveIncome, $company->id);
            $ImportIndirectCashFlows = ImportIndirectCashFlows::handleExcel($collectionForIndirectCashFlows, $company->id);


            DB::beginTransaction();
            try 
            {
                $FinancialCenter = FinancialCenter::insert($ImportFinance);
                $ProfitsAndLosses = ProfitsAndLosses::insert($ImportProfitsAndLosses);
                $ComprehensiveIncome = ComprehensiveIncome::insert($ImportComprehensiveIncome);
                $IndirectCashFlows = IndirectCashFlows::insert($ImportIndirectCashFlows);                
                DB::commit();
                return back()->with('success', 'Excel date has been successfully imported!!');

            } catch (Exception $e) 
            {
                DB::rollBack();
            }
        }
    }   
}
