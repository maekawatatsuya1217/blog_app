<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New Blog</title>
    </head>
    <body>
        <h1>New blog</h1>

        <!-- 新規投稿フォーム -->
        <form method="POST" action="index.php">
            <label>Name<input type="text" name="your_name"></label>
            <label>Title<input type="text" name="title"></label>
            <label>Article<textarea name="article"></textarea></label>
            <input type="submit" value="submit">
        </form>
        <!-- 新規投稿フォーム -->
    </body>
</html>