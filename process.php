<?php

$name = $_POST["name"];
$brand = $_POST["brand"];
$type = $_POST["type"];
$skill = $_POST["skill"];
$stability = $_POST["stability"];
$speed = $_POST["speed"];
$glide = $_POST["glide"];
$turn = $_POST["turn"];
$fade = $_POST["fade"];
$weight = $_POST["weight"];
$plastic = $_POST["plastic"];
$info = $_POST["info"];

echo "<pre>";
    echo $name . PHP_EOL; 
    echo $brand . PHP_EOL;
    echo $type . PHP_EOL;
    echo $skill . PHP_EOL;
    echo $stability . PHP_EOL;
    echo $speed . PHP_EOL;
    echo $glide . PHP_EOL;
    echo $turn . PHP_EOL;
    echo $fade . PHP_EOL;
    echo $weight . PHP_EOL;
    echo $plastic . PHP_EOL;
    echo $info . PHP_EOL;
echo "</pre>";

?>