<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        return view('home');
    }

    public function trains() {

        $trains = Train::all();
        
        return view('trains', compact('trains'));
    }

}
