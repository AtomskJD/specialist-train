<?php
    // Описать функцию/метод Web-сервиса
	function getStock($num){
		$stock = array(
						"1"=>100,
						"2"=>200,
						"3"=>300,
						"4"=>400,
						"5"=>500,);
	if (array_key_exists($num,$stock) )
		return $stock[$num];
	else
		return 0;
	}
	
	// Отключить кэширование WSDL-документа при разработке
	ini_set("soap.wsdl_cache_enabled", "0");
	
	// Создать SOAP-сервер
	$server = new SoapServer("http://localhost/course%203/soap/stock.wsdl");	
	
	// Добавить функцию/класс к серверу
	$server->addfunction("getStock");
	
	// Запустить сервера
	$server->handle();
	
?>