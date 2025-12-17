<?php include 'header.php'; include 'db.php'; ?>
<h2>Add User (Admin)</h2>
<form method="post">
<input type="text" name="username" placeholder="Username" required>
<input type="text" name="password" placeholder="Password" required>
<button>Add User</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 $u=$_POST['username'];
 $p=$_POST['password'];
 mysqli_query($conn,"INSERT INTO users(username,password,role) VALUES('$u','$p','user')");
 echo "User Added";
}
?>