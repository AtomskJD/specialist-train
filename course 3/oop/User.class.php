<?php
class User extends AUser{
	static $Count = 0;
	const INFO_TITLE = "Данные пользователя:";
	public $name;
	public $login;
	public $password;
	
	function showTitle(){
		echo self::INFO_TITLE;
	}
	
	function __construct($name="", $login="", $password=""){	// вызывается автоматически при создании объектов
		try{
			if($name == "") 
			throw new nameExc("Введите");
			$this->name = $name;
			if($login == "") 
			throw new loginExc("Введите");
			$this->login = $login;
			if($password == "") 
			throw new passExc("Введите");
			$this->password = $password;
		}catch(nameExc $ex){
			echo "ОЩИБКА <br>",
			$ex->getMessage();
		}catch(loginExc $ex){
			echo "ОЩИБКА <br>",
			$ex->getMessage();
		}catch(passExc $ex){
			echo "ОЩИБКА <br>",
			$ex->getMessage();
		}
			//счетчик простых
			++self::$Count;
	}
	function __clone(){ //конструктор для клонирования
		$this->name = "Guest";
		$this->login = "guest";
		$this->password = "qwerty";
		++self::$Count;
	}
	function showInfo(){	//показ всех данных
		$str = "<p>name:  ". $this->name 
		."<br> login:  ". $this->login
		."<br> pass:  ". $this->password;
		echo $str;
	}	
}
?>