<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndirectCashFlows extends Model
{
    //
    protected $table = 'indirect_cash_flows';

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

}
