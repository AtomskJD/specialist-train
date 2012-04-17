<?php
class One{
    function sayHelloOne()
    {
        return "Hello from ONE";
    }
}
class Two{
    function sayHelloTwo()
    {
        return "Hello from TWO";
    }
}
class Three{}

class Deligator{
    public $register = array();
    function addObject($Obj)
    {
        $this->register[] = $Obj;
    }
    function __call($name, $arg)
    {
        foreach ($this->register as $key) {
            $rObj = new ReflectionObject($key);
            if ($rObj->hasMethod($name)){
                echo $key->$name();
            }
        }
    }

}
$obj = new Deligator();
/*$obj->addObject(new One());
$obj->addObject(new Two());
$obj->addObject(new Three());
*/$obj->sayHelloTwo();
?>