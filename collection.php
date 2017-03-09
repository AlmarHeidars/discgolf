<?php 
$pageTitle = "Disc Collection";
include 'inc/header.php'; 
?>

<div>
    <h2>DiscCollection</h2>
        <ul class="collection">
            <?php 
            foreach (getDiscList() as $disc) {
                // echo "<li>" . 
                //     $disc['name'] . " - " . PHP_EOL .
                //     $disc['brand'] . PHP_EOL .
                //     $disc['type'] . PHP_EOL .
                //     $disc['skill'] . PHP_EOL .
                //     $disc['stability'] . PHP_EOL .
                //     $disc['speed'] . PHP_EOL .
                //     $disc['glide'] . PHP_EOL .
                //     $disc['turn'] . PHP_EOL .
                //     $disc['fade'] . PHP_EOL .
                //     $disc['weight'] . PHP_EOL .
                //     $disc['plastic'] . PHP_EOL .
                //     $disc['info'] . PHP_EOL .
                //      "</li>";

                echo "<li>" . 
                    $disc['name'] . "</li><li>" . 
                    $disc['brand'] . "</li><li>" . 
                    $disc['type'] . "</li><li>" . 
                    $disc['skill'] . "</li><li>" . 
                    $disc['stability'] . "</li><li>" . 
                    "speed " . $disc['speed'] . "</li><li>" . 
                    "glide " . $disc['glide'] . "</li><li>" . 
                    "turn " . $disc['turn'] . "</li><li>" . 
                    "fade " . $disc['fade']  . "</li><li>" . 
                    "weight " . $disc['weight'] . "</li><li>" . 
                    $disc['plastic'] . "</li><li>" . 
                    $disc['info'] . "</li>" . "_______________";
            }
            ?>
        </ul>    
</div>

<?php include 'inc/footer.php'; ?>