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
    // if delete button clicked then will call function to delete instance of disc
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
            echo "<div class='discitem'>" . PHP_EOL . 
                        "<header>" . PHP_EOL .
                            "<h1>" . $disc['name'] . " - " . $disc['brand'] . "</h1>" . PHP_EOL .
                            "<p>" . "<ul class='disclist'><li>" . $disc['type'] . "</li><li>" . $disc['skill'] . "</li><li>" . $disc['stability'] . "</li><li>" . $disc['plastic'] . "</li></ul>" . "</p>" . PHP_EOL .
                        "</header>" . PHP_EOL .
                        "<div>" . PHP_EOL .
                            "<p>" . "<ul class='disclist'><li>" . "Speed: " . $disc['speed'] . "</li><li>" . "Glide: " . $disc['glide'] . "</li><li>" . "Turn: " .  $disc['turn'] . "</li><li>" . "Fade: " . $disc['fade'] . "</li></ul>" . "</p>" . PHP_EOL .
                        "</div>" . PHP_EOL .
                        "<div>" . PHP_EOL .
                            "<p>" . "<ul class='disclist'><li>" . "Weight: " . $disc['weight'] . "g" . "</li><li>" . $disc['info'] . "</li></ul>" . "</p>" . PHP_EOL .
                        "</div>" . PHP_EOL .
                "</div>" . PHP_EOL;
                // outputs list using disc variable and accessing properties  


            echo "<form method='post' action='collection.php'>\n";
            echo "<input type='hidden' value'" . $disc['id'] . "' name='delete'/>\n";
            echo "<input type='submit' value='Delete' />\n";
            echo "</form>";
            // button to delete a disc off of collection. hidden button using post
            }
            ?>
             
        </ul>    
</div>

<?php include 'inc/footer.php'; ?>