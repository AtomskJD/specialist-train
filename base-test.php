<?php
	$conn = mysql_connect("localhost", "root", "pass@word1");
	mysql_select_db("web", $conn);
	mysql_query("SET NAMES 'cp1251'");
	$sql = "SELECT * FROM Teachers";
	$query = mysql_query($sql);
	mysql_close($conn);
	echo mysql_result($query, 1, "name");
	echo "<pre>";
	while($row = mysql_fetch_assoc($query)){
		echo $row["name"]."<br>";
	}
	echo "<pre>";
	echo mysql_field_name($query, 1);
?>