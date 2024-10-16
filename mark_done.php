<?php require('db.php'); ?>
<?php
$id = $_GET['id'];
$conn->query("UPDATE tasks SET status='Completed' WHERE id=$id");
header('Location: index.php');
exit;
?>
