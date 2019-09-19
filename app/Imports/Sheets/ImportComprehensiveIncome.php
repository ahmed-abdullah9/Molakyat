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
                'year' => $value[0],
                
                'comprehensive_income1' => $value[5],
                'comprehensive_income2' => $value[6],
                'comprehensive_income3' => $value[7],
                'comprehensive_income4' => $value[8],
                'comprehensive_income5' => $value[9],

                'translation_differences1' => $value[13],
                'translation_differences2' => $value[14],

                'financial_assets_available1' => $value[17],
                'financial_assets_available2' => $value[18],
                'financial_assets_available3' => $value[19],

                'Cash_flow_risk1' => $value[22],
                'Cash_flow_risk2' => $value[23],

                'cover_the_risk1' => $value[26],
                'cover_the_risk2' => $value[27],

                'Share_of_other_comprehensive' => $value[29],
                'other_comprehensive_income' => $value[30],

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
