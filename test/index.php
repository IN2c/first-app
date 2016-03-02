<?php
	define ('BASEPATH', realpath(dirname(__FILE__)));
	include(BASEPATH.DIRECTORY_SEPARATOR.'classes' .DIRECTORY_SEPARATOR.'autoload.class.php');
	$controller = new Controller();

	@$template = $_GET['template'];
	@$funktion = $_GET['funktion'];

	if($template == "uebersicht")
	{
		echo $controller->displayUebersicht();
	}
	elseif($template == "geolocation")
	{
		echo $controller->displayGeolocation();
	}
	elseif($funktion == "read_jason")
	{
		$controller->executeFunction($funktion);
	}
	else
	{
		echo $controller->displayEingabe();
	}





?>
