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

function addDisc($id, $name, $brand, $type, $skill, $stability, $speed, $glide, $turn, $fade, $weight, $plastic, $info) {
    include 'connection.php';

    try{

        $sql="INSERT INTO discs (name,brand,type,skill,stability,speed,glide,turn,fade,weight,plastic,info) 
              VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

        $statement = $db->prepare($sql);
        $statement->bindValue(1, $name, PDO::PARAM_STR);
        $statement->bindValue(2, $brand, PDO::PARAM_STR);
        $statement->bindValue(3, $type, PDO::PARAM_STR);
        $statement->bindValue(4, $skill, PDO::PARAM_STR);
        $statement->bindValue(5, $stability, PDO::PARAM_STR);
        $statement->bindValue(6, $speed, PDO::PARAM_INT);
        $statement->bindValue(7, $glide, PDO::PARAM_INT);
        $statement->bindValue(8, $turn, PDO::PARAM_INT);
        $statement->bindValue(9, $fade, PDO::PARAM_INT);
        $statement->bindValue(10, $weight, PDO::PARAM_INT);
        $statement->bindValue(11, $plastic, PDO::PARAM_STR);
        $statement->bindValue(12, $info, PDO::PARAM_STR);
        $result = $statement->execute();

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . PHP_EOL;
        return false;
    }
    return true;
}

// function deleteDisc() {
//     include 'connection.php';

//     try {
//         // DELETE FROM `discs` WHERE 1
//     } catch (Exception $e) {
//         echo "Error: " . $e->getMessage() . PHP_EOL;
//         return false;
//     }
// }
?>