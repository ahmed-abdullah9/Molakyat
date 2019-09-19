<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Auth;
use App\Sectors;
use App\Enums\Sector;
use App\ProfitsAndLosses;
use App\FinancialCenter;
use App\ComprehensiveIncome;
use App\IndirectCashFlows;


class CompanyController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest:researchers');
        // $this->middleware('auth');
    }

    // for researchers 
    public function showAllCompany()
    {
        $companies = Company::all();
        $sectors = Sectors::all();
        return view('companies', ['companies' => $companies, 'sectors' => $sectors]);
    }

    public function companyDetails($id)
    {
        $companies = Company::where('id',$id)->first();
        $user_id = Auth::id();
        // $companies = Company::where('user_id',$user_id)->get();
        $FinancialCenter = FinancialCenter::where('company_id', $id)->get();
        $FinancialCenter->makeHidden(['id','company_id','created_at', 'updated_at']);

        $ProfitsAndLosses = ProfitsAndLosses::where('company_id', $id)->get();
        $ProfitsAndLosses->makeHidden(['id','company_id','created_at', 'updated_at']);

        $ComprehensiveIncome = ComprehensiveIncome::where('company_id', $id)->get();
        $ComprehensiveIncome->makeHidden(['id','company_id','created_at', 'updated_at']);

        $IndirectCashFlows = IndirectCashFlows::where('company_id', $id)->get();
        $IndirectCashFlows->makeHidden(['id','company_id','created_at', 'updated_at']);

        return view('companyDetail', ['FinancialCenter' => $FinancialCenter->toArray(), 
                                    'ProfitsAndLosses' => $ProfitsAndLosses->toArray(),
                                    'ComprehensiveIncome' => $ComprehensiveIncome->toArray(),
                                    'IndirectCashFlows' => $IndirectCashFlows->toArray()]);
                                   
    }

    // for user to show thier companies
    public function showUserCompany()
    {
        $user_id = Auth::id();
        $companies = Company::where('user_id',$user_id)->get();
        return view('user.companies', ['companies' => $companies]);
    }

    public function addCompany()
    {
        $sectors = Sectors::all();
        return view('user.addCompany', ['sectors' => $sectors]);
    }

    public function postAddCompany(Request $request)
    {
        $company_name = $request['company_name'];
        $business_activities = $request['business_activities'];
        $company_username = $request['company_username'];

        $company = new Company();
        $company->name = $company_name;
        $company->username = $company_username;
        $company->sector = $business_activities;
        $company->user_id = Auth::id();
        
        if($company->save()) {
            return redirect()->route('user.companies');
        }
        return redirect()->back();
    }

    public function editCompany($id)
    {
        $company = Company::where('id', $id)->first();

        return view('user.editCompany', ['company' => $company]);
    }
    
    public function postEditCompany(Request $request ,$id)
    {
        $company_name = $request['company_name'];
        $business_activities = $request['business_activities'];
        $cr_number = $request['cr_number'];
        $business_type = $request['business_type'];

        $company = Company::where('id', $id)->first();
        $company->name = $company_name;
        $company->activity = $business_activities;
        $company->CR = $cr_number;
        $company->type = $business_type;

        if($company->update()) {
            return redirect()->route('user.companies');        
        }
        return redirect()->back();
    }


    public function postDeleteCompany($id)
    {
        $company = Company::where('id', $id)->first();
        if($company->delete()) {
            return redirect()->route('user.companies');        
        }
        return redirect()->back();
    }


}
