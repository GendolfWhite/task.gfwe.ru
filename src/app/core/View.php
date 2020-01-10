<?php

	namespace app\core;

	class View{

		public $_path;
		public $_route;
		public $_layout = 'default';
		public $_title = 'Таск-Менеджер';

		public function __construct($route){
			$this->_route = $route;
			$this->_path = $route['c'].'/'.$route['a'];
		}

		private function header(){
			$title = $this->_title;
			require_once LAYOUT.'/header.php';
		}

		private function footer(){
			require_once LAYOUT.'/footer.php';
		}

		private function show($controller, $code){
			echo ($this->_route['c'] == $controller ? $code : '');
		}

		public function render($title = false, $vars = false){
			if($title) $this->_title = $title.' / '.$this->_title;
			if($vars) extract($vars);

			$path = VIEWS.'/'.$this->_path.'.php';
			if(file_exists($path)){
				require_once $path;
			}else{
				// Нет такого шаблона
				die('Нет такого файла вида');
			}
		}

		public static function errorCode($code){
			http_response_code($code);
			$path = VIEWS.'/errors/'.$code.'.php';
			if(file_exists($path))
				require_once $path;
			else
				die('eroor '.$code);
			exit;
		}

		public function location($url){
			header('Location: '.$url);
			exit;
		}
	}

?>