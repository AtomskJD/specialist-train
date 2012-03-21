<?php 
$a = array('a', 'b', 'c');
$b = array(1, 2, 3);

foreach ($a as $key => &$value) {
    # code...
    $value = $value;
}
var_dump($value);
// $value содержит указатель на последнее значени в первои массиве
// если не заансетить перетечет часть значений из другого массива
// unset($value);
foreach ($b as $key => $value) {
    # code...
}
var_dump($a); var_dump($b);
?>