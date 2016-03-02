<?php
	define ('BASEPATH', realpath(dirname(__FILE__)));
	include(BASEPATH.DIRECTORY_SEPARATOR.'classes' .DIRECTORY_SEPARATOR.'autoload.class.php');
	$controller = new Controller();

	$template = $_GET['template'];
	if($template == "uebersicht")
	{
		echo $controller->displayUebersicht();
	}
	elseif ($template == "eingabe")
	{
		echo $controller->displayEingabe();
	}
	elseif($template == "geolocation")
	{
		echo $controller->displayGeolocation();
	}
	else
	{
		echo $controller->displayEingabe();
	}
?>
