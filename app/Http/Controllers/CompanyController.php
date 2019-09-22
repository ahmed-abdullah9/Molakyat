<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Auth;
use App\Sectors;
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
        $inserted = array("HHHHHHHHH" ); // not necessarily an array, see manual quote
        // $keys = array_splice( $FinancialCenter[0]->toArray(), 53, 0,  $inserted); // splice in at position 3
        $imagesData = $FinancialCenter->map(function ($post) {
            $test= $post->toArray();
            $TotalCurrentTaxAssets = $post->current_tax_assets1 + $post->current_tax_assets2;
            array_splice($test, 23, 0, ['TotalCurrentTaxAssets' => $TotalCurrentTaxAssets]);

            $TotalCurrentAssetsBefore = $post->current_assets1 + $post->current_assets2 + $post->current_assets3  
                                + $post->current_assets4 + $post->current_assets5 + $post->current_assets6 + $post->current_assets7
                                + $post->current_assets8 + $post->current_assets9 + $post->current_assets10 + $post->current_assets11 + $post->current_assets12
                                 + $post->current_assets13 + $post->current_assets14 + $post->current_assets15 + $post->current_assets16 + $post->current_assets17 
                                 + $post->current_assets18 + $post->current_assets19 + $post->current_assets20 
                                 + $TotalCurrentTaxAssets;
                                 
            array_splice($test, 24, 0, ['TotalCurrentAssetsBefore' => $TotalCurrentAssetsBefore]);

            $TotalCurrentAssets = $TotalCurrentAssetsBefore + $post->disposal_groups;
            array_splice($test, 26, 0, ['TotalCurrentAssets' => $TotalCurrentAssets]);
            
            $TotalNonCurrentAssets = $post->non_current_assets1 + $post->non_current_assets2 + $post->non_current_assets3
                                    + $post->non_current_assets4 + $post->non_current_assets5 + $post->non_current_assets6
                                    + $post->non_current_assets7 + + $post->non_current_assets8 + $post->non_current_assets9
                                    + $post->non_current_assets10 + $post->non_current_assets11 + $post->non_current_assets12 
                                    + $post->non_current_assets13 + $post->non_current_assets14 + $post->non_current_assets15
                                    + $post->non_current_assets16 + $post->non_current_assets17 + $post->non_current_assets18
                                    + $post->non_current_assets19 + $post->non_current_assets20 + $post->non_current_assets21
                                    + $post->non_current_assets22 + $post->non_current_assets23 + $post->non_current_assets24;
            array_splice($test, 51, 0, ['TotalNonCurrentAssets' => $TotalNonCurrentAssets]);

            $TotalAssets = $TotalNonCurrentAssets + $TotalCurrentAssets;
            array_splice($test, 52, 0, ['TotalAssets' => $TotalAssets]);

            $TotalCurrentProvisions = $post->currentـliabilities1 + $post->currentـliabilities2;
            array_splice($test, 55, 0, ['TotalCurrentProvisions' => $TotalCurrentProvisions]);

            $TotalCurrentZakat = $post->current_tax_liabilities1 + $post->current_tax_liabilities2;
            array_splice($test, 78, 0, ['TotalCurrentZakat' => $TotalCurrentZakat]);

            $TotalLiabilities = $TotalCurrentProvisions + $post->currentـliabilities_special47 + $post->liabilities1
                                + $post->liabilities2 + $post->liabilities3 + $post->liabilities4 + $post->liabilities5
                                + $post->liabilities6 + $post->liabilities7 + $post->liabilities8 + $post->liabilities9
                                + $post->liabilities10 + $post->liabilities11 + $post->liabilities12 + $post->liabilities13
                                + $post->liabilities14 + $post->liabilities15 + $post->liabilities16 + $post->liabilities17
                                + $post->liabilities18 + $post->liabilities19 + $TotalCurrentZakat;
            array_splice($test, 79, 0, ['TotalLiabilities' => $TotalLiabilities]);

            $TotalCurrentLiabilities = $TotalLiabilities + $post->liabilities_directly;
            array_splice($test, 81, 0, ['TotalCurrentLiabilities' => $TotalCurrentLiabilities]);


            // dd($test);

            return $post = (object) $test;
        });

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
