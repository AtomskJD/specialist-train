<?php
class MyIterator implements Iterator
{
    private $var = array();

    public function __construct($array)
    {
        if (is_array($array)) {
            $this->var = $array;
        }
    }

    public function rewind()
    {
        echo "перемотка в начало\n";
        reset($this->var);
    }
  
    public function current()
    {
        $var = current($this->var);
        echo "текущий: $var\n";
        return $var;
    }
  
    public function key() 
    {
        $var = key($this->var);
        echo "ключ: $var\n";
        return $var;
    }
  
    public function next() 
    {
        $var = next($this->var);
        echo "следующий: $var\n";
        return $var;
    }
  
    public function valid()
    {
        $key = key($this->var);
        $var = ($key !== NULL && $key !== FALSE);
        echo "верный: $var\n";
        return $var;
    }

}

$values = array("один", "Два", "Три");
$it = new MyIterator($values);

foreach ($it as $a => $b) {
    print "$a: $b\n";
}
?>