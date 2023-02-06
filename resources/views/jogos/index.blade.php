@extends('layouts.app')

@section('content')


<h1>Listagem de Filmes Preferidos</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Ano de criação</th>
            <th scope="col">Valor</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jogos as $jogo)
        <tr>
            <th>{{ $jogo->id }}</th>
            <td>{{ $jogo->nome }}</td>
            <td>{{ $jogo->categoria }}</td>
            <td>{{ $jogo->ano_criacao }}</td>
            <td>{{ $jogo->valor }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection