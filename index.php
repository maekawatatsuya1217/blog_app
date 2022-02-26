<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog App</title>
    </head>
    <body>
        <h1>Blog App</h1>
        <a href="new.php">create a blog</a>

        <!-- 記事一覧表示 -->
        <?php
            if (!empty($_POST['your_name'])) {
                echo $_GET['your_name'];
            }
        ?>
        <!-- 記事一覧表示 -->
    </body>
</html>