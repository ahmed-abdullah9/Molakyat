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

    public function ProfitsAndLosses()
    {
        return $this->hasMany('App\ProfitsAndLosses');
    }


    public function IndirectCashFlows()
    {
        return $this->hasMany('App\IndirectCashFlows');
    }
}
