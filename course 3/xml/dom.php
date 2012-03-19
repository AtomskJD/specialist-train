<?php
$dom = new DomDocument();
$dom->load("catalog.xml");//XML file
// $dom->loadXML($str);//XML string
// $dom->loadHTMLFile($file);//HTML file
// $dom->loadHTML($htmlStr);//HTML string

$root = $dom->documentElement;
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

$children = $root->childNodes;

foreach($children as $book){
	if ($book->nodeType == 1){
		echo "<tr>";
		foreach($book->childNodes as $item){
			if ($item->nodeType == 1)
			echo "<td>";
				echo $item->textContent;
			echo "</td>";
		}
		echo "</tr>";
	}
}
$some = $dom->getElementsByTagName("title");
echo $some->item(5)->textContent;
	/*
	ЗАДАНИЕ 2
	- Заполните таблицу необходимыми данными
	*/
?>
	</table>
</body>
</html>





