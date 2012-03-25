<?php  
class Db{
	private $_db;
	function __construct()
	{
		$this->_db = new SQLiteDataBase("users.db");
	}
	function userExists($user='default')
	{
		$var = $this->_db->arrayQuery("SELECT * FROM users WHERE name like '{$user}'", SQLITE_ASSOC);
		return !empty($var[0]);
	}
	function getUserInn($user)
	{
		if ($this->userExists($user)){
			$var = $this->_db->arrayQuery("SELECT inn FROM users WHERE name like '{$user}'", SQLITE_ASSOC);
			return current(current($var));
		}else return "empty";
	}
	function setUserInn($user, $inn)
	{
		if (!$this->userExists($user))
		$this->_db->queryExec("INSERT INTO users VALUES('{$user}', '{$inn}')");
		else return "error";
	}
	function removeUser($user)
	{
		if ($this->userExists($user))
		$this->_db->queryExec("DELETE FROM users WHERE name LIKE '{$user}'");
		else return "error";
	}
}
class UserToInn Implements ArrayAccess{
	private $_db;
	function __construct()
	{
		$this->_db = new Db();
	}
	function offsetExists($item)
	{
		return $this->_db->userExists($item);
	}
	function offsetGet($item)
	{
		return $this->_db->getUserInn($item);
	}
	function offsetSet($item, $value)
	{
		$this->_db->setUserInn($item, $value);
	}
	function offsetUnset($item)
	{
		$this->_db->removeUser($item);
	}
}
$obj = new UserToInn();
echo $obj['mike'] ."<br>";
//$obj['silvio'] = 12345678;
echo $obj['silvio']."<br";
unset ($obj['silvio']);
echo $obj['silvio']."<br";
 ?>