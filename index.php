<?php
// Объявите в начале скрипта две целочисленных переменных $a и $b, начальные значения определите с помощью констант. Написать скрипт:
// если $a и $b положительные – выведите их сумму.
// если $а и $b отрицательные – выведите из разность.
// если $а и $b разных знаков – выведите их произведение.
// Ноль можно считать положительным числом.

define('ORANGE', 5);
define('APPLE', -9);

$a = ORANGE;
$b = APPLE;

if ($a >= 0 && $b >= 0) {
  echo $a + $b;
} 
if ($a < 0 && $b < 0) {
  echo $a - $b;
} 
if (($a < 0 && $b > 0) || ($a > 0 && $b < 0)) {
  echo $a * $b;
}

echo '<br>';

// Выведите большее из чисел используя тернарный оператор.

$c = ($a < $b) ? "$a меньше $b" : "$b меньше $a";

echo $c;

echo '<br>';echo '<br>';
//Присвойте $d значение в промежутке [0..9]. С помощью оператора switch организуйте вывод чисел от $d до 9;

$d = 4;

switch ($d) {
  case 0:
    echo 0 . ' ';
  case 1:
    echo 1 . ' ';
  case 2:
    echo 2 . ' ';
  case 3:
    echo 3 . ' ';
  case 4:
    echo 4 . ' ';
  case 5:
    echo 5 . ' ';
  case 6:
    echo 6 . ' ';
  case 7:
    echo 7 . ' ';
  case 8:
    echo 8 . ' ';
  case 9:
    echo 9 . ' ';
}

echo '<br>';echo '<br>';

//все арифметические операции в виде функций с двумя параметрами.

function sum($x, $y) {
  return $x + $y;
}

function difference($x, $y){
  return $x - $y;
}

function multiplication($x, $y){
  return $x * $y;
}

function division($x, $y){
  if ($y == 0) {
    return 'На ноль делить нельзя!';
  } else {
    return $x / $y;
  }
}

$result = division(3, 0);

echo $result;


echo '<br>';echo '<br>';

// Реализуйте функцию с тремя параметрами: 
// function mathOperation($arg1, $arg2, $operation), 
// где $arg1, $arg2 – значения аргументов. 
// $operation – строка с названием операции. 
// В зависимости от переданного значения операции выполните одну из арифметических операций 
// (используйте функции из пункта 4) и верните полученное значение (используйте switch).

function mathOperation($arg1, $arg2, $operation) {
  switch ($operation) {
    case '+':
      return sum($arg1, $arg2);
    case '-':
      return difference($arg1, $arg2);
    case '*':
      return multiplication($arg1, $arg2);
    case '/':
      return division($arg1, $arg2);
  }
}

echo mathOperation(2, 4, '*');

echo '<br>';echo '<br>';

// С помощью рекурсии организуйте функцию возведения числа в степень. 
// Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

function power($val, $pow) {
  if ($pow === 0) {
    return 1;
  }
  return $val * power($val, $pow - 1);
}

// pow=3
// val=3

// 3 * (
//   pow=2
//   val=3

//   3 * (
//     pow=1
//     val=3

//     3 * (
//       pow=0
//       val=3

//       1
//     )
//   )
// )

// 3 * 3 * 3 = 27
echo power(3, 3);
echo '<br>';echo '<br>';

//Дано натуральное число n. Выведите все числа от 1 до n.

function displayNumbersFromOneTo($n, $start=1) {
  if ($start > $n) {
    return;
  }

  echo $start . '<br>';

  displayNumbersFromOneTo($n, $start+1);

  // if ($n == 1) {
  //     return "1";
  // }
  // return displayNumbersFromOneTo($n - 1) . " " . $n;
}


echo displayNumbersFromOneTo(10);

echo '<br>';echo '<br>';


// Написать функцию, которая принимает в качестве аргументов два числа и вычисляет из 
// них большее. Написать такую же функцию, чтобы она вычисляла меньшее число.
// Проверить, если произведение $number1 и $number2 больше 100, но меньше 1000, то от 
// большего числа отнять меньшее и вывести результат на экран. А если произведение 
// этих чисел больше 1000, то произведение этих чисел разделить на большее из чисел.

function getBiggerNumber($number1, $number2) : int {
  if ($number1 > $number2) {
    return $number1;
  } elseif ($number1 < $number2) {
    return $number2;
  } else {
    return $number1;
  }
}

echo getBiggerNumber(10, 10); echo '<br>';echo '<br>';

function getSmallerNumber($number1, $number2) : int {
  if ($number1 > $number2) {
    return $number2;
  } elseif ($number1 < $number2) {
    return $number1;
  } else {
    return $number1;
  }
}

echo getSmallerNumber(1, 32);  echo '<br>';echo '<br>';

function findNumber($number1, $number2) {

  $multiplication = $number1 * $number2;

  if ($multiplication > 100 && $multiplication < 1000) {
    return getBiggerNumber($number1, $number2) - getSmallerNumber($number1, $number2);
    // if ($number1 > $number2) {
    //   return $number1 - $number2;
    // } else {
    //   return $number2 - $number1;
    // }
  }

  if ($multiplication > 1000) {
    if ($number1 > $number2) {
      return $multiplication / $number1;
    } else {
      return $multiplication / $number2;
    }
  }
  if ($multiplication <= 100) {
    return 777;
  }
}
echo findNumber(20, 20);