<!DOCTYPE html>
<html>
<head>
  <!-- Valentin(Haupttiel) & Janosh(php) -->
  <!-- meta Informationenen und Einbinden der benötigten Dateien -->
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
            <li class="active"><a href="index.php?template=eingabe">Eingabe</a></li>
            <li><a href="index.php?template=uebersicht">&Uuml;bersicht</a></li>
            <li><a href="index.php?template=geolocation">Geolocation</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Inhalt der Website -->
    <section>
      <div class="container">
        <div class="title">
          <h1>Eingabe</h1>
        </div>
        <div class="form">
          <p><?php echo $this->content['content']; ?></p>
          <p>Bitte geben Sie die aktuelle Temparatur ein:</p>
          <form>
            <input type="number" id="temperature" name="temperature" placeholder="°C">
            <br>
            <button onclick="insertEintrag()" id="tempsubmit" class="btn btn-lg btn-success">Senden</button>
            </form>
        </div>
        <div class="alert-danger" id="alert">
        </div>
      </div>
    </section>
    <!-- Einbinden von JS scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
