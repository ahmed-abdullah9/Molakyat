<?php

namespace App\Imports\Sheets;

use App\FinancialCenter;
use Illuminate\Support\Facades\Redirect;

class ImportFinancialCenter 
{
    //

    public static function handleExcel($data, $company_id)
    {        

        foreach ($data->toArray() as $key => $value) 
        {

            $FinancialCenter[] = array(
                'company_id' => $company_id,
                'year' => $value['year'],
                'type' => $value['type'],
                'current_assets1' => $value[3],
                'current_assets2' => $value[4],
                'current_assets3' => $value[5],
                'current_assets4' => $value[6],
                'current_assets5' => $value[7],
                'current_assets6' => $value[8],
                'current_assets7' => $value[9],
                'current_assets8' => $value[10],
                'current_assets9' => $value[11],
                'current_assets10' => $value[12],
                'current_assets11' => $value[13],
                'current_assets12' => $value[14],
                'current_assets13' => $value[15],
                'current_assets14' => $value[16],
                'current_assets15' => $value[17],
                'current_assets16' => $value[18],
                'current_assets17' => $value[19],
                'current_assets18' => $value[20],
                'current_assets19' => $value[21],
                'current_assets20' => $value[22],

                'current_tax_assets1' => $value[24],
                'current_tax_assets2' => $value[25],

                'disposal_groups' => $value[28],
                
                'non_current_assets1' => $value[31],
                'non_current_assets2' => $value[32],
                'non_current_assets3' => $value[33],
                'non_current_assets4' => $value[34],
                'non_current_assets5' => $value[35],
                'non_current_assets6' => $value[36],
                'non_current_assets7' => $value[37],
                'non_current_assets8' => $value[38],
                'non_current_assets9' => $value[39],
                'non_current_assets10' => $value[40],
                'non_current_assets11' => $value[41],
                'non_current_assets12' => $value[42],
                'non_current_assets13' => $value[43],
                'non_current_assets14' => $value[44],
                'non_current_assets15' => $value[45],
                'non_current_assets16' => $value[46],
                'non_current_assets17' => $value[47],
                'non_current_assets18' => $value[48],
                'non_current_assets19' => $value[49],
                'non_current_assets20' => $value[50],
                'non_current_assets21' => $value[51],
                'non_current_assets22' => $value[52],
                'non_current_assets23' => $value[53],
                'non_current_assets24' => $value[54],

                'currentـliabilities1' => $value[60],
                'currentـliabilities2' => $value[61],

                'currentـliabilities_special47' => $value[63],
                'liabilities1' => $value[64],
                'liabilities2' => $value[65],
                'liabilities3' => $value[66],
                'liabilities4' => $value[67],
                'liabilities5' => $value[68],
                'liabilities6' => $value[69],
                'liabilities7' => $value[70],
                'liabilities8' => $value[71],
                'liabilities9' => $value[72],
                'liabilities10' => $value[73],
                'liabilities11' => $value[74],
                'liabilities12' => $value[75],
                'liabilities13' => $value[76],
                'liabilities14' => $value[77],
                'liabilities15' => $value[78],
                'liabilities16' => $value[79],
                'liabilities17' => $value[80],
                'liabilities18' => $value[81],
                'liabilities19' => $value[82],
                // 'liabilities20' => $value[84],

                'current_tax_liabilities1' => $value[84],
                'current_tax_liabilities2' => $value[85],

                'liabilities_directly' => $value[88],
               
                'non_current_liabilities1' => $value[91],
                'non_current_liabilities2' => $value[92],

                'total_non_current_liabilities1' => $value[94],
                'total_non_current_liabilities2' => $value[95],
                'total_non_current_liabilities3' => $value[96],
                'total_non_current_liabilities4' => $value[97],
                'total_non_current_liabilities5' => $value[98],
                'total_non_current_liabilities6' => $value[99],
                'total_non_current_liabilities7' => $value[100],
                'total_non_current_liabilities8' => $value[101],
                'total_non_current_liabilities9' => $value[102],
                'total_non_current_liabilities10' => $value[103],
                'total_non_current_liabilities11' => $value[104],
                'total_non_current_liabilities12' => $value[105],
                'total_non_current_liabilities13' => $value[106],
                'total_non_current_liabilities14' => $value[107],

                'property_rights1' => $value[111],
                'property_rights2' => $value[112],
                'property_rights3' => $value[113],
                'property_rights4' => $value[114],
                'property_rights5' => $value[115],
                'property_rights6' => $value[116],
                'property_rights7' => $value[117],
                'property_rights8' => $value[118],
                
                'other_reserves1' => $value[120],
                'other_reserves2' => $value[121],
                'other_reserves3' => $value[122],
                'other_reserves4' => $value[123],
                'other_reserves5' => $value[124],
                'other_reserves6' => $value[125],
                'other_reserves7' => $value[126],
                'other_reserves8' => $value[127],
                'created_at' => now(),
                'updated_at' => now(),
            );
        }
        if(!empty($FinancialCenter))
        {
            return $FinancialCenter;
        }    
        return false;
    }
}
