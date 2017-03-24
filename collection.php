<?php 
$pageTitle = "Disc Collection";
include 'inc/header.php'; 
//functions.php included in the header.php

// if (isset($_POST['delete'])) {
//     if(delete_disc(filter_input(INPUT_POST, 'delete', FILTER_SANITIZE_NUMBER_INT))) {
//         header('location: collection.php?msg=Task+Deleted');
//         exit;
//     } else {
//         header('location: task_list.php?Unable+to+Delete+Disc');
//         exit;
//     }
// }
// if (isset($_GET['msg'])) {
//     $error_message = trim(filter_input(INPUT_GET, 'msg', FILTER_SANITIZE_STRING));
// }


?>

<div>
    <h2>DiscCollection</h2>
        <ul class="collection">
            <?php 
            foreach (getDiscList() as $disc) {
                echo "<li>" . $disc['name'] . "</li>";
                // echo "<li>" .
                //     $disc['name'] . "</li><li>" . 
                //     $disc['brand'] . "</li><li>" . 
                //     $disc['type'] . "</li><li>" . 
                //     $disc['skill'] . "</li><li>" . 
                //     $disc['stability'] . "</li><li>" . 
                //     "speed " . $disc['speed'] . "</li><li>" . 
                //     "glide " . $disc['glide'] . "</li><li>" . 
                //     "turn " . $disc['turn'] . "</li><li>" . 
                //     "fade " . $disc['fade']  . "</li><li>" . 
                //     "weight " . $disc['weight'] . "</li><li>" . 
                //     $disc['plastic'] . "</li><li>" . 
                //     $disc['info'] . "</li>" . "_______________";
            }
            ?>
            <!-- outputs list using disc variable possible  -->
        </ul>    
</div>

<?php include 'inc/footer.php'; ?>