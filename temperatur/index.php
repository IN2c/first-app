<?php

	// hier wird die autoload Klasse eingebunden
	define ('BASEPATH', realpath(dirname(__FILE__)));
	include(BASEPATH.DIRECTORY_SEPARATOR.'classes' .DIRECTORY_SEPARATOR.'autoload.class.php');
	// eine contoller instanz wird erstellt
	$controller = new Controller();

	// Tobias & Oliver
	// Auslesen der _GET und _POST variablen aus script.js
	@$template	= $_GET['template'];
	@$funktion 	= $_GET['funktion'];
	@$id 				= $_GET['id'];
	@$wert  		= $_POST['tmp'];
	@$funktion1 = $_POST['funktion'];

	// Autor: Oliver & Tobias & Janosh
	// hier wird überprüft, um welche aktion es sich handelt und entsprechend
	// im controller eine Funktion aufgerufen
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
