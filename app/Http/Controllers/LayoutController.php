<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function admin(){
        return view('admin');
    }

    public function subAdmin(){
        return view('subAdmin');
    }

    public function vendorDashboard(){
        return view('vendorDashboard');
    }
}
