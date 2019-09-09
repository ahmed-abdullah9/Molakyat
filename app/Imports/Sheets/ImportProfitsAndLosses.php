<?php

namespace App\Imports\Sheets;

use App\ProfitsAndLosses;
use Illuminate\Support\Facades\Redirect;

class ImportProfitsAndLosses
{

    public static function handleExcel($data, $company_id)
    {
        $collection = collect([[], []]);
        foreach($data as $key => $row)
        {
            if ($row[7] == null) {
                $collection->put(1, array_merge($collection[1], [0]));
            } else if (is_numeric($row[7])) {
                $collection->put(1, array_merge($collection[1], [$row[7]]));
            } else {
                return False;
            }

            if ($row[6] == null) {
                $collection->put(0, array_merge($collection[0], [0]));
            } else if (is_numeric($row[6])) {
                $collection->put(0, array_merge($collection[0], [$row[6]]));
            } else {
                return False;
            }
        }            

        foreach ($collection->toArray() as $key => $value) {

            $ProfitsAndLosses[] = array(
                'company_id' => $company_id,
                'year' => $value[0],
                'revenues1' => $value[4],
                'revenues2' => $value[5],
                'revenues3' => $value[6],
                'revenues4' => $value[7],
                'revenues5' => $value[8],
                'revenues6' => $value[9],

                'cost_of_sales' => $value[11],
                'other_income' => $value[13],

                'operating_expenses1' => $value[16],
                'operating_expenses2' => $value[17],
                'operating_expenses3' => $value[18],

                'cost_of_financing' => $value[21],
                'company_share1' => $value[22],
                'company_share2' => $value[23],
                'company_share3' => $value[24],
                'research_development_expenses' => $value[25],
                'revenues7' => $value[26],
                'landing_losses1' => $value[27],
                'landing_losses2' => $value[28],
                'restructing_expenses' => $value[29],
                'recovering_restructing' => $value[30],
                'net_profit1' => $value[31],
                'net_profit2' => $value[32],
                'net_profit3' => $value[33],
                'net_profit4' => $value[34],
                'net_profit5' => $value[35],
                'net_profit6' => $value[36],
                'net_profit7' => $value[37],
                'net_profit8' => $value[38],

                'zakat_expenses' => $value[40],
                'income_tax_expenses' => $value[41],

                'discontinued_operating1' => $value[44],
                'discontinued_operating2' => $value[45],
                'discontinued_operating3' => $value[46],

                'basic_profit_pershare1' => $value[51],
                'basic_profit_pershare2' => $value[52],

                'reduced_profit_pershare1' => $value[55],
                'reduced_profit_pershare2' => $value[56],

                'number_of_share1' => $value[59],
                'number_of_share2' => $value[60],

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
