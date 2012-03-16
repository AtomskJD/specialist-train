<?php
// Подключаем Интерфейс
// только для тестирования позже убрать
	function __autoload($name){
		include $name.".class.php";
	}
	
//Основной наследник интерфейса
class GBookDB implements IGbookDB{
	const DB_NAME = "gbook.db";
	protected $_db;
	protected $_sqlCreate = "CREATE TABLE msgs(
							id INTEGER PRIMARY KEY,
							name TEXT,
							email TEXT,
							msg TEXT,
							datetime INTEGER,
							ip TEXT
						)";
	
	function __construct(){
		//создаём базу и таблицы если базы небыло
		if (!file_exists(self::DB_NAME) ){
			$this->_db = new SQLiteDatabase(self::DB_NAME);
			$this->_db->query($this->_sqlCreate);
		}
		//берем идентификатор если база есть
		else 
			$this->_db = new SQLiteDatabase(self::DB_NAME);
			
	}
	function __destruct(){
		unset($this->_db);
	}
	
	//TODO: перегрузки
	function savePost($name, $email, $msg){
		$datetime = time();
		$ip = $_SERVER['REMOTE_ADDR'];
		
		$sqlSave = "INSERT INTO msgs(name, email, msg, datetime, ip) VALUES ('$name', '$email', '$msg', $datetime, '$ip')";
		try{
			$res = $this->_db->query($sqlSave);
			if (!$res)
				throw new SQLiteException(sqlite_error_string($this->_db->lastError()));
				return true;
		}catch(SQLiteException $err){
			return false;
		}
		//mktime() $_SERVER['REMOTE_ADDR']
	}
	function getAll(){
		$sqlSelect = "SELECT * FROM msgs";
		return $this->_db->arrayQuery($sqlSelect, SQLITE_ASSOC);
	}
	function deletePost($id){
		$sqlDelete = "DELETE FROM msgs WHERE id = $id";
		$this->_db->query($sqlDelete);
		return 1;
	}

	function filter($var){
		$var = stripslashes($var);
		$var = trim($var);
		$var = strip_tags($var);
		$var = sqlite_escape_string($var);
		return $var;
	}
}


/*
ЗАДАНИЕ 5
- Опишите метод deletePost. Смотрите описание метода в интерфейсе IGbookDB
- Сформируйте строку запроса на удаление новой записи
- Удалите запись из таблицы msgs	
*/

/*
ЗАДАНИЕ 6 (Если останется время)
- Опишите в конструкторе, а также в методах getAll, savePost и deletePost блок try-catch
- Создайте исключения на ошибки при выполнении SQL-запросов	
*/
?>