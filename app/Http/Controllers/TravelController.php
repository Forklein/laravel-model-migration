<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index()
    {
        return view('travels.index');
    }

    public function show($id)
    {
        return view('travels.show');
    }
}
