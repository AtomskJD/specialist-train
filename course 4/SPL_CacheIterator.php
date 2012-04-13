<?php 
$array = array('koala', 'kangaroo', 'wombat', 'wallaby', 'emu', 'kiwi', 'kookaburra', 'platypus');

// выведем данные в формате CSV
// По старому
/*$c = 1;
$counter = count($array);
foreach ($array as $value) {
    echo $value;
    if ($c<$counter){
        echo ',';
        $c++;
    }
}*/
// При помощи итератора
/*try {
    $object = new CachingIterator(new ArrayIterator($array));
    foreach ($object as $value) {
        echo $value;
        if ($object->hasNext()){
            echo ',';
        }
    }
} catch (Exception $e) {
    echo $e->getMessge();
}*/
// Перегрузкой класса

class AddComaSep extends CachingIterator{
    // Модификация внутреннего итератора изнутри
    function __construct($it)
    {
        parent::__construct($it);
        parent::getInnerIterator()->offsetUnset(5);
    }
    function current()
    {
        if(parent::hasNext()){
            return parent::current().', ';
        } else {
            return parent::current().'!';
        }
    }
} //end of class

try {
    $object = new AddComaSep(new ArrayIterator($array));
    // модификация внутреннего итератора снаружи
    //$object->getInnerIterator()->offsetUnset(5);
    foreach ($object as $value) {
        echo $value;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>