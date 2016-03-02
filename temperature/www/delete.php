<?php
  require('connect.php');
  $ID = $_GET["id"];
  echo $ID;
  $sql = "DELETE FROM eintrag WHERE ID='".$ID."'";
  mysqli_query($db_link,$sql);
?>
