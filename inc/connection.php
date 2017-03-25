<?php

try{
$db = new PDO('mysql:dbname=discgolf;host=localhost','root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo "unable to connect" . PHP_EOL;
    echo $e->getMessage();
    exit;
}

// connection to 'discgolf' databse in a try-catch that will echo error if connection is not made.
?>