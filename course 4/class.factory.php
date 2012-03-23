<?php 
abstract class FileExt{
    protected $_ext = null;
    public function getExt()
    {
        return $this->_ext;
    }
}
class ExtJPG extends FileExt{
    function __construct()
    {
        $this->_ext = 'jpg';
    }
}
class ExtGIF extends FileExt{
    function __construct()
    {
        $htis->_ext = 'gif';
    }
}
class ExtPNG extends FileExt{
    function __construct()
    {
        $this->_ext = 'png';
    }
}
class ExtUdef extends FileExt{
    function __construct()
    {
        $this->_ext = 'undefaund';
    }
}

class ExtFactory {
    function getFactory($name)
    {
        if (strpos($name, ".jpg") )
            return new ExtJPG();
        elseif (strpos($name, ".gif") ) 
            return new ExtGIF();
        elseif (strpos($name, ".png") )
            return new ExtPNG();
        else return new ExtUdef();
    }
}

$list = array('image.jpg', 'image.jpg', 'image.jpg', "set.ini", "my.txt",
 "briliant.png");
$ExtFactory = new ExtFactory($list);
foreach ($list as $name) {
    echo $name ." \tрасширение ". $ExtFactory->getFactory($name)->getExt() ."<br>\r\n";
}
?>