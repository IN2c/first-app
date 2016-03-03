<?php
//Janosh
	class View{

		private $path       = 'templates';
		private $template;
		private $content    = array();

		public function setContent($key, $value){
			$this->content[$key] = $value;
		}


		public function setTemplate($template){
			$this->template = $this->path . DIRECTORY_SEPARATOR . $template . '.tpl.php';
		}


		public function parseTemplate(){

			if(file_exists($this->template)){

				ob_start();
				include $this->template;
				$output = ob_get_contents();
				ob_end_clean();

				return $output;
			}
			return "Kann das Template ".$this->template." nicht finden";
		}
	}
?>
