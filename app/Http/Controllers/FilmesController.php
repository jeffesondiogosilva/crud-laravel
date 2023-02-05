<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function index(){

        $filmes = Filme::all();
        // dd($filmes);
        return view('filmes.index', ['filmes'=>$filmes]);
    }
}
