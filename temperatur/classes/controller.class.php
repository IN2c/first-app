<?php
//Janosh (Grundgerüst), Oliver&Tobias (alle Funktionen ausser __construct() und displayEingabe()).
	class Controller{

		private $template;
		private $view;
		private $data;
		private $model;
		private $ID;

		public function __construct(){
			$this->view = new View();
			$this->data = Model::getData();
			$this->model = new Model();
		}
		//Setzt das richtige Template, um die Seite Eingabe anzuzeigen
		public function displayEingabe(){
			$this->view->setTemplate("eingabe");
			$this->view->setContent("title", "Eingabe");
			$this->view->setContent("content", $this->data);

			return $this->view->parseTemplate();
		}
		//Setzt das richtige Template, um die Seite Übersicht anzuzeigen
		public function displayUebersicht(){
			$this->view->setTemplate("uebersicht");
			$this->view->setContent("title", "Übersicht");
			$this->view->setContent("content", $this->data);

			return $this->view->parseTemplate();
		}
		//Setzt das richtige Template, um die Seite Geolocation anzuzeigen
		public function displayGeolocation(){
			$this->view->setTemplate("geolocation");
			$this->view->setContent("title", "Geolocation");
			$this->view->setContent("content", $this->data);

			return $this->view->parseTemplate();
		}
		//Diese Funktion bekommt die ID eines DB-Eintrages und speichert sie in eine Variable
		public function getID($id)
		{
			$this->ID = $id;
		}
		//Diese Funktion bekommt den Wert des Eingabefeldes und speichert sie in eine Variable
		public function getWert($wert)
		{
			$this->wert = $wert;
		}
		//Es wird die richtige Funktion ausgeführt
		public function executeFunction($funktion)
		{
			if($funktion == "insert")
			{
				$this->data = $this->model->insert();
				print_r($this->data);
			}
			elseif($funktion == "read_jason")
			{
				$this->data =	$this->model->read_jason();
				print_r($this->data);
			}
			elseif($funktion == "delete")
			{
				$this->model->delete($this->ID);
				echo $this->ID;
			}
			else
			{
				// do nothing
				echo "do nothing";
			}
		}
	}
?>
