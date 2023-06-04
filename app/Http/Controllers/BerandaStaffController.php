<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaStaffController extends Controller
{
    public function index() 
    {
        return view('staff.beranda_index');
    }
}
