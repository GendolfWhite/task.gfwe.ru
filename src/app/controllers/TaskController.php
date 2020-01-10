<?php
	
	namespace app\controllers;

	use app\core\Controller;

	class TaskController extends Controller{

		public function showAction(){
			$this->_view->render('Задачи');
		}

	}

?>