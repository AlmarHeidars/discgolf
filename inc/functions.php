<?php 

function full_catalog_array() {
    include ("connection.php");

    try {
        $results = $db->query("SELECT * FROM discs");
    } catch(Exception $e){
        echo "Unable to retrieve results";
        exit;
    }

    $catalog = $results->fetchAll();
    return $catalog;

}
?>