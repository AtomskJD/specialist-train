<?php
//iterator
class MyIterator implements Iterator{
    private $_num1, $_num2;
    private $_pos = 0;
    function __construct($num1, $num2)
    {
        $this->_num1 = $num1;
        $this->_num2 = $num2;
    }
//  Возвращает текущий элемент
    function current()
    {
        return pow($this->_pos, 2);
    }
//  Возвращает ключ текущего элемента
    function key()
    {
        return $this->_pos;
    }
//  Возвращает итератор на первый элемент
    function rewind()
    {
        return $this->_pos = $this->_num1;
    }
//  Переходит к следующему элементу
    function next()
    {
        $this->_pos++;
    }
//  Проверка корректности позиции
    function valid()
    {
        return $this->_pos <= $this->_num2;
    }

}
$it = new MyIterator(2, 5);
foreach ($it as $key => $value) {
    echo "$key в квадрате = $value<br>";
}
?>