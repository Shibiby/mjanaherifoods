<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM customers WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: /mjanaherifoods/customers.php");
}