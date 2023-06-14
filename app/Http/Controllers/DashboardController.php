<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /** display a listing the resources */
    public function index()
    {
        // 
        return view('admin.dashboard.index');
    }
    //
    
}
