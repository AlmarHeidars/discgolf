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

function addDisc($id, $name, $brand, $type, $skill, $stability, $speed, $glide, $turn, $fade, $weight, $plastic, $info) {
    include 'connection.php';

    try{

        $sql="INSERT INTO discs (`id`,`name`,`brand`,`type`,`skill`,`stability`,`speed`,`glide`,`turn`,`fade`,`weight`,`plastic`,`info`) 
              VALUES (`:id`,`:name`,`:brand`,`:type`,`:skill`,`:stability`,`:speed`,`:glide`,`:turn`,`:fade`,`:weight`,`:plastic`,`:info`)";

        $statement = $db->prepare($sql);
        $statement->bindParam(":id", $id);
        $statement->bindParam(":name", $name);
        $statement->bindParam(":brand", $brand);
        $statement->bindParam(":type", $type);
        $statement->bindParam(":skill", $skill);
        $statement->bindParam(":stability", $stability);
        $statement->bindParam(":speed", $speed);
        $statement->bindParam(":glide", $glide);
        $statement->bindParam(":turn", $turn);
        $statement->bindParam(":fade", $fade);
        $statement->bindParam(":weight", $weight);
        $statement->bindParam(":plastic", $plastic);
        $statement->bindParam(":info", $info);
        $result = $statement->execute();

        return $result;

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . PHP_EOL;
        return false;
    }
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