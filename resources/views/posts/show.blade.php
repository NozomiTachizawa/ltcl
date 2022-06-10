<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <h2 class="title">
            {{ $post->title }}
        </h2>
        <div class="content">
            <div class="content_post">
                <h3>body</h3>
                <p>{{ $post->body }}</p>
            </div>
            <p class="date">{{ $post->updated_at }}</p>
        </div>
        <p class="edit">[ <a href="/posts/{{ $post->id }}/edit">edit</a> ]</p>
        <div class="footer">
            [ <a href="/">back</a> ]
        </div>
    </body>
</html>
