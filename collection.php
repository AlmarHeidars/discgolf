<?php 
$pageTitle = "Disc Collection";
include 'inc/header.php'; 
?>

<div class="section page">
    <h2>DiscCollection</h2>
        <ul>
            <?php 
            foreach (getDiscList() as $disc) {
                echo "<li>" . 
                    $disc['name'] . " - " . PHP_EOL .
                    $disc['brand'] . PHP_EOL .
                    // $disc['type'] . PHP_EOL .
                    // $disc['skill'] . PHP_EOL .
                    // $disc['stability'] . PHP_EOL .
                    // $disc['speed'] . PHP_EOL .
                    // $disc['glide'] . PHP_EOL .
                    // $disc['turn'] . PHP_EOL .
                    // $disc['fade'] . PHP_EOL .
                    // $disc['weight'] . PHP_EOL .
                    // $disc['plastic'] . PHP_EOL .
                    // $disc['info'] . PHP_EOL .
                     "</li>"; 
            }
            ?>
        </ul>    
</div>

<?php include 'inc/footer.php'; ?>