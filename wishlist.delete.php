<?php
require_once __DIR__ . "/database.php";

if (isset($_GET['id'])) {
  $query = $db->prepare("DELETE FROM wishlists WHERE id = :id");
  $query->bindParam(":id", $_GET['id']);
  $query->execute();

  header("Location: wishlist.index.php");
}
