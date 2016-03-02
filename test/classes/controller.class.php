<?php
	class Controller{
	 
		private $template;
		private $view;
		private $data;
	 
		public function __construct(){
			$this->view = new View();
			$this->data = Model::getData();
		}
	 
		public function display(){    
			$this->view->setTemplate();
			$this->view->setContent("title", "Temperatur");
			$this->view->setContent("content", $this->data);
			$this->view->setContent("footer", "&copy 2011 by mausernetwork\n");
	 
			return $this->view->parseTemplate();
		}
		
		public function displayEingabe(){
			
		}
	}
?>