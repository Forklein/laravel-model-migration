<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;

class TravelController extends Controller
{
    public function index()
    {
        $travels = Travel::all();
        return view('travels.index', compact('travels'));
    }

    public function show($id)
    {
        $travel = Travel::findorfail($id);
        return view('travels.show', compact('travel'));
    }
}
