<?php
include 'header.php'; include 'db.php';
$id=$_GET['id'];
$r=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM students WHERE id=$id"));
?>
<h2>Edit Student</h2>
<form action="update.php" method="post">
<input type="hidden" name="id" value="<?= $r['id'] ?>">
<input type="text" name="name" value="<?= $r['name'] ?>">
<input type="text" name="faculty" value="<?= $r['faculty'] ?>">
<button>Update</button>
</form>