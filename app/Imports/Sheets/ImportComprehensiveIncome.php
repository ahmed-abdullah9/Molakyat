<?php

namespace App\Imports\Sheets;

use App\ComprehensiveIncome;
use Illuminate\Support\Facades\Redirect;
class ImportComprehensiveIncome 
{
    //

    public static function handleExcel($data, $company_id)
    {

        foreach ($data->toArray() as $key => $value) 
        {
            $ComprehensiveIncome[] = array(
                'company_id' => $company_id,
                'year' => $value['year'],
                'type' => $value['type'],
                'comprehensive_income1' => $value[4],
                'comprehensive_income2' => $value[5],
                'comprehensive_income3' => $value[6],
                'comprehensive_income4' => $value[7],
                'comprehensive_income5' => $value[8],

                'translation_differences1' => $value[12],
                'translation_differences2' => $value[13],

                'financial_assets_available1' => $value[16],
                'financial_assets_available2' => $value[17],
                'financial_assets_available3' => $value[18],

                'Cash_flow_risk1' => $value[21],
                'Cash_flow_risk2' => $value[22],

                'cover_the_risk1' => $value[25],
                'cover_the_risk2' => $value[26],

                'Share_of_other_comprehensive' => $value[28],
                'other_comprehensive_income' => $value[29],

                'created_at' => now(),
                'updated_at' => now(),
            );
        }
        if(!empty($ComprehensiveIncome))
        {
            return $ComprehensiveIncome;
        }    
        // return True;
    }
}
