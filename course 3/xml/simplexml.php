<?php
	/*
	ЗАДАНИЕ 1
	- Создайте объект и загрузите в него документ
	*/
$simpleXML = simplexml_load_file("catalog.xml");
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
// foreach($simpleXML->book as $var){
	// echo "<tr>";
	// foreach($var as $var1){
		// echo "\t<td>".$var1."</td>\n";
	// }
	// echo "</tr>\n";
// }
foreach($simpleXML->book as $item){
	echo <<<LABEL
	<tr>
	<td>$item->author</td>
	<td>$item->title</td>
	<td>$item->pubyear</td>
	<td>$item->price</td>
	</tr>
LABEL;
}
var_dump($simpleXML->book);
	/*
	ЗАДАНИЕ 2
	- Заполните таблицу необходимыми данными
	*/
?>
	</table>
</body>
</html>