<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include_once 'Person.php';
$person = new Person("Saif",0);
$person->mood = "Sleepy";
$person->length = "185";
$person->sports = ["table tennis","being dank"];
$person->sleep();
$person->sleep(1);

print_r($person);

