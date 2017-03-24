<?php 

function getDiscList() {
    include 'connection.php';

    try {
        return $db->query('SELECT * FROM discs');
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . PHP_EOL;
        return array();
    }
// function will connect to databse with include, then use try-catch to run a query to select all discs in 'discs' database.
}

// function addDisc($id, $name, $brand, $type, $skill, $stability, $speed, $glide, $turn, $fade, $weight, $plastic, $info) {
//     include 'connection.php';

//     try{

//         $sql="INSERT INTO discs (id,name,brand,type,skill,stability,speed,glide,turn,fade,weight,plastic,info) 
//               VALUES (NULL,`:name`,`:brand`,`:type`,`:skill`,`:stability`,`:speed`,`:glide`,`:turn`,`:fade`,`:weight`,`:plastic`,`:info`)";

//         $statement = $db->prepare($sql);
//         $statement->bindParam(":name", $name, PDO::PARAM_STR);
//         $statement->bindParam(":brand", $brand, PDO::PARAM_STR);
//         $statement->bindParam(":type", $type, PDO::PARAM_STR);
//         $statement->bindParam(":skill", $skill, PDO::PARAM_STR);
//         $statement->bindParam(":stability", $stability, PDO::PARAM_STR);
//         $statement->bindParam(":speed", $speed, PDO::PARAM_INT);
//         $statement->bindParam(":glide", $glide, PDO::PARAM_INT);
//         $statement->bindParam(":turn", $turn, PDO::PARAM_INT);
//         $statement->bindParam(":fade", $fade, PDO::PARAM_INT);
//         $statement->bindParam(":weight", $weight, PDO::PARAM_INT);
//         $statement->bindParam(":plastic", $plastic, PDO::PARAM_STR);
//         $statement->bindParam(":info", $info, PDO::PARAM_STR);
//         $result = $statement->execute();

//     } catch (Exception $e) {
//         echo "Error: " . $e->getMessage() . PHP_EOL;
//         return false;
//     }
//     return $result;
// }

function addDisc($name, $brand, $type, $skill, $stability, $speed, $glide, $turn, $fade, $weight, $plastic, $info) {
    include 'connection.php';

        $sql='INSERT INTO discs (name,brand,type,skill,stability,speed,glide,turn,fade,weight,plastic,info) 
              VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';

    try{

        $results = $db->prepare($sql);
        $results->bindValue(1, $name, PDO::PARAM_STR);
        $results->bindValue(2, $brand, PDO::PARAM_STR);
        $results->bindValue(3, $type, PDO::PARAM_STR);
        $results->bindValue(4, $skill, PDO::PARAM_STR);
        $results->bindValue(5, $stability, PDO::PARAM_STR);
        $results->bindValue(6, $speed, PDO::PARAM_INT);
        $results->bindValue(7, $glide, PDO::PARAM_INT);
        $results->bindValue(8, $turn, PDO::PARAM_INT);
        $results->bindValue(9, $fade, PDO::PARAM_INT);
        $results->bindValue(10, $weight, PDO::PARAM_INT);
        $results->bindValue(11, $plastic, PDO::PARAM_STR);
        $results->bindValue(12, $info, PDO::PARAM_STR);
        $results->execute();

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
    // function to add new disc to database.
}

function deleteDisc($id) {
    include 'connection.php';

    try {
        $sql = 'DELETE FROM discs WHERE id = ?';
        $result->bindValue(1, $id, PDO::PARAM_INT);
        $result = $db->prepare($sql);
        $result->execute();

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . PHP_EOL;
        return false;
    }
    return true;
    // delete function that will connect to 'discs' databse and run query to delete item based on the id number provided.
}
?>