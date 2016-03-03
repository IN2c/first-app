<!DOCTYPE html>
<html>
<head>
  <!-- Valentin (Hauptteil) & Janosh (php)-->
  <!-- meta Informationen und Einbindung von benötigten Dateien -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="#/favicon.ico">
  <title><?php echo $this->content['title']; ?></title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">
</head>
  <body>
    <!-- Navigation -->
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
            <li><a href="index.php?template=eingabe">Eingabe</a></li>
            <li><a href="index.php?template=uebersicht">&Uuml;bersicht</a></li>
            <li class="active"><a href="index.php?template=geolocation">Geolocation</a></li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- Inhalt der Website -->
    <section>
      <div class="container">
        <div class="title">
          <h1>Geolocation</h1>
        </div>
        <p id="geolocation">Finding geolocation...</p>
      </div>
    </section>

	<script type="text/javascript" charset="utf-8" src="js/cordova.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
