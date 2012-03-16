<?php
//ini_get('');
//ini_set('',param);
$param = ini_get('post_max_size');
$num = (integer)$param;
$char = $param{strlen($param)-1};
switch($char){
	case 'K': echo "$num Kylobytes is ".$num*1024 . ' bytes';break;
	case 'M': echo "$num Megabytes is ".$num*1024*1024 . ' bytes';break;
	case 'G': echo "$num Gigabytes is ".$num*1024*1024*1024 . ' bytes';break;
	default: echo "$num bytes";
}
?>