<?php

$name = "Haidar";

$why = "why me?";

echo $name;

$first_name = "Haidar";
$last_name = "Mahmoud";

echo $first_name . " " . $last_name;
echo '$first_name $last_name';
echo "$first_name $last_name";

$bool = false;
$bool_true = true;

$integer = 1;
$double = 1.3434245243525;
$float = 1.234;
$string = "String";

$sum = $integer + $float;

echo $sum;

// TODO: ask about something...
//if($bool && )

if (!$bool && $bool_true) {
    echo "Its true";
} else if ($bool_true) {
    echo "Hello world!";
} else {
    echo "oh snap!";
}

switch ($integer) {
    case 1:
        /*
         * code goes here
         */
        break;
    case 2:
        // goes here
        break;
    default:
        // default case
        break;
}

for ($i = 0; $i < 10; $i++) {
    echo $i;
    echo PHP_EOL;
    echo $i * 2;
    echo PHP_EOL;
}

$array = ["Haidar", "Mahmoud", "Ali"];
$array = array("a", "b", "c");
$array2 = [1, 1.32, 323.23232323233, "String", true, false, $array];

echo $array;

/*
 * array.length -> javascript
 * count($array) -> PHP
 */
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i];
}
/*
 * v-for="value in array" -> vue.js
 * $array as $value -> PHP
 */
foreach ($array as $value) {
    echo $value;
}

/*
 * v-for="(value,index) in array" -> vue.js
 * $array as $index => $value -> PHP
 */
foreach ($array as $index => $value) {
    echo $value;
}
// return != echo
function sum($first_number,$second_number){
    return $first_number + $second_number;
}

echo sum(1,3);








