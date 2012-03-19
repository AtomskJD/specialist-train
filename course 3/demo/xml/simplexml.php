<?php
	// Создать объект, загрузить в него документ
	$sxml = simplexml_load_file("catalog.xml");
	
	//  Вывод названия 1-й книги
	echo $sxml->book[0]->title;
?>