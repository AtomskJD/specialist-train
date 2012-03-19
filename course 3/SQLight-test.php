<?php
	////PROC////
	$db = sqlite_open('test.db');
		sqlite_close($db);
		sqlite_query($db, "INSERT...");
	////OOP////
	$db1 = new SQLiteDatabase("lest1.db");
	$db1->query("INSERT...");
	unset($db1);
?>