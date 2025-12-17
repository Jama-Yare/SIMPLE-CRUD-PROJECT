<?php
session_start();
$error = "";
if($_SERVER['REQUEST_METHOD']=='POST'){
 include 'db.php';
 $u=$_POST['username'];
 $p=$_POST['password'];
 $q=mysqli_query($conn,"SELECT * FROM users WHERE username='$u' AND password='$p'");
 if(mysqli_num_rows($q)==1){
   $_SESSION['user']=$u;
   header("Location:index.php");
 } else {
   $error="Invalid Login";
 }
}
?>
<form method="post">
<h2>Login</h2>
<p style="color:red;"> <?= $error ?> </p>
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button>Login</button>
</form>
