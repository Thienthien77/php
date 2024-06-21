<?php
// hello world

echo "Hello world!" . "<br>";
var_dump("Hello world! <br>");
print("Hello world! <br>");
print_r("Hello world! <br>");
printf("Hello world! <br>");


// variable
$a = true;
$b = 1;
$c = '1';
$d = 1.5;

// operator
echo $a +1;
echo $a -1;
echo $a *1;
echo $a /1;

// logic
echo "and " . (true && true) . "<br>";
echo "or " . (true || false) . "<br>";
var_dump(!true);

//Array
$arr1 = [
    $a, $b, $c, $d
];

echo "array ne : " . $arr1[0] . "<br>";
// array key => value

$arr2 = [
    "a" => $a,
    "v" => $b,
    "3" => $b,
    "4" => $b,
];

echo "array2 ne : " . $arr2['v'] . "<br>";

// mang 2 chieu
$arr2 = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [10, 11, 12]
];
echo "array3 ne : " . $arr2[0][2];

// loop : for, foreach, while do, ..
for ($i=0; $i < 100 ; $i++) { 
    // echo $i . "<br>";
}



// 
// condition
if (true) {

} else {

}

switch ($i) {
    case 0:
        break;
}

if (true) {

} else if (true) {

} else {

}

//





