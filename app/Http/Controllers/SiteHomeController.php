<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteHomeController extends Controller
{
   

    public function index()
    {
        return view('layouts.base');
    }
}
