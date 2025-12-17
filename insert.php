<?php
include 'db.php';
$name=$_POST['name'];
$faculty=$_POST['faculty'];
mysqli_query($conn,"INSERT INTO students(name,faculty) VALUES('$name','$faculty')");
header("Location:index.php");
?>