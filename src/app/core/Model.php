<?php
	
	namespace app\core;
	use app\lib\Db;
	use app\lib\DTable;

	abstract class Model{

		public $_db;
		public $_DTable;

		public function __construct(){
			$this->_db = new Db;
			$this->_DTable = new DTable;
		}
	}

?>