<?php

// задание #1
/* 1. Объявить две целочисленные переменные $a и $b и задать им
произвольные начальные значения. Затем написать скрипт, который работает
по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
ноль можно считать положительным числом.
*/

$a = -2;
$b = -5;
if ($a >=0 && $b >= 0) {
    echo 'Разность чисел равна: '.($a - $b);
} elseif ($a < 0 && $b < 0) {
    echo 'Произведение чисел равно: '.($a * $b);
} elseif (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) {
    echo 'Сумма чисел равна: '.($a + $b);
}


// задание №2
/* 2. Присвоить переменной $а значение в промежутке [0..15].
С помощью оператора switch организовать вывод чисел от $a до 15.
*/

$a = 5;
switch ($a) {
    case 1:
        echo "1";
    case 2:
        echo "2";
    case 3:
        echo "3";
    case 4:
        echo "4";
    case 5:
        echo "5";
    case 6:
        echo "6";
    case 7:
        echo "7";
    case 8:
        echo "8";
        break;
}



// задание №3
/* 3. Реализовать основные 4 арифметические операции в виде функций
с двумя параметрами. Обязательно использовать оператор return.
*/

function sum($arg1, $arg2) {
    return $arg1 + $arg2;
}

function subtraction($arg1, $arg2) {
    return $arg1 - $arg2;
}

function multiply($arg1, $arg2) {
    return $arg1 * $arg2;
}

/*
function divide($arg1, $arg2) {
	if ($arg2 === 0) {
		echo "invalid arg2 value (=0)";
		break;
	}
	return $arg1 / $arg2;
}
*/
function divide($arg1, $arg2) {
    return ($arg2 === 0) ? "invalid arg2 value (=0)" : $arg1 / $arg2;
}

// задание №4
/* 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции
из пункта 3) и вернуть полученное значение (использовать switch).
*/

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "sum":
            return $arg1 + $arg2;
        case "subtraction":
            return $arg1 - $arg2;
        case "multiply":
            return $arg1 * $arg2;
        case "divide":
            if ($arg2 === 0) {
                echo "invalid arg2 value (=0)";
                break;
            }
            return $arg1 / $arg2;
    }
}
echo mathOperation(10, 0, divide);
*/

// задане № 5
/* 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон,
вывести текущий год в подвале при помощи встроенных функций PHP.
*/

/*
<?php
$title = "My title";
$h1 = "<h1> fifth task </h1>";
function getYear() {
	return getdate() {
		'year';
	}
}
?>
<!DOCTYPE html>
<html lang "en">
<head>
	<meta charset = "UTF-8">
	<title><? $title ?></title>
</head>
<body>
<? $h1; ?>
<footer>
	<? getYear() ?>
</footer>
</body>
</html>
*/

// задание № 6
/* 6. *С помощью рекурсии организовать функцию
возведения числа в степень. Формат: function power($val, $pow),
где $val – заданное число, $pow – степень.
*/

function power($val, $pow) {
    return ($pow == 1) ? $val : $val * power($val, $pow - 1);
}
echo power(5, 3);






?>