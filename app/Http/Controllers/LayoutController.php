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
    public function workFlow(){

        $workFlows = [[
            'bg-color'=>'red',
            'name'=>'Experiment',
            'icon'=>'fa-solid fa-flask'
              ],
            [
            'bg-color'=>'blue',
            'name'=>'Document',
            'icon'=>'fa-sharp fa-solid fa-file'
              ],
            [
            'bg-color'=>'purple',
            'name'=>'Protocol',
            'icon'=>'fa-solid fa-toilet-paper'
              ],
            [
            'bg-color'=>'indigo',
            'name'=>'Report',
            'icon'=>'fa-sharp fa-solid fa-gears'
              ],
            [
            'bg-color'=>'pink',
            'name'=>'Dataset',
            'icon'=>'fa-solid fa-file'
              ],
            [
            'bg-color'=>'slate',
            'name'=>'Folders',
            'icon'=>'fa-solid fa-database'
              ],
            ];


        return view('workFlow')->with('workFlows',$workFlows);

    }
}
