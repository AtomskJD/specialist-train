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
<?php 
$object = new ArrayIterator($array);
foreach ($object as $key => $value) {
    echo $key .'->>>'. $value .'<br>';
}
 ?>