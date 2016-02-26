<?php
require('connect.php');
 ?>
<html>
<head>
<<<<<<< HEAD
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="js/fnReloadAjax.js"></script>


=======
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
>>>>>>> 9e31152feac797e6db4fd359f612a0d4aabbb397
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
  <section>
    <div class="title-detail">
      <h1>&Uuml;bersicht</h1>
    </div>
    <table class="ubersicht">
      <tr>
        <th>
          ID
        </th>
        <th>
          Temperatur
        </th>
        <th>
          Datum
        </th>
      </tr>
      <?php

<<<<<<< HEAD
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
=======
        $sql = "SELECT * FROM eintrag";
        $anzeige = mysqli_query($db_link, $sql);
        while($row = mysqli_fetch_assoc($anzeige))
        {
          $ID = $row["ID"];
          echo "<tr><td class=\"nummer\">".$ID." "."</td>";
          $temp = $row["Temperatur"];
          echo "<td class=\"temperatur\">".$temp." "."</td>";
          $datum = $row["Date"];
          echo "<td class=\"datum\">".$datum."</td>";
          echo "<td class=\"button\"><button class=\"btn btn-danger\" id=".$ID." onclick='deleteEintrag(".$ID.")'>Delete</button></td></tr>";
        }
      ?>
    </table>
  </section>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
>>>>>>> 9e31152feac797e6db4fd359f612a0d4aabbb397
</body>
</html>
