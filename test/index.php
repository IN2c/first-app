<?php
	define ('BASEPATH', realpath(dirname(__FILE__)));
	include(BASEPATH.DIRECTORY_SEPARATOR.'classes' .DIRECTORY_SEPARATOR.'autoload.class.php');
	$controller = new Controller();

	@$template	= $_GET['template'];
	@$funktion 	= $_GET['funktion'];
	@$id 				= $_GET['id'];

	if($template == "uebersicht")
	{
		echo $controller->displayUebersicht();
	}
	elseif($template == "geolocation")
	{
		echo $controller->displayGeolocation();
	}
	elseif($funktion == "read_jason" || $funktion == "delete" || $funktion == "insert")
	{
		$controller->getID($id);
		$controller->executeFunction($funktion);
	}
	else
	{
		echo $controller->displayEingabe();
	}





?>
