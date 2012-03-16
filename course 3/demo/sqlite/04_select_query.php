<?php
	////////// PROCEDURE /////////////////////
	// Отктрытие базы SQLite
	$db = sqlite_open("test.db");	
	$sql = "SELECT * FROM users";
	$result = sqlite_query($sql, $db)
	
	while ($row = sqlite_fetch_array($result, SQLITE_NUM)) {
		echo "<p>id=", $row[0];	
		echo "<p>username=", $row[1];	
		echo "<p>login=", $row[2];	
		echo "<p>password=", $row[3];	
	}
	sqlite_close($db);
	////////// OOP /////////////////////
	$db = new SQLiteDatabase("test1.db");	
	$sql = "SELECT  FROM users";
	$result = $db->query($sql);
	
	while ($row = $result->fetch(SQLITE_NUM)) {
		echo "<p>id=", $row[0];	
		echo "<p>username=", $row[1];	
		echo "<p>login=", $row[2];	
		echo "<p>password=", $row[3];	
	}
	unset($db);
?>