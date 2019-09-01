<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Auth;


class CompanyController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showCompany($id = null)
    {
        $user_id = Auth::id();
        $companies = Company::where('user_id',$user_id)->get();
        return view('user.companies', ['companies' => $companies]);
    }

    public function addCompany()
    {
        return view('user.addCompany');
    }

    public function postAddCompany(Request $request)
    {
        $company_name = $request['company_name'];
        $business_activities = $request['business_activities'];
        $cr_number = $request['cr_number'];
        $business_type = $request['business_type'];

        $company = new Company();
        $company->name = $company_name;
        $company->activity = $business_activities;
        $company->CR = $cr_number;
        $company->type = $business_type;
        $company->user_id = Auth::id();
        
        if($company->save()) {
            return redirect()->route('user.home');
        }
        return redirect()->back();
    }


}
