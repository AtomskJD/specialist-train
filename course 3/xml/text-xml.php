<?php
	$dom = new DomDocument();
	$dom->load("catalog.xml");
	// выбираем корень
	$root = $dom->documentElement;
	echo $root->nodeType;
	// список всех детей
	$children = $root->childNodes;
	foreach($children as $var){
		echo $var->textContent."<br>";
	}
	//echo $root->textContent;
?>