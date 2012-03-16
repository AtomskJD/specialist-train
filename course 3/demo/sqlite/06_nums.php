<?php
	////////// PROCEDURE /////////////////////
	// Отктрытие базы SQLite
	$db = sqlite_open("test.db");	
	
	$sql = "SELECT * FROM users";
	$result = sqlite_array_query($sql, $db);
	
	foreach ($result as $row) {
		echo "<p>id=", $row[0];	
		echo "<p>username=", $row[1];	
		echo "<p>login=", $row[2];	
		echo "<p>password=", $row[3];	
	}
	echo "<p>Всего записей - ", sqlite_num_rows($result);
	echo "<p>Всего полей - ", sqlite_num_fields($result);
	sqlite_close($db);
	////////// OOP /////////////////////
	$db = new SQLiteDatabase("test1.db");	
	$sql = "SELECT * FROM users";
	$result = $db->arrayQuery($sql);
	
	foreach ($result as $row) {
		echo "<p>id=", $row[0];	
		echo "<p>username=", $row[1];	
		echo "<p>login=", $row[2];	
		echo "<p>password=", $row[3];	
	}
	echo "<p>Всего записей - ", $result->numRows();
	echo "<p>Всего полей - ", $result->numFields();	
	unset($db);
?>