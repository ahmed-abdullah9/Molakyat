<?php

namespace App\Imports\Sheets;

use App\FinancialCenter;
use Illuminate\Support\Facades\Redirect;

class ImportFinancialCenter 
{
    //

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

            $FinancialCenter[] = array(
                'company_id' => $company_id,
                'year' => $value[0],
                'current_assets1' => $value[4],
                'current_assets2' => $value[5],
                'current_assets3' => $value[6],
                'current_assets4' => $value[7],
                'current_assets5' => $value[8],
                'current_assets6' => $value[9],
                'current_assets7' => $value[10],
                'current_assets8' => $value[11],
                'current_assets9' => $value[12],
                'current_assets10' => $value[13],
                'current_assets11' => $value[14],
                'current_assets12' => $value[15],
                'current_assets13' => $value[16],
                'current_assets14' => $value[17],
                'current_assets15' => $value[18],
                'current_assets16' => $value[19],
                'current_assets17' => $value[20],
                'current_assets18' => $value[21],
                'current_assets19' => $value[22],
                'current_assets20' => $value[23],

                'current_tax_assets1' => $value[25],
                'current_tax_assets2' => $value[26],

                'disposal_groups' => $value[29],
                
                'non_current_assets1' => $value[32],
                'non_current_assets2' => $value[33],
                'non_current_assets3' => $value[34],
                'non_current_assets4' => $value[35],
                'non_current_assets5' => $value[36],
                'non_current_assets6' => $value[37],
                'non_current_assets7' => $value[38],
                'non_current_assets8' => $value[39],
                'non_current_assets9' => $value[40],
                'non_current_assets10' => $value[41],
                'non_current_assets11' => $value[42],
                'non_current_assets12' => $value[43],
                'non_current_assets13' => $value[44],
                'non_current_assets14' => $value[45],
                'non_current_assets15' => $value[46],
                'non_current_assets16' => $value[47],
                'non_current_assets17' => $value[48],
                'non_current_assets18' => $value[49],
                'non_current_assets19' => $value[50],
                'non_current_assets20' => $value[51],
                'non_current_assets21' => $value[52],
                'non_current_assets22' => $value[53],
                'non_current_assets23' => $value[54],
                'non_current_assets24' => $value[55],

                'currentـliabilities1' => $value[61],
                'currentـliabilities2' => $value[62],

                'currentـliabilities_special47' => $value[64],
                'liabilities1' => $value[65],
                'liabilities2' => $value[66],
                'liabilities3' => $value[67],
                'liabilities4' => $value[68],
                'liabilities5' => $value[69],
                'liabilities6' => $value[70],
                'liabilities7' => $value[71],
                'liabilities8' => $value[72],
                'liabilities9' => $value[73],
                'liabilities10' => $value[74],
                'liabilities11' => $value[75],
                'liabilities12' => $value[76],
                'liabilities13' => $value[77],
                'liabilities14' => $value[78],
                'liabilities15' => $value[79],
                'liabilities16' => $value[80],
                'liabilities17' => $value[81],
                'liabilities18' => $value[82],
                'liabilities19' => $value[83],
                // 'liabilities20' => $value[84],

                'current_tax_liabilities1' => $value[85],
                'current_tax_liabilities2' => $value[86],

                'liabilities_directly' => $value[89],
               
                'non_current_liabilities1' => $value[92],
                'non_current_liabilities2' => $value[93],

                'total_non_current_liabilities1' => $value[95],
                'total_non_current_liabilities2' => $value[96],
                'total_non_current_liabilities3' => $value[97],
                'total_non_current_liabilities4' => $value[98],
                'total_non_current_liabilities5' => $value[99],
                'total_non_current_liabilities6' => $value[100],
                'total_non_current_liabilities7' => $value[101],
                'total_non_current_liabilities8' => $value[102],
                'total_non_current_liabilities9' => $value[103],
                'total_non_current_liabilities10' => $value[104],
                'total_non_current_liabilities11' => $value[105],
                'total_non_current_liabilities12' => $value[106],
                'total_non_current_liabilities13' => $value[107],
                'total_non_current_liabilities14' => $value[108],

                'property_rights1' => $value[112],
                'property_rights2' => $value[113],
                'property_rights3' => $value[114],
                'property_rights4' => $value[115],
                'property_rights5' => $value[116],
                'property_rights6' => $value[117],
                'property_rights7' => $value[118],
                'property_rights8' => $value[119],
                
                'other_reserves1' => $value[121],
                'other_reserves2' => $value[122],
                'other_reserves3' => $value[123],
                'other_reserves4' => $value[124],
                'other_reserves5' => $value[125],
                'other_reserves6' => $value[126],
                'other_reserves7' => $value[127],
                'other_reserves8' => $value[128],
                'created_at' => now(),
                'updated_at' => now(),
            );
        }
        if(!empty($FinancialCenter))
        {
            return $FinancialCenter;
        }    
        return True;
    }
}
