<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IpcrController extends Controller
{
    public function select_tasks(Request $request) 
    {
        dd($request->input('checkBox'));

        // return view('welcome');
    }
}
