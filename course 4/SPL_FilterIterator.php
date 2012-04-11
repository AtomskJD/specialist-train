<?php 
$animals = array('koala', 'kangaroo', 'wombat', 'wallaby', 'emu', 'NZ'=>'kiwi', 'kookaburra', 'platypus');
class CullingIterator extends FilterIterator{
    public function accept()
    {
        return is_numeric($this->key());
    }
}// end class
$cull = new CullingIterator(new ArrayIterator($animals));

foreach ($cull as $key => $value) {
    echo $key .' => '. $value ."<br>";
}
 ?>