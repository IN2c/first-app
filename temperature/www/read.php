<?php
require('connect.php');
 ?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="#/favicon.ico">
  <title>Theme Template for Bootstrap</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Eingabe</a></li>
          <li class="active"><a href="read.php">&Uuml;bersicht</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <?php

    $sql = "SELECT * FROM eintrag";
    $anzeige = mysqli_query($db_link, $sql);
    while($row = mysqli_fetch_assoc($anzeige))
    {
      $ID = $row["ID"];
      echo "<tr><td>".$ID." "."</td>";
      $temp = $row["Temperatur"];
      echo "<td>".$temp." "."</td>";
      $datum = $row["Date"];
      echo "<td>".$datum."</td>";
      echo "<td><button class=\"btn btn-danger\" id=".$ID." onclick='deleteEintrag(".$ID.")'>Delete</button></td></tr></br>";
    }
  ?>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
