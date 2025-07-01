<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Relationships</title>

</head>
<body>
<h1>Relationships One To One Polymorphic</h1>

<ol>
    @foreach($photos as $photo)
        <li>
            <div>
                <b>Photo filename: {{ $photo->filename }}</b>
                <pre>{{ $photo->imageable->name }}</pre>
            </div>
        </li>
    @endforeach
</ol>
<hr>
<ol>
    @foreach($mans as $man)
        <li>
            <div>
                <b>Man name: {{ $man->name }}</b>
                <pre>{{ $man->image }}</pre>
            </div>
        </li>
    @endforeach
</ol>
<hr>
<ol>
    @foreach($women as $woman)
        <li>
            <div>
                <b>Woman name: {{ $woman->name }}</b>
                <pre>{{ $woman->image }}</pre>
            </div>
        </li>
    @endforeach
</ol>
<a href="/">
    <p>back</p>
</a>

</body>
</html>
