!<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        
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




