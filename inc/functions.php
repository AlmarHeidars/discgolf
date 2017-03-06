<?php 

function getDiscList() {
    include 'connection.php';

    try {
        return $db->query('SELECT * FROM discs');
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . PHP_EOL;
        return false;
    }
}

?>