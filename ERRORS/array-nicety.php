<?php 
$a = array('a'=>NULL, 'b'=>2);
var_dump(isset($a['a']));
// false

$array = array(1, '25'=>2, 'b'=>3);
$array[] = 'var';
print_r($array);echo '<br>';
$array = array('c'=>1, 'a'=>2, 'b'=>3);
$array[] = 'var';
print_r($array);echo '<br>';
// именованые массивы остаются именоваными

$a = array(3 => 1, 12, 13);
$b = array(0=>15, 12, 'a' => 14, 32);
print_r($a+$b);echo '<br>';
// сложение массивов к массиву 1 добавляются отсутствующие индексы
$a = array(1, 12, 13);
$b = array(12, 'a' => 14, 32);
print_r($a+$b);echo '<br>';
?>