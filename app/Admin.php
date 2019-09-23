<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admins'; 

    use Notifiable;

        protected $guard = 'admin';

        protected $fillable = [
            'name', 'phone', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
 
}
