<?php
	try {
		$db = new SQLiteDatabase("test1.db");	
		$sql = "SELECT  FROM users";
		$result = $db->query($sql);
		if (!$result) 
		throw new SQLiteException(sqlite_error_string($db->lastError()));
		while ($row = $result->fetch(SQLITE_NUM)) {
			echo "<p>id=", $row[0];	
			echo "<p>username=", $row[1];	
			echo "<p>login=", $row[2];	
			echo "<p>password=", $row[3];	
		}
		unset($db);
	} catch (SQLiteException $e) {
		echo "<p>Произошла ошибка SQLite: ", $e->getMessage();
	}
?>









