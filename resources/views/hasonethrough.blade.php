<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Relationships</title>


</head>
<body>
<h1>Relationships Has One Through</h1>

<ol>
    @foreach($users as $user)
        <li>
            <div>
                <b>User: {{ $user->name }}</b>
                @isset($user->task['name'])
                    <p>{{ $user->task['name'] }}</p>
                @endisset
            </div>
        </li>
    @endforeach
</ol>
<hr>
<a href="/">
    <p>back</p>
</a>

</body>
</html>
