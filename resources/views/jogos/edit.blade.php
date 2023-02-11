@extends('layouts.app')

@section('title', 'Edição')

@section('content')
    <div class="container mt-5">
        <h1>Editar jogo</h1>
        <hr>
        <form method="post" action="{{ route('jogos-store')}}">
        @csrf            
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" value="{{ $jogos->nome }}" placeholder="digite um nome">
                </div> <br>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" value="{{ $jogos->categoria }}" placeholder="digite a categoria">
                </div> <br>
                <div class="form-group">
                    <label for="ano_criacao">Ano de criação:</label>
                    <input type="number" class="form-control" name="ano_criacao" value="{{ $jogos->ano_criacao }}" placeholder="digite o ano de criação">
                </div> <br>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="number" class="form-control" name="valor" value="{{ $jogos->valor }}" placeholder="digite o valor">
                </div> <br>
                <div class="form-group">                    
                    <input type="submit" class="btn btn-success" name="submit" value="Enviar" >
                </div>
            </div>
        </form>
    </div>


@endsection