<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function flightBooking(){
        return view('flightBooking');
    }

    public function invoices(){
        return view('invoice');
    }

    public function clients(){
        return view('clients');
    }

    public function settings(){
        return view('settings');
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
