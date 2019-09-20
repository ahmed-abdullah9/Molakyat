<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sectors extends Model
{
    //
    protected $table = 'sectors'; 

    public function getCompany()
    {
        $companies = Company::where('id', $this->id)->get();

        return $companies;
    }
}
