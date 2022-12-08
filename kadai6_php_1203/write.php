<?php

$name = $_POST['name'];
$birthPlace = $_POST['birthPlace'];
$age = $_POST['age'];

$time = date('Y-m-d H:i:s');



// $timeや$nameをファイルに書き込む際、区切り文字として、 /(スラッシュ)を結合しています。
$str = '<table border="1"> <tr> <th>時間</th><th>'. $time . '</th></tr><tr><th>名前</th><th> '  . $name . '</th></tr><tr><th>年齢</th><th>' .  $age . '</th></tr><tr><th>出身</th><th> ' . $birthPlace . '</tr> </table>';
// ファイルに書き込み
$file = fopen('data/prof.text', 'a');
fwrite($file, $str . "\n");
fclose($file);



?>




<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
  

    <ul>
        <li><a href="read.php">一覧を確認する</a></li>
        <li><a href="input.php">入力に戻る</a></li>
    </ul>
</body>

</html>
