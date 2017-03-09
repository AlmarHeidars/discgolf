<?php 
$pageTitle = "Add New Disc";
include'inc/header.php'; ?>

<div class="section page">
    <div class="wrapper">
        <h2>Add New Disc</h2>
        <p>Add a new disc to the collection.</p>
        <form method="post" action="process.php">
            <table>
                <tr>
                    <th><label for="name">Name</th>
                    <td><input type="text" id="name" name="name" /></td>
                </tr>
            </table>
            <table>
                <tr>
                    <th><label for="brand">Brand</th>
                    <td><input type="text" id="brand" name="brand" /></td>
                </tr>
            </table>
            <table>
                <tr>
                    <th><label for="type">Type</th>
                    <td><input type="text" id="type" name="type" /></td>
                </tr>
            </table>
            <table>
                <tr>
                    <th><label for="skill">Skill</th>
                    <td><input type="text" id="skill" name="skill" /></td>
                </tr>
            </table>
            <table>
                <tr>
                    <th><label for="stability">Stability</th>
                    <td><input type="text" id="stability" name="stability" /></td>
                </tr>
            </table>
            <table>
                <tr>
                    <th><label for="speed">Speed</th>
                    <td><input type="text" id="speed" name="speed" /></td>
                </tr>
            </table>
            <table>
                <tr>
                    <th><label for="glide">Glide</th>
                    <td><input type="text" id="glide" name="glide" /></td>
                </tr>
            </table>
            <table>
                <tr>
                    <th><label for="turn">Turn</th>
                    <td><input type="text" id="turn" name="turn" /></td>
                </tr>
            </table>
            <table>
                <tr>
                    <th><label for="fade">Fade</th>
                    <td><input type="text" id="fade" name="fade" /></td>
                </tr>
            </table>
            <table>
                <tr>
                    <th><label for="plastic">Plastic</th>
                    <td><input type="text" id="plastic" name="plastic" /></td>
                </tr>
            </table>
            <table>
                <tr>
                    <th><label for="info">Info</th>
                    <td><textarea type="text" id="info" name="info"></textarea></td>
                </tr>
            </table>
            <input type="submit" value="Submit" />
        </form>
    </div>
</div>

<?php include'inc/footer.php'; ?>