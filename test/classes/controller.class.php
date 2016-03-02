<?php
	class Controller{

		private $template;
		private $view;
		private $data;

		public function __construct(){
			$this->view = new View();
			$this->data = Model::getData();
		}

		public function displayEingabe(){
			$this->view->setTemplate("eingabe");
			$this->view->setContent("title", "Eingabe");
			$this->view->setContent("content", $this->data);

			return $this->view->parseTemplate();
		}

		public function displayUebersicht(){
			$this->view->setTemplate("uebersicht");
			$this->view->setContent("title", "Übersicht");
			$this->view->setContent("content", $this->data);

			return $this->view->parseTemplate();
		}

		public function displayGeolocation(){
			$this->view->setTemplate("geolocation");
			$this->view->setContent("title", "Geolocation");
			$this->view->setContent("content", $this->data);

			return $this->view->parseTemplate();
		}
	}
?>
