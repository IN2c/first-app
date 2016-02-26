<?php
  require('connect.php');
 ?>
<html>
<head>

  <script type="text/javascript" src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>



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
  <section>
    <div class="title-detail">
      <h1>&Uuml;bersicht</h1>
    </div>
    <table class="ubersicht">
      <thead>
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
    </thead>
        <tbody id="ausgabe">
        </tbody>
    </table>
  </section>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
