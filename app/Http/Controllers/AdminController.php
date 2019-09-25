<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function showAllAdmins()
    {
        $admins = Admin::all();
        return view('admin.admin', ['admins' => $admins]);
    }
}
