<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function index(){
        $nome = 'Jeff';
        $filme_preferido = 'Matrix';
        return view('filmes.index', ['nome'=>$nome, 'filme-preferido'=>$filme_preferido]);
    }
}
