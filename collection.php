<?php
require 'inc/functions.php'; 
$pageTitle = "Disc Collection";

if(isset($_POST['delete'])) {
    if (deleteDisc(filter_input(INPUT_POST, 'delete', FILTER_SANITIZE_NUMBER_INT))) {
        header('location: collection.php?msg=Disc+Deleted');
        exit;
    } else {
        header('location: collection.php?msg=Unable+to+Delete+Disc');
        exit;
    }
    // if delete button clicked then will call function to delete instance of disc and write able or unable to delte to header
}
if(isset($_GET['msg'])) {
    $error_message = trim(filter_input(INPUT_GET, 'msg', FILTER_SANITIZE_STRING));
}

include 'inc/header.php'; 
?>

<div>
    <h2 class="collection-title">DiscCollection</h2>
    <?php 
    if(isset($error_message)) {
        echo "<p>$error_message</p>";
    }
    ?>
        <ul>
            <?php 
            foreach (getDiscList() as $disc) {
            echo "<header>\n";
            echo   "<h1>" . $disc['name'] . " - " . $disc['brand'] . "</h1>\n";
            echo "</header>\n";
            echo "<div class='discitem'>\n";
            echo    "<div>";
            echo          "<p>" . "<ul class='disclist'>
                                    <li>" . "Type: " . $disc['type'] . "</li>
                                    <li>" . "Skill: " . $disc['skill'] . "</li>
                                    <li>" . "Stability: " . $disc['stability'] . "</li>
                                    <li>" . "Plastic: " . $disc['plastic'] . "</li>
                                  </ul>" . "</p>\n";
            echo    "</div>\n";
            echo    "<div>\n";
            echo      "<p>" . "<ul class='disclist'>
                                    <li>" . "Speed: " . $disc['speed'] . "</li>
                                    <li>" . "Glide: " . $disc['glide'] . "</li>
                                    <li>" . "Turn: " . $disc['turn'] . "</li>
                                    <li>" . "Fade: " . $disc['fade'] . "</li>
                                    <li>" . "Weight: " . $disc['weight'] . "g" . "</li>
                                </ul>" . "</p>\n";
            echo    "</div>\n";
            echo "</div>\n";
            echo $disc['info'] . "\n" . PHP_EOL;
                // outputs list using disc variable and accessing properties  


            echo "<form class='delete-button' method='post' action='collection.php'>\n";
            echo "<input type='hidden' value='" . $disc['id'] . "' name='delete'/>\n";
            echo "<input type='submit' value='Delete' />\n";
            echo "</form>";
            // button to delete a disc off of collection. hidden from, button using post
            }
            ?>
             
        </ul>    
</div>

<?php include 'inc/footer.php'; ?>