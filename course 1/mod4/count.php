<?php
function myCount($item, $mode=0){
	if(is_null($item)) return 0;
	elseif(!is_array($item)) return 1;
	
	$cnt=0;
		foreach($item as $v){
			if($mode==1 && is_array($v))
			$cnt += myCount($v, 1);
			$cnt++;
		}
	return $cnt;
}

$arr = array('qwe','asd','zxc',1,3,14);
$arr1 = array('qwe','asd','zxc',1,3,14, $arr);
echo myCount($arr1, 1);
?>