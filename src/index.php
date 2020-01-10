<?
	@error_reporting(E_ALL^E_WARNING^E_DEPRECATED^E_NOTICE);
	@ini_set('error_reporting', E_ALL^E_WARNING^E_DEPRECATED^E_NOTICE);
	@ini_set('display_errors', true);
	@ini_set('html_errors', true);

	define('ROOT', __DIR__);
		define('APP', ROOT.'/app');
			define('CORE', APP.'/core');
			define('LIB', APP.'/lib');
			define('MODEL', APP.'/models');
			define('CONFIG', APP.'/config');
			define('VIEWS', APP.'/views');
				define('LAYOUT', VIEWS.'/layout');
			define('CONTRL', APP.'/controller');


	function pre($object, $var_dump = false){
		echo "<pre>";
		if($var_dump)
			var_dump($object);
		else
			print_r($object);
		echo "</pre>";
	}


	spl_autoload_register(function($class){
		$path = str_replace('\\','/', $class.'.php');
		if(file_exists($path)){
			require_once $path;
		}
	});

	session_start();

	use app\core\Router;

	$router = new Router;
	$router->run();

	// pre($router);
?>