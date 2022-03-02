<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Image</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>イラストApp</h1>
        <p class='create'>[<a href='/posts/create'>投稿する</a>]</p>
        <div class='posts'>
            @foreach($posts as $post)
                <div class='post'>
                    <p class='work_name'>{{ $post->work_name }}</p>
                    <p class='title'>[<a href='/posts/edit/{{ $post->id }}'>{{ $post->title }}</a>]</p>
                </div>
            <a href="">{{ $post->category->category_name }}</a>
            @endforeach
        </div>
    </body>
</html>