<?php
header("Content-type: text/html; charset=utf-8");

function xstart($xml, $tag, $attrib){
	if (($tag != "BOOK") and ($tag != "CATALOG") ){
		echo "<td>";
	}elseif($tag == "BOOK"){echo "<tr>";}
}
function xend($xml, $tag){
	if (($tag != "BOOK") and ($tag != "CATALOG") ){
		echo "</td>";
	}elseif($tag == "BOOK"){echo "</tr>";}
}
function xtext($xml, $data){
		echo "$data";
}
//создаём парсер
$parser = xml_parser_create("UTF-8");
// обозначим функции открывающих и закрывающих тегов
xml_set_element_handler($parser, "xstart", "xend");
// текст элемента
xml_set_character_data_handler($parser, "xtext");
	
?>
<html>
	<head>
		<title>Каталог</title>
	</head>
	<body>
	<h1>Каталог книг</h1>
	<table border="1" width="100%">
		<tr>
			<th>Автор</th>
			<th>Название</th>
			<th>Год издания</th>
			<th>Цена, руб</th>
		</tr>
	<?php
	xml_parse($parser, file_get_contents("catalog.xml"));

	?>
	</table>
	</body>
</html>