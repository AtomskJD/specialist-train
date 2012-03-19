<?php 
class Configurer{
    const FILE_NAME = "conf.ini";
    private $_content;
    static private $_instance = null;

    private function __construct()
    {
        if (file_exists(self::FILE_NAME) ){
            $this->_content = parse_ini_file(self::FILE_NAME);
        }else echo "FILE_NOT_FOUND";     
    }
    static function getInstance()
    {
        if(self::$_instance == null){
            self::$_instance = new Configurer();
        }
        return self::$_instance;
    }
    private function __clone(){}
    public function __destruct()
    {   
        $data = "";
        foreach ($this->_content as $key => $value) {
            $data .= "$key = $value \r\n";
        }
        file_put_contents(self::FILE_NAME, "HELLO");
    }
    
    public function getProp($name)
    {
        if ($this->_content && array_key_exists($name, $this->_content))
        return $this->_content[$name];
    }
    public function setProp($name, $prop)
    {
        if ($this->_content)
        $this->_content[$name] = $prop;

    }
}
Configurer::getInstance()->setProp("sample2", "Two");
 ?>