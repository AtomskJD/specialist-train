<?php
	/*
	ЗАДАЧА
	Отрисовать навигационное меню на странице, типа
		<a href="contact.php">Contact</a>
	используя массив в качестве структуры меню
	
	ЗАДАНИЕ 1
	- Создайте ассоциативный массив $menu
	- Заполните массив соблюдая следующие условия:
		- Название ячейки является пунктом меню, например: Home, About, Contact...
		- Значение ячейки является именем файла, на который будет указывать ссылка, например: index.php, about.php, contact.html...
	*/
$menu = array(
			'home' => "index.php",
			'about'=> "about.php",
			'contact'=> "contact.html"
		);
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Меню</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Меню</h1>
	<?php
	/*
	ЗАДАНИЕ 2
	- Используя цикл foreach отрисуйте вертикальное меню, структура которого описана в массиве $menu
	*/
echo "<ul style='list-style-type:none'>";
foreach($menu as $link=>$href){
	echo "<li><a href='$href'>$link</a></li>";
}
echo "</ul>";
	?>
</body>
</html>
