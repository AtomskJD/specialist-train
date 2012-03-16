<?php
	////////// PROCEDURE /////////////////////
	// Отктрытие базы SQLite
	$db = sqlite_open("test.db");	
	$username = sqlite_escape_string("O'Brien");
	$login = sqlite_escape_string("root");
	$password = sqlite_escape_string("888");	
	$sql = "INSERT INTO users(
				 username,
				 login,
				 password
		       ) VALUES (
				'$username',
				'$login',
				'$password'			
			)";
	sqlite_query($sql, $db);
	echo "<p>Запись добавлена!";
	sqlite_close($db);
	////////// OOP /////////////////////
	$db = new SQLiteDatabase("test1.db");	
	$username = sqlite_escape_string("O'Brien");
	$login = sqlite_escape_string("root");
	$password = sqlite_escape_string("888");	
	$sql = "INSERT INTO users(
				 username,
				 login,
				 password
		       ) VALUES (
				'$username',
				'$login',
				'$password'			
			)";
	$db->query($sql);
	echo "<p>Запись добавлена!";
	unset($db);
?>