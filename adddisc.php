<?php
require 'inc/functions.php';
$pageTitle = "Add New Disc";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
   $brand = trim(filter_input(INPUT_POST, 'brand', FILTER_SANITIZE_STRING));
   $type = trim(filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING));
   $skill = trim(filter_input(INPUT_POST, 'skill', FILTER_SANITIZE_STRING));
   $stability = trim(filter_input(INPUT_POST, 'stability', FILTER_SANITIZE_STRING));
   $speed = trim(filter_input(INPUT_POST, 'speed', FILTER_SANITIZE_NUMBER_INT));
   $glide = trim(filter_input(INPUT_POST, 'glide', FILTER_SANITIZE_NUMBER_INT));
   $turn = trim(filter_input(INPUT_POST, 'turn', FILTER_SANITIZE_NUMBER_INT));
   $fade = trim(filter_input(INPUT_POST, 'fade', FILTER_SANITIZE_NUMBER_INT));
   $weight = trim(filter_input(INPUT_POST, 'weight', FILTER_SANITIZE_NUMBER_INT));
   $plastic = trim(filter_input(INPUT_POST, 'plastic', FILTER_SANITIZE_STRING));
   $info = trim(filter_input(INPUT_POST, 'info', FILTER_SANITIZE_STRING));

   if (empty($name) || empty($brand) || empty($type) || empty($skill) || empty($stability) || empty($speed) || 
   empty($glide) || empty($turn) || empty($fade) || empty($weight) ||empty($plastic) || empty($info)) {
       $error_message = 'Please fill in all the fields.';
   } else {
       if (addDisc($name, $brand, $type, $skill, $stability, $speed, $glide, $turn, $fade, $weight, $plastic, $info)) {
           header('Location: collection.php');
           exit;
       } else {
           $error_message = 'Could not add project';
       }
}}
// if new info is 'posted' checks for all fields filled and returns error message if not and redirect to collection.php if so.
// if not able to redirect will show error message that could not add the project.
include'inc/header.php';
?>

<div class="section page">
    <div class="wrapper">
        <?php 
        if (isset($error_message)) {
            echo "<p>$error_message</p>";
        }
        ?>
        <h2>Add New Disc</h2>
        <p>Add a new disc to the collection.</p>
        <form method="post" action="adddisc.php">
            <table>
                <tr>
                    <th><label for="name">Name</label></th>
                    <td><input type="text" id="name" name="name" /></td>
                </tr>
                <tr>
                    <th><label for="brand">Brand</label></th>
                    <td><input type="text" id="brand" name="brand" /></td>
                </tr>
                <tr>
                    <th><label for="type">Type</label></th>
                    <td><input type="text" id="type" name="type" /></td>
                </tr>
                <tr>
                    <th><label for="skill">Skill</label></th>
                    <td><input type="text" id="skill" name="skill" /></td>
                </tr>
                <tr>
                    <th><label for="stability">Stability</label></th>
                    <td><input type="text" id="stability" name="stability" /></td>
                </tr>
                <tr>
                    <th><label for="speed">Speed</label></th>
                    <td><input type="text" id="speed" name="speed" /></td>
                </tr>
                <tr>
                    <th><label for="glide">Glide</label></th>
                    <td><input type="text" id="glide" name="glide" /></td>
                </tr>
                <tr>
                    <th><label for="turn">Turn</label></th>
                    <td><input type="text" id="turn" name="turn" /></td>
                </tr>
                <tr>
                    <th><label for="fade">Fade</label></th>
                    <td><input type="text" id="fade" name="fade" /></td>
                </tr>
                <tr>
                    <th><label for="weight">Weight</label></th>
                    <td><input type="text" id="weight" name="weight" /></td>
                </tr>
                <tr>
                    <th><label for="plastic">Plastic</label></th>
                    <td><input type="text" id="plastic" name="plastic" /></td>
                </tr>
                <tr>
                    <th><label for="info">Info</label></th>
                    <td><input type="text" id="info" name="info"></textarea></td>
                </tr>
            </table>
            <input type="submit" value="Submit" />
        </form>
    </div>
</div>
<!-- form to be used to add itemized info about a disc to the database. -->

<?php 
    include'inc/footer.php'; 
    ?>
