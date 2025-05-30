<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Relationships</title>


</head>
<body>
<h1>Relationships OneToOne</h1>

<p><b>Name: </b><span>{{ $user->name }}</span> <b>PASSPORT:</b> {{ $user->passport->code }}</p>

<p><b>Name: </b><span>{{ $passport->user->name }}</span> <b>PASSPORT:</b> {{ $passport->code }}</p>

<a href="/">
    <p>back</p>
</a>


</body>
</html>
