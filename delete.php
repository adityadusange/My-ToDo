<?php require('db.php'); ?>
<?php
$id = $_GET['id'];
$conn->query("DELETE FROM tasks WHERE id=$id");
header('Location: index.php');
exit;
?>
