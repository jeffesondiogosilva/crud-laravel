<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(){

        $series = Serie::all();    //Serie é a model

        return view('');
    }
}
