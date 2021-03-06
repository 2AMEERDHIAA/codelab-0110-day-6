<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$people = [
    [
        "name" => "Haidar",
        "age" => 20
    ],
    [
        "name" => "Saif",
        "age" => 20
    ],
    [
        "name" => "Ali",
        "age" => 20
    ],
    [
        "name" => "Ameer",
        "age" => 20
    ],

];

$show_message = false;
$title = "Home";



?>
<!doctype html>
<html lang="en">
<?php
include 'head.php';
?>
<body class="bg-light">

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <ul class="list-group">
                <?php foreach ($people as $person): ?>
                    <li class="list-group-item"><?= $person["name"] ?> </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">

            <?php if (!$show_message): ?>
                <h3 class="text-center">Hello, i'm the message</h3>
            <?php else: ?>
                <h3 class="text-center">Hello, i'm not the message</h3>

            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>
