<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardControllers extends Controller
{
    //
    public function index()
    {


        return view('layout.index');
    }

    public function datatable()
    {

        return view('dataindex');
    }
}
