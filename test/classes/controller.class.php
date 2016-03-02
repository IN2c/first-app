<?php
	class Controller{

		private $template;
		private $view;
		private $data;
		private $model;

		public function __construct(){
			$this->view = new View();
			$this->data = Model::getData();
			$this->model = new Model();
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

		public function executeFunction($funktion)
		{
			if($funktion == "insert")
			{
				$this->model->insert();
			}
			elseif($funktion == "read_jason")
			{
				$this->data =	$this->model->read_jason();
				print_r($this->data);
			}
			elseif($funktion == "delte")
			{
				$this->model->delete();
			}
			else
			{
				// do nothing
				echo "do nothing";
			}
		}
	}
?>
