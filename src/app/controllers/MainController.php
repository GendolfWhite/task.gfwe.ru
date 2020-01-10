<?php
	
	namespace app\controllers;
	use app\core\Controller;

	class MainController extends Controller{

		public function indexAction(){
			$this->_model->func();
			$this->_view->render();
		}

	}

?>