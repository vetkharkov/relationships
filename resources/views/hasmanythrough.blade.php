<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Relationships</title>


</head>
<body>
<h1>Relationships Has Many Through</h1>

<ol>
    @foreach($users as $user)
        <li>
            <div>
                <b>User: {{ $user->name }}</b>
                @foreach($user->tasks as $task)
                    <p>{{ $task->name }}</p>
                @endforeach
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
