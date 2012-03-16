<?php
	// Сокетное соединение
	// Создание сокета (host+порт)
	$socket = fsockopen("localhost", 80, $error, $errorMsg, 30);
	
	// Создание POST-строки
	$POSTstr = "name=John&age=26";
	// Посылка HTTP-запроса
	$out = "POST /course%203/socket/dummy.php HTTP/1.1\r\n";
	$out .= "Host: localhost\r\n";
	$out .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$out .= "Content-Length: ".strlen($POSTstr)."\r\n\r\n";
	$out .= $POSTstr."\r\n\r\n";
	fputs($socket, $out);
	// Получение и вывод ответа
	while(!feof($socket)){
		echo fgets($socket)."<br>";
	}
	// Закрытие соединения
	fclose($socket);
?>