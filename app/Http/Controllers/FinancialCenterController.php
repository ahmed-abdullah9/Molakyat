<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImportExcel;
use Excel;

class FinancialCenterController extends Controller
{
    //
    //
    public function Index()
    {
        $data = ImportExcel::all();
        return view('ImportExcel', ['data' => $data]);
    }

    public function Import(Request $request)
    {
        $this->validate($request, [
            'select_file'  => 'required|mimes:xls,xlsx'
           ]);

        $path = $request->file('select_file')->getRealPath();

        $data = Excel::load($path)->get();
        
        if($data->count() > 0)
        {
            foreach($data->toArray() as $key => $row)
            {      
            dd($row);
            if ($row->filter()->isNotEmpty()) {
                # code...
                $insert_data[] = array(
                 'CustomerName'  => $row['alasm'],
                 'Gender'   => $row['alaamr'],
                 'Address'   => $row['alaanoan'],
                 'City'    => $row['almdyn'],
                 'PostalCode'  => $row['alrmz'],
                 'Country'   => $row['albld']
                );
            }
        }
      
         if(!empty($insert_data))
         {
            ImportExcel::insert($insert_data);
         }
        }
        return back()->with('success', 'Excel date has been successfully imported!!');
    }    
}
