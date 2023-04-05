<?php

include "conn.php";
$id = $_GET['id'];
$sql = "SELECT * FROM `user` WHERE id = {$id}";

$result = mysqli_query($conn, $sql) or die("queru faile");

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {


        ?>




        <html>
        <form action="update.php" method="post">
            <table>
                <tr>
                    <td><label>id:</label></td>
                    <td><input readonly name="id" value="<?php echo $row['id']; ?>" /></td>
                </tr>
                <tr>
                    <td><label>Fname:</label></td>
                    <td><input name="fname" value="<?php echo $row['fname']; ?>" /></td>
                </tr>
                <tr>
                    <td><label>Lname:</label></td>
                    <td><input name="lname" value="<?php echo $row['lname']; ?>" /></td>
                </tr>
                <tr>
                    <td><label>Roll no:</label></td>
                    <td><input name="rollno" value="<?php echo $row['rollno']; ?>" /></td>
                </tr>

                <tr>
                    <td><input type="submit" value="update" /></td>
                </tr>
            </table>
        </form>

        <?php
    }
}
?>

</html>