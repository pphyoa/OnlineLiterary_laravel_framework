<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsingController extends Controller
{
    public function index(){
        return view('using');
    }
}
