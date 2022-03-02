<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Image</title>
    </head>
    <body>
        <h1>投稿画面</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>概要</h2>
                <textarea name="post[body]" placeholder="頑張って描きました。"></textarea>
            </div>
            <div class="image">
                <h2>登録</h2>
                
            </div>
            <div class="category">
                <h2>Category</h2>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="work_name">
                <h2>作品名</h2>
                <textarea name="post[work_name]" placeholder="例) 鬼滅の刃"></textarea>
            </div>
            <input type="submit" value="登録する"/>
        </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>