<?php

namespace Framework;	
<<<<<<< HEAD

=======
	
>>>>>>> origin/master
class Application
{
	
	private $_config;
	
<<<<<<< HEAD
	public function __construct($configPath){
		$this->_config = include_once($configPath);
	}
	
	public function run(){
		
		$config = $this->_config;
		if($route = Router\Router::find($_SERVER['REQUEST_URI'], $config['routes'])){
			$ctrl = $route['controller'];
			$refl = new \ReflectionClass($ctrl);
						
			if($refl->hasMethod($route['action'].'Action')){
				
			}
			
		}
		else{
			echo "<b>The controller is not found<br />";
			die;
		}
		
		
		
		
		//echo "Hello from Application (run)<br />";
=======
	public function __construct($config){
		$this->_config = $config;
	}
	
	public function run(){
		echo "It works";
>>>>>>> origin/master
	}
	
}