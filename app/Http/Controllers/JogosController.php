<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Jogo;

class JogosController extends Controller
{
    public function index()
    {
        $jogos = Jogo::all();  //o método all vai retornar todos os dados da tabela jogos
        
        return view('jogos.index', ['jogos'=>$jogos]);

    }


    public function create()
    {
        return view('jogos.create');

    }
    public function store(Request $request)
    {

        Jogo::create($request->all());
        return redirect()->route('jogos-index');

    }
    public function edit($id)
    {
        $jogos = Jogo::where('id', $id)->first();
        if(!empty($jogos)){
            
            return view('jogos.edit', ['jogos' => $jogos]);
        }
        else {
            return redirect()->route('jogos-index');
        }
        
       

    }
}
