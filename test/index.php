<?php
	define ('BASEPATH', realpath(dirname(__FILE__)));
	include(BASEPATH.DIRECTORY_SEPARATOR.'classes' .DIRECTORY_SEPARATOR.'autoload.class.php');
	$controller = new Controller();

	@$template	= $_GET['template'];
	@$funktion 	= $_GET['funktion'];
	@$id 				= $_GET['id'];
	@$wert  		= $_POST['tmp'];
	@$funktion1 = $_POST['funktion'];

	if($template == "uebersicht")
	{
		echo $controller->displayUebersicht();
	}
	elseif($template == "geolocation")
	{
		echo $controller->displayGeolocation();
	}
	elseif($funktion == "read_jason" || $funktion == "delete")
	{
		$controller->getID($id);
		$controller->executeFunction($funktion);
	}
	elseif($funktion1 == "insert")
	{
		$controller->getWert($wert);
		$controller->executeFunction($funktion1);
	}
	else
	{
		echo $controller->displayEingabe();
	}





?>
