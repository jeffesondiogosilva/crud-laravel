<!-- @extends('layouts.app')

@section('title', 'Listagem')

@section('content')

    <h1>Listagem de Filmes Preferidos</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Filme Preferido</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach($filmes as $filme)
        <tr>
            <th>{{ $filme->id }}</th>
            <td>{{ $filme->nome }}</td>
            <td>{{ $filme->filme_preferido }}</td>            
        </tr>
    @endforeach
  </tbody>
</table>

@endsection -->

<h1>{{ $titulo }}</h1>