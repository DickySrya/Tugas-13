<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function table()
    {
        return view('table');
    }
    
    public function data()
    {
        return view('datatable');
    }
    
}
