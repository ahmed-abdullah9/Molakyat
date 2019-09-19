<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    public function financialCenter()
    {
        return $this->hasMany('App\FinancialCenter');
    }

    public function profitsAndLosses()
    {
        return $this->hasMany('App\ProfitsAndLosses');
    }

    public function indirectCashFlows()
    {
        return $this->hasMany('App\IndirectCashFlows');
    }

    public function comprehensiveIncome()
    {
        return $this->hasMany('App\ComprehensiveIncome');
    }

    public function getProfitsAndLosses()
    {
        $profitsAndLosses = $this;
        $profit = ProfitsAndLosses::where('company_id', $profitsAndLosses->id)->latest('year')->first();
    //    dd($profitsAndLosses->id);
        if ($profit == null) {
            return collect();
        }
        $revenues = $profit->revenues1 + $profit->revenues2 + $profit->revenues3 + $profit->revenues4 +              
        $profit->revenues5 + $profit->revenues6;

        $costOfsales = $profit->cost_of_sales;//
        $otherIncome = $profit->other_income;//

        $totalOperatingIncome = ($revenues - $costOfsales)+ $otherIncome;//
        $totalOperatingExpenses = $profit->operating_expenses1 + $profit->operating_expenses2 +                                    
        $profit->operating_expenses3;

        $profitOfOperations = ($totalOperatingIncome - $totalOperatingExpenses);
        
        $continuingOperations = ($profitOfOperations - $profit->cost_of_financing) +                                                
        $profit->company_share1 + $profit->company_share2 +
                                 $profit->company_share3 - $profit->research_development_expenses +
                                 $profit->revenues7 - $profit->landing_losses1 - $profit->landing_losses2 - $profit->restructing_expenses + $profit->recovering_restructing 
                                 + $profit->net_profit1 + $profit->net_profit2 + $profit->net_profit3 + $profit->net_profit4 + $profit->net_profit5 + $profit->net_profit6 
                                 + $profit->net_profit7 + $profit->net_profit8; 


        $zakatExpense =  $profit->zakat_expenses + $profit->income_tax_expenses; // line 39 and 40 togther
        $profitFromContinuousOperations = $continuingOperations -$profit->zakat_expenses - $profit->income_tax_expenses ;

        $collection = collect([
            'revenues' => $revenues,
            'costOfsales' => $costOfsales,
            'otherIncome' => $otherIncome,
            'totalOperatingIncome' => $totalOperatingIncome,
            'totalOperatingExpenses' => $totalOperatingExpenses,
            'profitOfOperations' => $profitOfOperations ,
            'continuingOperations' => $continuingOperations,
            'zakatExpense' => $zakatExpense,
            'profitFromContinuousOperations' => $profitFromContinuousOperations
        ]);
        return $collection;
    }
    
}
