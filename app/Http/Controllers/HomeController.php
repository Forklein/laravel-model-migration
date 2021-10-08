<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;

class HomeController extends Controller
{
    public function index()
    {
        $travels = Travel::all();
        dd($travels);
        return view('home');
    }
}
