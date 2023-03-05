<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Serie;

class SeriesController extends Controller
{
    public function index(){

        // $series = Serie::all();    //Serie é a model

        $series = DB::select("SELECT * FROM series");

        return view('series.index')->with('series', $series);
    }

    public function create(){

        return view('series.create');

    }
    public function store(Request $request){

        $nomeSerie = $request->input('nome');

        if(DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie])) {
            return redirect('series');
        } else {
            return "Deu erro";
        }

    }
}
