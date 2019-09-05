@extends ('layouts.master')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vecmocon</title>

        <!-- Fonts -->
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      
    </head>
    <body style="background: #e6e6ff">

@section ('content')
    @include ('sections.navigation')
    @include ('sections.main')
    @include ('sections.usp')
    @include ('sections.newsfeed')
    @include ('sections.footer')
@endsection
      
    </body>
</html>
