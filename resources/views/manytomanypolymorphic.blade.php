<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Relationships</title>

</head>
<body>
<h1>Relationships Many To Many Polymorphic</h1>
<ol>
    @foreach($posts as $post)
        <li>
            <div>
                <b>{{ $post->name }}</b>
                @foreach($post->tags as $tag)
                    <pre>{{ $tag->name }}</pre>
                @endforeach
            </div>
        </li>
    @endforeach
</ol>
<hr>
<ol>
    @foreach($videos as $video)
        <li>
            <div>
                <b>{{ $video->name }}</b>
                @foreach($video->tags as $tag)
                    <pre>{{ $tag->name }}</pre>
                @endforeach
            </div>
        </li>
    @endforeach
</ol>
<hr>
<hr>
<h1>Tag Video & Post</h1>
<ol>
    @foreach($tags as $tag)
        <li>
            <div>
                <b>{{ $tag->name }}</b>
                @foreach($tag->videos as $video)
                    <pre>{{ $video->name }}</pre>
                @endforeach
                @foreach($tag->posts as $post)
                    <pre>{{ $post->name }}</pre>
                @endforeach
            </div>
        </li>
    @endforeach
</ol>

<hr>
<hr>

<a href="/">
    <p>back</p>
</a>

</body>
</html>
