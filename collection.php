<?php
require 'inc/functions.php'; 
$pageTitle = "Disc Collection";
include 'inc/header.php'; 
?>

<div>
    <h2>DiscCollection</h2>
        <ul>
            <?php 
            foreach (getDiscList() as $disc) {
            echo "<div>" . PHP_EOL . 
                        "<header>" . PHP_EOL .
                            "<h1>" . $disc['name'] . " - " . $disc['brand'] . "</h1>" . PHP_EOL .
                            "<p>" . "<ul><li>" . $disc['type'] . "</li><li>" . $disc['skill'] . "</li><li>" . $disc['stability'] . "</li><li>" . $disc['plastic'] . "</li></ul>" . "</p>" . PHP_EOL .
                        "</header>" . PHP_EOL .
                        "<div>" . PHP_EOL .
                            "<p>" . "<ul><li>" . "Speed: " . $disc['speed'] . "</li><li>" . "Glide: " . $disc['glide'] . "</li><li>" . "Turn: " .  $disc['turn'] . "</li><li>" . "Fade: " . $disc['fade'] . "</li></ul>" . "</p>" . PHP_EOL .
                        "</div>" . PHP_EOL .
                        "<div>" . PHP_EOL .
                            "<p>" . "<ul><li>" . "Weight: " . $disc['weight'] . "g" . "</li><li>" . $disc['info'] . "</li></ul>" . "</p>" . PHP_EOL .
                        "</div>" . PHP_EOL .
                "</div>" . PHP_EOL;
            }
            ?>
            <!-- outputs list using disc variable and accessing properties  -->
        </ul>    
</div>

<?php include 'inc/footer.php'; ?>