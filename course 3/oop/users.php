<?php
function __autoload($name){
	include $name.".class.php";
}
#Исключения
class nameExc extends Exception{
	function __construct($msg){
		$msg .= " name!";
		parent::__construct($msg);
	}
}
class loginExc extends Exception{
	function __construct($msg){
		$msg .= " login!";
		parent::__construct($msg);
	}
}
class passExc extends Exception{
	function __construct($msg){
		$msg .= " password!";
		parent::__construct($msg);
	}
}
#Исключения
// да да это простая функция
function checkObject($object){
	if ($object instanceOf User)
		if ($object instanceOf SuperUser)
			echo "Это админ";
		else
			echo "Это быдло";
	else echo "Это непойми кто";
}
////////////Вызовы/////////////////////////////////

$superUser1 = new SuperUser("administrator", "admin", "root", "admin");
	foreach ($superUser1->getInfo() as $v=>$k){
		echo "<br>$v = $k";
	}
	// print_r($superUser1->getInfo());	$superUser1->showInfo();

$user1 = new User('Vasya P', 'Vasya', '123');
	$user1->showTitle();
	$user1->showInfo();
	
$user2 = new User('Petya S', 'Petya', '345');
	$user2->showTitle();
	$user2->showInfo();

$user3 = new User('John S', 'John', '567');
	$user3->showInfo();

$user4 = clone $user3;
	$user4->showInfo();
	
$user5 = new SuperUser("Jam", "Kutsonagi", "qwety", "Casual");
echo "<hr>";
echo "<h3>Всего юзеров: ".User::$Count." и суперюзеров: ".SuperUser::$superCount."</h3>";
?>
<p><?checkObject($user1)?></p>
<p><?checkObject($user2)?></p>
<p><?checkObject($superUser1)?></p>
<p><?checkObject($user3)?></p>
<?php
	/*
	ЗАДАНИЕ 15
	- Создайте свойство objNum, которое будет хранить порядковый номер объекта.
	  Подумайте, где лучше его создать?
	- Внесите изменения в классе User (а может и в SuperUser?), которые будут присваивать свойству objNum,
	  порядковый номер объекта.
	  Подумайте, где и как лучше это сделать?
	- В классе User (а может и в SuperUser?) опишите метод __toString()
	- Данный метод должен возвращать строку в формате "Объект #objNum: name".
	  Например: "Объект #3: Василий Пупкин"
	- Попробуйте преобразовать один из созданных Вами объектов в строку
	*/
?>