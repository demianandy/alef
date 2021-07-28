<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 2</title>
</head>
<body>
<h1 style="text-align: center">ИЗОБРАЖЕНИЕ</h1>
    <a href="../index.php"><button>На главную</button></a>
    <hr>
    <img src='img-test.jpg' style="width: 500px" alt='Тестовое изображение'>;
    <hr>

<?php
    $img=imagecreatefromjpeg('img-test.jpg');
    $thumb=imagecreatetruecolor(1, 1); 
    imagecopyresampled($thumb, $img, 0, 0, 0, 0, 1, 1, imagesx($img), imagesy($img));
    $color=dechex(imagecolorat($thumb,0,0));

    echo "<h1 style='color: #$color'>Самый распространенный цвет в изображении: #$color.</h1>";
?>
</body>
</html>