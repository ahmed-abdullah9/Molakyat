<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvestmentsRequests;
use Auth;

class InvestmentsRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAllRequest()
    {
        $InvestmentsRequests = InvestmentsRequests::all();
        return view('admin.investmentsRequests', ['InvestmentsRequests' => $InvestmentsRequests]);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function addRequest()
    // {
    //     return view('admin.addRequests');
    // }


    public function postAddRequests(Request $request)
    {
        if($request->ajax()){
            $InvestmentsRequests = new InvestmentsRequests();
            $InvestmentsRequests->user_id = Auth::id();
            $InvestmentsRequests->company_id = $request->company_id;
            $InvestmentsRequests->description =$request->description;
            $InvestmentsRequests->type = 0;
            $InvestmentsRequests->status = 0;
            if($InvestmentsRequests->save()) {
                return response()->json("Success");
            }
            return redirect()->back();
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
