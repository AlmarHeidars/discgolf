<?php
require 'inc/functions.php'; 
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
            echo "<div class='main-container'>" . PHP_EOL . 
                        "<header>" . PHP_EOL .
                            "<h1>" . $disc['name'] . " - " . $disc['brand'] . "</h1>" . PHP_EOL .
                            "<p>" . "<ul><li>" . $disc['type'] . "</li><li>" . $disc['skill'] . "</li><li>" . $disc['stability'] . "</li><li>" . $disc['plastic'] . "</li></ul>" . "</p>" . PHP_EOL .
                        "</header>" . PHP_EOL .
                        "<div>" . PHP_EOL .
                            "<p>" . "<ul><li>" . "Speed: " . $disc['speed'] . "</li><li>" . "Glide: " . $disc['glide'] . "</li><li>" . "Turn: " .  $disc['turn'] . "</li><li>" . "Fade: " . $disc['fade'] . "</li></ul>" . "</p>" . PHP_EOL .
                        "</div>" . PHP_EOL .
                        "<div>" . PHP_EOL .
                            "<p>" . "<ul><li>" . "Weight: " . $disc['weight'] . "</li><li>" . $disc['info'] . "</li></ul>" . "</p>" . PHP_EOL .
                        "</div>" . PHP_EOL .
                "</div>" . PHP_EOL;
            }
            ?>
            <!-- outputs list using disc variable and accessing properties  -->
        </ul>    
</div>

<?php include 'inc/footer.php'; ?>