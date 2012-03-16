<?php
	//PROC
	$db = sqlite_open("test.db");
	sqlite_close($db);
	//OOP
	$db1 = new SQLiteDatabase("test1.db");
	unset($db1);
?>