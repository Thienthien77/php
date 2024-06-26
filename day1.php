<?php
// hello world

// echo "Hello world!" . "<br>";
// var_dump("Hello world! <br>");
// print("Hello world! <br>");
// print_r("Hello world! <br>");
// printf("Hello world! <br>");


// // variable
// $a = true;
// $b = 1;
// $c = '1';
// $d = 1.5;

// // operator
// echo $a +1;
// echo $a -1;
// echo $a *1;
// echo $a /1;

// // logic
// echo "and " . (true && true) . "<br>";
// echo "or " . (true || false) . "<br>";
// var_dump(!true);

// //Array
// $arr1 = [
//     $a, $b, $c, $d
// ];

// echo "array ne : " . $arr1[0] . "<br>";
// // array key => value

// $arr2 = [
//     "a" => $a,
//     "v" => $b,
//     "3" => $b,
//     "4" => $b,
// ];

// echo "array2 ne : " . $arr2['v'] . "<br>";

// // mang 2 chieu
// $arr2 = [
//     [1, 2, 3, 4],
//     [5, 6, 7, 8],
//     [10, 11, 12]
// ];
// echo "array3 ne : " . $arr2[0][2];

// // loop : for, foreach, while do, ..
// for ($i=0; $i < 100 ; $i++) { 
//     // echo $i . "<br>";
// }



// // 
// // condition
// if (true) {

// } else {

// }

// switch ($i) {
//     case 0:
//         break;
// }

// if (true) {

// } else if (true) {

// } else {

// }

//



$a = 9;
$b = 10;

// if (($a%2)) {
//     echo "so le";
// } else {
//     echo "so chan";
// }


// $result = ($a%2) ? 'so le'  : 'so chan';
// echo $result;

// 0 -> 5| thu 2 -> thu 7
$day = 7;
// switch ($day) {
//     case 0:
//         echo "thu 2";
//         break;
//     case 1:
//         echo "thu 3";
//         break;
//     case 2:
//         echo "thu 4";
//         break;
//     case 3:
//         echo "thu 5";
//         break;
//     case 4:
//         echo "thu 6";
//         break;
//     case 5:
//         echo "thu 7";
//         break;
//     default: echo "unknown";
// }



// function sumToN($n)
// {
//     $sum = 0;
//     for ($i = 0; $i <= $n;) {
//         $sum = $sum + $i;
//         $i++;
//     }
//     echo "$sum";
// }

// sumToN(66);

// sumToN(666);

// sumToN(6666);


function sumab($a, $b) : void
{
    $sumab = $a + $b;
    echo "$sumab";
}
//sumab(7, 7);

function scsl($n = 8) : string
{
    $rscsl = ($n%2) ? 'so le'  : 'so chan';
    return "$rscsl";
}

// $check = scsl();
// echo $check;

// function findNumber (4) {
//     $

//     echo "2";
// }

// ddeej quy

// function snt($n)
// {
//     for ($i = 2; $i < $n; $i++) {
//         if ($n % $i == 0) {
//             return true;
//         }
//     }    
//     return false;
// }
// $rs = snt(997);

// echo $rs ? "0 phai nguyen to" : "la so nguyen to";

// Fibonacci
// 1, 1, 2, 3, 5, 8, 13, 21, 55…
// 0  1  2  3  4  5   6   7   8 ...
function fibonacci($n) {
    if ($n <= 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        $a = 0;
        $b = 1;
        for ($i = 2; $i <= $n; $i++) {
            $temp = $b;
            $b = $a + $b;
            $a = $temp;
        }
        return $b;
    }
}
echo fibonacci(7);