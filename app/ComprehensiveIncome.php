<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComprehensiveIncome extends Model
{
    //
    protected $table = 'comprehensive_income'; 
    
    protected $fillable = [ 'year']; 


    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
