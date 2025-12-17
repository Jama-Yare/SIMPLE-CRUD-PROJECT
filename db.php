<?php
$conn = mysqli_connect("localhost","root","","crud_db");
if(!$conn){ die("Database connection failed"); }
?>


<?php
session_start();
if(!isset($_SESSION['user'])){
  header("Location: login.php");
}
?>