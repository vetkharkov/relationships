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
    <li>
        <a href="/manytomany">
            <p>Many To Many</p>
        </a>
    </li>
    <li>
        <a href="/hasonethrough">
            <p>Has One Through</p>
        </a>
    </li>
    <li>
        <a href="/hasmanythrough">
            <p>Has Many Through</p>
        </a>
    </li>
    <li>
        <a href="/onetoonepolymorphic">
            <p>One To One Polymorphic</p>
        </a>
    </li>
    <li>
        <a href="/onetomanypolymorphic">
            <p>One To Many Polymorphic</p>
        </a>
    </li>
    <li>
        <a href="/manytomanypolymorphic">
            <p>Many To Many Polymorphic</p>
        </a>
    </li>
</ol>

<h2>
    <a href="/redis">
        <b>REDIS</b>
    </a>
</h2>

</body>
</html>
