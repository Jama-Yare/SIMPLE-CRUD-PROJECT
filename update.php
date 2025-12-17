<?php
include 'db.php';
$id=$_POST['id'];
$name=$_POST['name'];
$faculty=$_POST['faculty'];
mysqli_query($conn,"UPDATE students SET name='$name', faculty='$faculty' WHERE id=$id");
header("Location:index.php");
?>
