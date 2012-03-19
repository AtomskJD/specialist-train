<?php
	// Создание объекта DOM
	$dom = new DOMDocument();
	
	// Загрузка XML-документа в объект
	$dom->load("catalog.xml");
	
	//Получение корневого узла
	$root = $dom->documentElement;
	
	//Тип узла
	echo $root->nodeType;
	
	//Получение потомков корневого узла
	$children = $root->childNodes;
	//var_dump($children);
?>