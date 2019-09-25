<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showAllUsers()
    {
        $users = User::all();
        return view('admin.user', ['users' => $users]);
    }

}
