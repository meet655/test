<?php

include "conn.php";

$id = $_GET['id'];

$sql = "DELETE FROM `user` WHERE `user`.`id` = $id";

$result = mysqli_query($conn, $sql) or die("queru faile");

header("location:index.php");

?>