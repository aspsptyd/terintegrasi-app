<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaAdministratorController extends Controller
{
    public function index() 
    {
        return view('administrator.beranda_index');
    }

    public function index_v2() 
    {
        return view('administrator.beranda_index_v2');
    }
}
