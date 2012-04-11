<?php 
foreach (get_class_methods(new ArrayObject()) as $key => $value) {
	echo $key ."->". $value ."<br>";
}
 ?>