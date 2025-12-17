

<?php include 'header.php'; include 'db.php'; ?>
<h2>Students List</h2>
<table>
<tr><th>ID</th><th>Name</th><th>Faculty</th><th>Action</th></tr>
<?php
$q=mysqli_query($conn,"SELECT * FROM students");
while($r=mysqli_fetch_assoc($q)){
?>
<tr>
<td><?= $r['id'] ?></td>
<td><?= $r['name'] ?></td>
<td><?= $r['faculty'] ?></td>
<td>
<a href="edit.php?id=<?= $r['id'] ?>">Edit</a> |
<a href="delete.php?id=<?= $r['id'] ?>">Delete</a>
</td>
</tr>
<?php } ?>
</table>
