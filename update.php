<?php

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$rollno = $_POST['rollno'];


include "conn.php";

$sql = "UPDATE `user` SET `fname` = '$fname', `lname` = '$lname', `rollno` = '$rollno' WHERE `user`.`id` = $id";

$result = mysqli_query($conn, $sql) or die("queru faile");

header("location:index.php");

?>