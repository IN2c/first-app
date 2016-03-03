<?php
//Janosh
//Autoload für das MVC-Modell
function __autoload ($classe){

	$class = strtolower($classe);
	$class = $class.'.class.php';

	if(file_exists(BASEPATH.DIRECTORY_SEPARATOR.'classes' .DIRECTORY_SEPARATOR.$class)){
		include(BASEPATH.DIRECTORY_SEPARATOR.'classes' .DIRECTORY_SEPARATOR.$class);
	}
}
?>
