<?php
	/*
	ЗАДАНИЕ 1
	- Запустите сессию
	- Создайте переменную nChars(количество выводимых на картинке символов)
		и присвойте ей произвольное значение(рекомендуемое: 5)
	- Сгенерируйте случайную строку длиной nChars символов
	- Создайте сессионную переменную randStr и присвойте ей сгенерированную строку
	*/
session_start();
$nChars = 5;

function randStr($num=5){
	$num = (int)$num;
	if ($num<1) return 0;
	$charSet = array("A","B","C","D","E","F","G","H","J","K","L","M","N","P","Q","R","S","T","U","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9");
	$set = count($charSet)-1;
	$res = "";
	for ($iter=0; $iter<$num; $iter++){
		$res .= $charSet[rand(0, $set)];
	}
	return $res;
}
$_SESSION['randStr'] = randStr($nChars);
$image = imageCreateFromJPEG("images/noise.jpg");
imageAntiAlias($image, true);
$color = imageColorAllocate($image, 0,0,0);
for ($it=0; $it<$nChars; $it++){
	$xRand = rand(1, 10);
	imageTTFtext($image,30, $xRand*$xRand/2, 5+(37*$it)+$xRand, 30+$xRand, $color, "fonts/georgia.ttf", $_SESSION['randStr']{$it});
}

header("Content-type: image/jpg");
imageJPEG($image,"", 90);
	
	/*
	ЗАДАНИЕ 2
	- Создайте изображение на основе файла "images/noise.jpg"
	- Создайте цвет для рисования
	- Включите сглаживание
	- Задайте начальные координаты x и y для отрисовки строки(рекомендуемые: 20 и 30)
	- Используя цикл for отрисуйте строку посимвольно
	- Для каждого символа используйте случайные значение размера и угла наклона
	- Отдайте полученный результат как jpeg-изображение с 10% сжатием
	*/
	
	
?>
