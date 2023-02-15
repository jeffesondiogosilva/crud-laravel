<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SeriesController extends Controller
{
    public function index(){

        $series = Serie::all();    //Serie é a model

        return view('series.index', ['series'=>$series]);
    }
}
