<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResearcherController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:researchers');
    }

    public function index()
    {
        return view('researcher.home');
    }
}
