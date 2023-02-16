@extends('layouts.app')   
<!-- usando layouts como estrutura base  -->

@section('destaque', 'Series') 

@section('content')

    <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Ano de criação</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach($series as $serie)
                <tr>
                    <th>{{ $serie->id }}</th>
                    <td>{{ $serie->nome }}</td>
                    <td>{{ $serie->categoria }}</td>
                    <td>{{ $serie->ano_criacao }}</td>
                    

                    
                </tr>
                @endforeach
            </tbody>
        </table>

    </body>
</html>


@endsection