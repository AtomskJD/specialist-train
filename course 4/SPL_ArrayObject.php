<?php 
$array = array('test'=>'thi is test','koala', 'kangaroo', 'wombat', 'wallaby', 'emu', 'kiwi', 'kookaburra', 'platypus');
$arrayObj = new ArrayObject($array, ArrayObject::ARRAY_AS_PROPS);
$arrayObj->append('dingo');
// $arrayObj->natcasesort();
// $arrayObj->asort();
$arrayObj->offsetUnset(5);
echo $arrayObj->test;
var_dump($arrayObj);
var_dump( $arrayObj->getIterator());
for($iterator = $arrayObj->getIterator(); 
    $iterator->valid();
    $iterator->next()){
        echo $iterator->key() .' => '. $iterator->current() .'<br>';
}
 ?>