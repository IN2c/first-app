<?php
require('connect.php');
 ?>
<html>
<head>
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="js/fnReloadAjax.js"></script>


</head>
<body>
  <div id='message'>
  </div>
  <?php

    $sql = "SELECT * FROM eintrag";
    $anzeige = mysqli_query($db_link, $sql);
    while($row = mysqli_fetch_assoc($anzeige))
    {
      $ID = $row["ID"];
      echo "<tr id='Tabelle'><td>".$ID." "."</td>";
      $temp = $row["Temperatur"];
      echo "<td>".$temp." "."</td>";
      $datum = $row["Date"];
      echo "<td>".$datum."</td>";
      echo "<td><button id=".$ID." onclick='deleteEintrag(".$ID.")'>Delete</button></td></tr></br>";
    }
  ?>
</body>
</html>
