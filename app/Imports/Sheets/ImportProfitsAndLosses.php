<?php

namespace App\Imports\Sheets;

use App\ProfitsAndLosses;
use Illuminate\Support\Facades\Redirect;

class ImportProfitsAndLosses
{

    public static function handleExcel($data, $company_id)
    {

        foreach ($data->toArray() as $key => $value) 
        {

            $ProfitsAndLosses[] = array(
                'company_id' => $company_id,
                'year' => $value['year'],
                'type' => $value['type'],
                'revenues1' => $value[3],
                'revenues2' => $value[4],
                'revenues3' => $value[5],
                'revenues4' => $value[6],
                'revenues5' => $value[7],
                'revenues6' => $value[8],

                'cost_of_sales' => $value[10],
                'other_income' => $value[12],

                'operating_expenses1' => $value[15],
                'operating_expenses2' => $value[16],
                'operating_expenses3' => $value[17],

                'cost_of_financing' => $value[20],
                'company_share1' => $value[21],
                'company_share2' => $value[22],
                'company_share3' => $value[23],
                'research_development_expenses' => $value[24],
                'revenues7' => $value[25],
                'landing_losses1' => $value[26],
                'landing_losses2' => $value[27],
                'restructing_expenses' => $value[28],
                'recovering_restructing' => $value[29],
                'net_profit1' => $value[30],
                'net_profit2' => $value[31],
                'net_profit3' => $value[32],
                'net_profit4' => $value[33],
                'net_profit5' => $value[34],
                'net_profit6' => $value[35],
                'net_profit7' => $value[36],
                'net_profit8' => $value[37],

                'zakat_expenses' => $value[39],
                'income_tax_expenses' => $value[40],

                'discontinued_operating1' => $value[43],
                'discontinued_operating2' => $value[44],
                'discontinued_operating3' => $value[45],

                'basic_profit_pershare1' => $value[50],
                'basic_profit_pershare2' => $value[51],

                'reduced_profit_pershare1' => $value[54],
                'reduced_profit_pershare2' => $value[55],

                'number_of_share1' => $value[58],
                'number_of_share2' => $value[59],

                'created_at' => now(),
                'updated_at' => now(),
            );
        }
        if(!empty($ProfitsAndLosses))
        {
          return $ProfitsAndLosses;
        }   
    }
}
