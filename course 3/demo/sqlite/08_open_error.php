<?php
	// Отктрытие базы SQLite
	$db = @sqlite_open("test.db", 0666, $sqlite_error) or die($sqlite_error);	
	
	//...Что-то делаем...
	
	sqlite_close($db);
?>