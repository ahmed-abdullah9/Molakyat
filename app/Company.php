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

}
