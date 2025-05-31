<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Relationships</title>


</head>
<body>
<h1>Relationships OneToMany</h1>

<ol>
    @foreach($authors as $author)
        <li>
            <div>
                <b>{{ $author->name }}</b>
                @foreach($author->books as $book)
                    <p>{{ $book->title }} (<small>{{ $book->author->name }}</small>)</p>
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
