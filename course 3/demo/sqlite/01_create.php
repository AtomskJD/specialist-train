<?php
	////////// PROCEDURE /////////////////////
	// Создание базы SQLite
	$db = sqlite_open("test.db");
	
	sqlite_close($db);
	////////// OOP /////////////////////
	$db = new SQLiteDatabase("test1.db");
	
	unset($db);
?>