<?php require_once('array.php');?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 3</title>
</head>
<body>
    <h1 style="text-align: center">МАССИВЫ</h1>
    <a href="../index.php"><button>На главную</button></a>
    <hr>
    <h3>Задан следующий массив:</h3>

<?php
    foreach($first as $k => $el){
        if ($k == count($first)-1) $space = '.'; else $space = ', ';
        echo "<span>$el</span>".$space;
    }

    $sum = array_sum($first)/count($first); 
    ?>

    <h4>Его среднеарифметическое число: <i><?=$sum;?></i></h4>
    <hr>
    <h3>Задан второй массив:</h3>

<?php
    foreach ($second as $el) {
        if ($el > $sum) {
            $result[] = $el;
        } else continue;
    }

    $min = min($result);
    for ($i = 0; $i < count($second); $i++){
        if ($i == $min) $color = 'red'; else $color = 'black';
    }

    for ($i = 0; $i < count($second); $i++){
        if ($second[$i] == $min) $color = 'red'; else $color = 'black';
        if ($i == count($second)-1){
            echo "<span style='color:$color'>$second[$i]</span>".'.';
            break;
        }
        echo "<span style='color: $color'>$second[$i], </span>";
    }
?>
    <h4><i><?=$min;?></i> - наименьшее число второго массива среди тех его элементов, которые больше среднеарифметического первого массива.<i></i></h4>
    
</body>
</html>