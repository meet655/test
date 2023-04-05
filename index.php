<?php

include "conn.php";

$sql = "SELECT * FROM `user`";

$result = mysqli_query($conn, $sql) or die("query failed");
?>

<html>
<form action="insert.php" method="post">
    <table>
        <tr>
            <td><label>Fname:</label></td>
            <td><input name="fname" value="" /></td>
        </tr>
        <tr>
            <td><label>Lname:</label></td>
            <td><input name="lname" value="" /></td>
        </tr>
        <tr>
            <td><label>Roll no:</label></td>
            <td><input name="rollno" value="" /></td>
        </tr>

        <tr>
            <td><input type="submit" value="add" /></td>
        </tr>
    </table>
</form>
<br />
<br />
<br />
<br />
<br />

</html>

<html>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table border="100px" width="50%">

    <tr>
        <td>id</td>
        <td>Fname</td>
        <td>Lname</td>
        <td>roll no</td>
        <td>action</td>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td>
            <?php echo $row['id']; ?>
        </td>
        <td>
            <?php echo $row['fname']; ?>
        </td>
        <td>
            <?php echo $row['lname']; ?>
        </td>
        <td>
            <?php echo $row['rollno']; ?>
        </td>

        <td>
            <a href="edit.php?id=<?php echo $row['id']; ?>" value="edit">edit</a> / <a
                href="del.php?id=<?php echo $row['id']; ?>" value="edit">delete</a>
            </a>
    </tr>
    <?php

        }
        ?>


</table>


<?php
}

?>

</html>