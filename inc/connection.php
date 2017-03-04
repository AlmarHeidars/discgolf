<?php

try{
$db = new PDO('mysql:dbname=discgolf;host=localhost','root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo "unable to connect";
    echo $e->getMessage();
    exit;
}

echo "Connected to the database";

?>