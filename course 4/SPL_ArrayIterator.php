<?php 
$array = array(1=>'One', 2=>'Two', 3=>'Three', 4=>'Four', 5=>'Five');
$ai = new ArrayIterator($array);
var_dump($ai);
echo $ai[1];
 ?>
<br>
<hr>

 <?php

    function addCaps( Iterator $it )
    {
        echo ucfirst( $it->current() ) . '<br />';
        return true;
    }

    /*** an array of aussies ***/
    $array = array( 'dingo', 'wombat', 'wallaby' );

    try
    {
        $it = new ArrayIterator( $array );
        iterator_apply( $it, 'addCaps', array($it) );
    }
    catch(Exception $e)
    {
        /*** echo the error message ***/
        echo $e->getMessage();
    }
?>
<br>
<hr>
<p>while</p>
<?php 
$array = array('koala', 'kangaroo', 'wombat', 'wallaby', 'emu', 'kiwi', 'kookaburra', 'platypus');
$object = new ArrayIterator($array);
$object->rewind();
while($object->valid()){
    echo $object->key() .'->>'. $object->current() .'<br>';
    $object->next();
}
 ?>
<br><hr>
<p>foreach</p>
<?php 
$object = new ArrayIterator($array);
foreach ($object as $key => $value) {
    echo $key .'->>>'. $value .'<br>';
}
 ?>

 <br><hr>
 <p>offSetGet offSetUnset - лучше не совмещать с выводом</p>
 <?php
$array = array('koala', 'kangaroo', 'wombat', 'wallaby', 'emu', 'kiwi', 'kookaburra', 'platypus');
try {
$object = new ArrayIterator($array);
if ($object->offSetExists(2)){
    $object->offSetSet(2, 'Goanna');
}
foreach($object as $key=>$value){
    if ($object->offSetGet($key) === 'kiwi'){
        $object->offSetUnset($key);
        echo "указатель уже переместился в 0 позицию и итерирование происходит сначала, но вывод у нас все еще 5";
    }
    echo "<li>". $key ." - ". $value ."</li>";
    printf("<ul><li>%d - %d</li></ul>", $object->key(), $object->count());
}
} catch(Exception $e){
    echo $e->getMessage();
}
 ?>