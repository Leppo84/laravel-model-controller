<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{$pageName}}</title>
</head>
<body>
    <h2>
        {{$pageTitle}}
    </h2>

    <div class="container">
        @foreach ($movies as $movie)
        <div class="card">
            <h3>
                {{$movie -> title}}
            </h3>
            <h4>
                {{$movie -> original_title}}
            </h4>
            <span class="lang">
                {{$movie -> nationality}}
            </span>
            <span> - {{$movie -> date}} </span>
        </div>
        @endforeach
    </div>
</body>
</html>