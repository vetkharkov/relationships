<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Relationships</title>


</head>
<body>
<h1>Relationships</h1>
{{--{{ memory_get_usage()/1024/1024 }}--}}
<ol>
    <li>
        <a href="/onetoone">
            <p>One To One</p>
        </a>
    </li>
    <li>
        <a href="/onetomany">
            <p>One To Many</p>
        </a>
    </li>
</ol>


</body>
</html>
