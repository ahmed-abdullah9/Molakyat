<?php



namespace App\Imports\Sheets;

use App\IndirectCashFlows;
use Illuminate\Support\Facades\Redirect;

class ImportIndirectCashFlows 
{

    public static function handleExcel($data, $company_id)
    {
        
        foreach ($data->toArray() as $key => $value) 
        {
            $IndirectCashFlows[] = array(
                'company_id' => $company_id,
                'year' => $value[0],
                'profit_before_zakat' => $value[5],

                'adjustment_for_consumption_and_amortization1' => $value[9],
                'adjustment_for_consumption_and_amortization2' => $value[10],
                'adjustment_for_consumption_and_amortization3' => $value[11],

                'adjustment_for_losses1' => $value[14],
                'adjustment_for_losses2' => $value[15],
                'adjustment_for_losses3' => $value[16],

                'adjustment_for_landing_losses1' => $value[19],
                'adjustment_for_landing_losses2' => $value[20],
                'adjustment_for_landing_losses3' => $value[21],

                'other_adjustment1' => $value[24],
                'other_adjustment2' => $value[25],
                'other_adjustment3' => $value[26],
                'other_adjustment4' => $value[27],
                'other_adjustment5' => $value[28],
                'other_adjustment6' => $value[29],
                'other_adjustment7' => $value[30],
                'other_adjustment8' => $value[31],
                
                'working_capital_adjustment1' => $value[36],
                'working_capital_adjustment2' => $value[37],
                'working_capital_adjustment3' => $value[38],
                'working_capital_adjustment4' => $value[39],
                'working_capital_adjustment5' => $value[40],

                'operational_activities1' => $value[43],
                'operational_activities2' => $value[44],
                'operational_activities3' => $value[45],
                'operational_activities4' => $value[46],
                'operational_activities5' => $value[47],
                'operational_activities6' => $value[48],
                'operational_activities7' => $value[49],

                'investment_activities1' => $value[52],
                'investment_activities2' => $value[53],
                'investment_activities3' => $value[54],
                'investment_activities4' => $value[55],
                'investment_activities5' => $value[56],
                'investment_activities6' => $value[57],
                'investment_activities7' => $value[58],
                'investment_activities8' => $value[59],
                'investment_activities9' => $value[60],
                'investment_activities10' => $value[61],
                'investment_activities11' => $value[62],
                'investment_activities12' => $value[63],
                'investment_activities13' => $value[64],
                'investment_activities14' => $value[65],
                'investment_activities15' => $value[66],
                'investment_activities16' => $value[67],
                'investment_activities17' => $value[68],
                'investment_activities18' => $value[69],
                'investment_activities19' => $value[70],
                'investment_activities20' => $value[71],
                'investment_activities21' => $value[72],
                'investment_activities22' => $value[73],
                'investment_activities23' => $value[74],

                'financing_activities1' => $value[77],
                'financing_activities2' => $value[78],
                'financing_activities3' => $value[79],
                'financing_activities4' => $value[80],
                'financing_activities5' => $value[81],
                'financing_activities6' => $value[82],
                'financing_activities7' => $value[83],
                'financing_activities8' => $value[84],
                'financing_activities9' => $value[85],
                'financing_activities10' => $value[86],
                'financing_activities11' => $value[87],
                'financing_activities12' => $value[88],
                'financing_activities13' => $value[89],
                'financing_activities14' => $value[90],
                'financing_activities15' => $value[91],
                'financing_activities16' => $value[92],
                'financing_activities17' => $value[93],
                'financing_activities18' => $value[94],

                'effect_of_foreign_exchange' => $value[97],

                'beginning_cash_equivalents' => $value[99],
                'created_at' => now(),
                'updated_at' => now(),
            );
        }
        if(!empty($IndirectCashFlows))
        {
            return $IndirectCashFlows;
        }    
        return True;
    }
}