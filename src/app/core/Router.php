<?php
	
	namespace app\core;
	use app\core\View;
	
	class Router{
		
		protected $_load = [];
		protected $_url = '';
		protected $_routes = [];
		protected $_params = [];

		public function __construct(){
			$this->load();
			$this->set_url();
		}

		private function load(){
			$this->_load = require_once CONFIG.'/routes.php';
			foreach($this->_load as $key => $val){
				$this->add($key, $val);
			}
		}

		private function set_url(){
			$this->_url = trim($_SERVER['REQUEST_URI'], '/');
		}

		public function add($route, $params){
			$this->_routes['#^'.$route.'$#'] = $params;
		}

		public function match(){
			foreach($this->_routes as $route => $params){
				if(preg_match($route, $this->_url, $matches)){
					$this->_params = $params;
					return true;
				}
			}
			return false;
		}

		public function run(){
			if($this->match()){
				$path = 'app\controllers\\'.ucfirst($this->_params['c']).'Controller';
				if(class_exists($path)){
					$action = $this->_params['a'].'Action';
					if(method_exists($path, $action)){
						$c = new $path($this->_params);
						$c->$action();
					}else{
						// Нет такого метода в классе.
						View::errorCode(404);
					}
				}else{
					// Нет такого класса.
					View::errorCode(404);
				}
			}else{
				// error 404
				View::errorCode(404);
			}
		}
	}

?>