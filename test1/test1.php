<?php require_once('array.php');?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 1</title>
</head>
<body>
    <h1 style="text-align: center">ФИБОНАЧЧИ</h1>
    <a href="../index.php"><button>На главную</button></a>
    <hr>
    <h3>Числа Фибоначчи:</h3>

    <?php

    $max = max($arr);
    $fib = [0, 1];
    $num1 = $fib[0];
    $num2 = $fib[1];
    do {
        $num3 = $num1 + $num2;
        $num1 = $num2;
        $num2 = $num3;
        if (in_array($num3, $arr)){
            $fib[] = $num3;
        }
    } while ($num3 < $max);
    $sum = array_sum($fib);
    ?>

<?
    foreach($fib as $k => $el){
        if ($k == count($fib)-1) $space = '.'; else $space = ', ';
        echo "<span>$el</span>".$space;
    }
?>
<hr>
    <h3>Числа, помеченные красным, являются числами Фибоначчи.</h3>
<?php

    foreach ($arr as $k => $el){
        foreach ($fib as $el2){
            if ($el === $el2) {
                $color = 'red'; 
                $array[] = $el2;
                break;
            }  
            else $color = 'black';
        }
        if($k == count($arr)-1) $space = '.'; else $space = ', ';
        echo "<span style='color:$color'>$el</span>".$space;
    }

    $sum = array_sum($array);
?>
    <h4>Сумма всех чисел Фибоначчи, встречаемых в массиве, равна: <i><?=$sum;?></i></h4>
    <hr>


</body>
</html>