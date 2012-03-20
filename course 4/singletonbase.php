<?php
class Config{
	const CONFIG_NAME = 'conf.ini';
	private $_settings;
	private $_updated = false;
	static private $_instance = null;
    //возможность вызова только из getInstance
    private function __construct(){
    	if(file_exists(self::CONFIG_NAME)){
      		$this->_settings = parse_ini_file(self::CONFIG_NAME);
    	}
    }
    function __destruct(){
		if(!$this->_updated) return;

		$fp = fopen(self::CONFIG_NAME, "w");
    	
    	if(!$fp) return;
    	
    	foreach($this->_settings as $key=>$value){
			fputs($fp, "$key = \"$value\"\n");
    	}
        fclose($fp);
    }
    private function __clone(){} // запрещаем клонирование
    static function getInstance(){
        if(self::$_instance == null){
            self::$_instance = new Config();
        }
        return self::$_instance;
    }
    public function get($name){
    	if(isset($this->_settings[$name])){
    		return $this->_settings[$name];
    	}else{
    		return null;
    	}
    }
    public function set($name, $value){
    	if(!isset($this->_settings[$name]) or
    	 	($this->_settings[$name] != $value)){
    		$this->_settings[$name] = $value;
    		$this->_updated = true;
    	}
    }
}

$config = Config::getInstance();
echo $config->get("firstname");
$config->set("username","root");
$config->set("firstname","John");
$config->set("lastname","Smith");
echo $config->get("firstname");
?>