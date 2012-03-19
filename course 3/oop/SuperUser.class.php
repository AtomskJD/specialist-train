<?php
class SuperUser extends User implements ISuperUser{
	static $superCount = 0;
	public $role;
	//перегрузим метод интерфейса
	function __construct($name, $login, $password, $role){
		parent::__construct($name, $login, $password);
		$this->role = $role;
			//счетчик суперов
			++self::$superCount;
			--parent::$Count;
	}
	function getInfo(){
		$arr = array();
		foreach($this as $k => $v){
			$arr[$k]=$v;
		}
		return $arr;
	}
	function showInfo(){
		parent::showInfo();
		echo "<br>role:  ". $this->role."</p>";
	}
}
?>