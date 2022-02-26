<?php

// DB接続
 require 'db_connection.php';

// DB保存
$params = [
    'id' => null,
    'your_name' => '名前',
    'title' => 'タイトル',
    'article' => '本文',
    'created_at' => 'NOW()'
];

$sql = 'insert into blog select * from contacts where id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute($params);

$count = 0;
$columns = '';
$values = '';

foreach ($array_keys($params) as $key => $key) {
    if ($count ++> 0) {
        $columns .= ',';
        $values .= ':' .$key;
    }
    $columns .= $key;
    $values .= ':'.$key;
}

?>