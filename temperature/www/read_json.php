<?php
require('connect.php');
$sql = "SELECT * FROM eintrag";
$resultarray2 = array();
$anzeige = mysqli_query($db_link, $sql);
while($row=mysqli_fetch_assoc($anzeige))
{
  $resultarray2[] = $row;
};
echo json_encode($resultarray2);
?>
