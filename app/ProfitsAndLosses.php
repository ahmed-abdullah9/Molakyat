<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfitsAndLosses extends Model
{
    //
    protected $table = 'profits_and_losses'; 


    public function company()
    {
        return $this->belongsTo('App\Company');
    }

}
