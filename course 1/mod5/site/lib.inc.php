<?php
function getTable($cols = 10, $rows = 10, $color='grey'){
	static $cnt=0;
	$cnt++;
	echo "Таблица номер $cnt";
	echo "<table border='1'>\n";
	for($r=1;$r<=$rows;$r++){
		echo "<tr>\n";
		for($c=1; $c<=$cols; $c++){
			if($r==1 || $c==1){echo "\t\t<th style='background:$color'>".$r*$c."</th>\n";}
			else{echo "\t\t<td>".$r*$c."</td>\n";}
		}
		echo "</tr>";
	}
	echo "</table>";
}
function getMenu($menu, $vertical=true){
$style='';
	if(!$vertical){$style = " style='display:inline; margin-right:15px'";}
		echo "<ul style='list-style-type:none'>";
		foreach($menu as $link=>$href){
			echo "<li$style><a href='$href'>$link</a></li>";
		}
		echo "</ul>";
}
?>