<?php 
class Logger{
    const LOG_NAME = 'log.txt';
    private $_hi;
    static private $_instance = null;
    private function __construct()
    {
        $this->_hi = "\r\n";
    }
    private function __clone(){}

    static function getInstance()
    {
        if(self::$_instance == null)
            self::$_instance = new Logger();

        return self::$_instance;
    }
    public function getLog($str)
    {
        file_put_contents(self::LOG_NAME, $str.$this->_hi, FILE_APPEND);
    }
}
$var = Logger::getInstance();
$var->getLog('Пишем пишем '. time());
 ?>