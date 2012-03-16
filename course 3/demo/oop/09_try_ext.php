<?php 
	class MathException extends Exception {
		function __construct($message) {
			parent::__construct($message);	
		}
	}	
	try {
		$a = 1;
		$b = 0;
		if ($b==0) throw new MathException("Деление на 0!");
		echo $a/$b;
	} catch (MathException $e) {
		echo "Произошла математическая ошибка ", $e->getMessage(),
		" в строке ", $e->getLine(), 
		" файла ", $e->getFile();	
	} catch (Exception $e) {
		echo "Произошла неопознанная ошибка ", $e->getMessage(),
		" в строке ", $e->getLine(), 
		" файла ", $e->getFile();	
	}
?>