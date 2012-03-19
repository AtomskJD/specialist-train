<?php
// strip_tags trim

	$file = file_get_contents('http://www.cbr.ru/currency_base/D_print.aspx?date_req=08.10.2011');
	echo substr($file, 3099, 108);
	//var_dump($file);
// $dom = new DomDocument("1.0", "utf-8");
// $dom->loadHTMLFile('http://www.cbr.ru/currency_base/D_print.aspx?date_req=08.10.2011');//HTML file
// $some = $dom->getElementsByTagName("b");
// echo $some->item(0)->textContent;
?>
