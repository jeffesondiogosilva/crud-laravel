<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>{{$title}}</title>
    </head>
    <body>

    <div class="container">

    <h1>{{ $title }}</h1>
    
    {{ $slot }}    
        
    </div>
    </body>
</html>