<?php

	namespace app\core;
	use app\core\View;
	
	abstract class Controller{

		public $_route;
		public $_model;
		public $_view;

		public function __construct($route){
			$this->_route = $route;
			$this->_view = new View($route);
			$this->_model = $this->loadModel($route['c']);
		}

		public function loadModel($name){
			$path = 'app\models\\'.ucfirst($name);
			if(class_exists($path))
				return new $path;
		}
	}

?>