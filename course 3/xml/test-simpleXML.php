<pre>
<?php
	$sxml = simplexml_load_file("catalog1.xml");
$titles = $sxml->xPath("/catalog/book/title[@id>3 and @id<6]");
var_dump($titles);

	//echo count($sxml);
	// $sxml->book[0]->title = "XML и IE9";
// file_put_contents("catalog1.xml", $sxml->asXML());
// $attr = $sxml->book[0]->title->attributes();
// var_dump($attr);
// echo $sxml->book[0]->title["aaaa"];
// $str = <<<LABEL
// <html>
	// <head><title>TesT</title></head>
	// <body>
		// <p>Это <a href="#">мой</a> сайт</p>
	// </body>
// </html>
// LABEL;
// сконвертируем в строку
// echo $sxml2->body[0]->p->asXML();


?>
</pre>