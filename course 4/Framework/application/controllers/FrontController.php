<?php 
class FrontController{
	protected $_controller, $_action, $_params, $_body;
	static $_instance;

	public static function getInstance()
	{
		if (!(self::$_instance instanceOf self))       
			self::$_instance = new self();
		return self::$_instance;
	}
	private function __construct()
	{
		$request = $_SERVER['REQUEST_URI'];
		$splits = explode('/', trim($request,'/'));
		$this->_controller = !empty($splits[0])?ucfirst($splits[0]).'Controller':'indexController';
		$this->_action = !empty($splits[1])?ucfirst($splits[1]).'Action':'indexAction';
		if (!empty($splits[2])){
			$keys = $values = array();
			for($i=2, $cnt = count($splits); $i<$cnt; $i++){
				if ($i%2 == 0)
					$keys[] = $splits[$i];
				else 
					$values[] = $splits[$i];
			}
			$this->$_params = array_combine($keys, $values);
		}
	}

	public function route()
	{
		if (class_exists($this->getController())){
			$rc = new ReflectionClass($this->getController());
			if ($rc->implementsInterface('IController')){
				if ($rc->hasMethod($this->getAction())){
					$controller = $rc->newInstance();
					$method = $rc->getMethod($this->getAction());
					$method->invoke($controller);
				} else {
					throw new Exception('Wrong Action');
				}
			} else {
					throw new Exception('Wrong Interface');
			}
		} else {
			throw new Exception('Wrong Controller');
		}
	}//end route
	function getController()
	{
		return $this->_controller;
	}//end getController
	function getParams()
	{
		return $this->_params;
	}//end getParams
	function getBody()
	{
		return $this->_body;
	}//end getBody
	function getAction()
	{
		return $this->_action;
	}//end getAction
	function setBody($body)
	{
		$this->_body = $body;
	}//end setBody
}
 ?>