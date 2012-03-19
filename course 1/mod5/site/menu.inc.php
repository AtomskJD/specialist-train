<?php
/*
ЗАДАНИЕ 1
- Создайте ассоциативный массив $menu
- Заполните массив следующими данными:
	"Номе"=>"index.php", "Page1"=>"page1.php", "Page2"=>"page2.php", "Page3"=>"page3.php", "Table"=>"table.php"
*/
$menu = array(
			'HOME'=>"index.php",
			'page1'=> "page1.php",
			'page2'=> "page2.php",
			'page3'=> "page3.php",
			'table'=>"table.php"
			);
?>	
<table width="100%">
	<tr>
		<td>
			<p>Меню</p>
			<?php
			/*
			ЗАДАНИЕ 2
			- Отрисуйте меню вызвая функцию getMenu()
			*/
			
			getMenu($menu, true);
			?>
		</td>
	</tr>
</table>