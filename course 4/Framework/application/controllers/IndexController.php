<?php 
class IndexController implements IController {
	function indexAction()
	{
		$fc = FrontController::getInstance();

		$view = new View();
		$view->name = 'John';
		$result = $view->render('../views/index.php');
		$fc->setBody($result);
	}
}
 ?>