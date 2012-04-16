<?php
interface IPlugin{
    // function getMenuItems();
    // function getArticles();
    // function getSideBars();
}
class VasinPlugin implements IPlugin{
    function getName()
    {
        return 'Васин Плагин';
    }
    function getMenuItems()
    {
        return array('desctiption'=>'Плагин Васи', 'link'=>'some link');
    }
    function getSideBars()
    {
        return array('one'=>'ONE', 'two'=>'TWO');
    }
}
class PetinPlugin implements IPlugin{
    function getName()
    {
        return 'Петин Плагин';
    }
    function getMenuItems()
    {
        return array('description'=>'Плагин Пети', 'link'=>'some other link');
    }
    function getArticles()
    {
        return array('title'=>'Super post', 'text'=>'Blah... blah... blah', 'link'=>'#');

    }
}

?>