<?php
// Biến và kiểu dữ liệu
// $name = "John";
// $age = 30;
// $is_student = true;

// // Cấu trúc điều khiển
// // if ($age > 18) {
// //     echo "You are an adult.";
// // } else {
// //     echo "You are a minor.";
// // }

// // if (5 % 2 == 0) {
// //     echo "chẵn";
// // } else {
// //     echo "lẻ";
// // }

// // Vòng lặp for
// for ($i = 0; $i < 10; $i++) {
//     // echo "Number: $i\n";
// }

// // Hàm trong PHP

// function sample() {
//     echo "Sample function";
// }

// // sample();
// // return and not return
// // void

// function greet($name) {
//     return "Hello, $name!";
// }

// // echo greet("Alice");

// function add($a, $b) {
//     return $a + $b;
// }

// // echo add(1, 3);

// function minus($a = 9, $b = 4) {
//     return $a - $b;
// }

// // echo minus(null , 9);

// // tổng 1 -> n

// function sumToN($n) {
//     $sum = 0;
//     for ($i = 1; $i <= $n; $i++) {
//         $sum += $i;
//     }
//     echo $sum;
// }

//bảng cửu chương
// function printMultiplicationTable() {
//     for ($i = 1; $i <= 10; $i++) {
//         for ($j = 1; $j <= 10; $j++) {
//             echo $i * $j . " ";
//         }
//         echo "<br>";
//     }
// }

// printMultiplicationTable();

// function isPrime($n) {
//     if ($n <= 1) {
//         return false;
//     }
//     for ($i = 2; $i <= sqrt($n); $i++) {
//         if ($n % $i == 0) {
//             return false;
//         }
//     }
//     return true;
// }

// $num = 7;
// if (isPrime($num)) {
//     echo "$num là số nguyên tố.";
// } else {
//     echo "$num không phải là số nguyên tố.";
// }

// fibonanci
// function factorial($n) {
//     if ($n == 0 || $n == 1) {
//         return 1;
//     } else {
//         return factorial($n - 2) + factorial($n - 1);
//     }
// }

// $num = 5;
// $result = factorial($num);

// isset and empty
// isset : đã set và không null
// empty : đã set và không null và không false
$something = [1, 4, 6, 3, 2, 5];

function customSort($array) {
    echo count($array);
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}

$rs = customSort($something);
print_r($rs);
