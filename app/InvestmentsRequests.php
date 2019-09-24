<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvestmentsRequests extends Model
{
    protected $table = 'investments_requests'; 

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }


}
