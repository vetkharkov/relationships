<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Relationships</title>


</head>
<body>
<h1>Relationships ManyToMany</h1>

<ol>
    @foreach($cinemas as $cinema)
        <li>
            <div>
                <b>{{ $cinema->name }}</b>
                @foreach($cinema->movies as $movie)
                    <p>{{ $movie->title }} </p>
                @endforeach
            </div>
        </li>
    @endforeach
</ol>
<hr>
<ol>
    @foreach($movies as $movie)
        <li>
            <div>
                <b>{{ $movie->title }}</b>
                @foreach($movie->cinemas as $cinema)
                    <p>{{ $cinema->name }} </p>
                @endforeach
            </div>
        </li>
    @endforeach
</ol>

<a href="/">
    <p>back</p>
</a>

</body>
</html>
