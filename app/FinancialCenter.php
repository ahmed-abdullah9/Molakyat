<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinancialCenter extends Model
{
    //
    protected $table = 'financial_center'; 

    protected $fillable = [ 'year']; 

    // protected $dateFormat = 'U';

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
