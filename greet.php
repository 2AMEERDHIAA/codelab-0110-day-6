<?php
/*
 * $_GET = Array
 * http://localhost/greet.php?key=value
 * $_GET = ["key"=>"value"]
 */

function get($key){
    return $_GET[$key];
}
function post($key){
    return $_POST[$key];
}

$name = post("name");
$name = post( "name");

$age = $_POST["age"];
$bootcamp = $_POST["bootcamp"];

echo "Hello $name, you're $age years old and your bootcamp is $bootcamp";