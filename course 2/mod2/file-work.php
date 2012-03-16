<?php
	// $res = fopen('data.txt', 'a+') or die('Error');
	// echo fread($res, filesize('data.txt'));
	// echo fgets($res);
	// fputs($res, "\nnew\tline");
	// fclose($res);
	file_put_contents("data.txt", "\n".date("H:i:s"), FILE_APPEND);
	print_r(file('data.txt'));
	
?>