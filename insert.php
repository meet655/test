<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$rollno = $_POST['rollno'];


include "conn.php";

$sql = "INSERT INTO `user` (`fname`, `lname`, `rollno`) VALUES ('$fname ', '$lname ', '$rollno')";

$result = mysqli_query($conn, $sql) or die("queru faile");

header("location:index.php");

?>