<?php
header("Content-type: text/html; charset=utf-8");
define("USERS_LOG", "users.xml");
function clear($data){
	return stripslashes(trim(strip_tags($data)));
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = clear($_POST["name"]);
	$email = clear($_POST["email"]);
	$msg = clear($_POST["msg"]);
	$ip = $_SERVER["REMOTE_ADDR"];
	$dt = time();

	$DOMDocument = new DomDocument("1.0", "utf-8");	
	// Красота
	$DOMDocument->formatOutput = true;
	$DOMDocument->preserveWhiteSpace = false;
	if (!file_exists(USERS_LOG)){
		$root = $DOMDocument->createElement("users");
		$DOMDocument->appendChild($root);
	}else{
		$DOMDocument->load(USERS_LOG);
		$root = $DOMDocument->documentElement;
		
	}
	$eUser = $DOMDocument->createElement("USER");
	$eName = $DOMDocument->createElement("name", $name);
	$eEmail = $DOMDocument->createElement("email", $email);
	$eMsg = $DOMDocument->createElement("msg", $msg);
	$eIP = $DOMDocument->createElement("ip", $ip);
	$eDT = $DOMDocument->createElement("dt", $dt);
	
	$eUser->appendChild($eName);
	$eUser->appendChild($eEmail);
	$eUser->appendChild($eMsg);
	$eUser->appendChild($eIP);
	$eUser->appendChild($eDT);
	
	$root->appendChild($eUser);
	
	$DOMDocument->save(USERS_LOG);
	
	
	header("location:gbook.php");
	exit;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Гостевая книга</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>Гостевая книга</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

Ваше имя:<br />
<input type="text" name="name" /><br />
Ваш E-mail:<br />
<input type="text" name="email" /><br />
Сообщение:<br />
<textarea name="msg" cols="50" rows="5"></textarea><br />
<br />
<input type="submit" value="Добавить!" />

</form>

<?php
if (file_exists(USERS_LOG) ){
$simpleXML = simplexml_load_file(USERS_LOG);
$users = (array)$simpleXML;// подводный камень вложенный массив
if (is_array($users["USER"]) )
	$users = array_reverse($users["USER"]);
else 
	$users = (array)$users["USER"];// если одна запись
// var_dump($users);
foreach($users as $user){
$dt = date("d-m-Y H:i:s", $user->dt*1);
$msg = nl2br($user->msg);
echo <<<LABEL
<hr>
	<p>
		<a href="mailto:{$user->email}">{$user->name}</a> from [{$user->ip}] @ {$dt}
		<br> {$msg}
	</p>
LABEL;
}
} 
/*
ЗАДАНИЕ 4
- Создайте объект SimpleXML и загрузите в него XML-документ
- Выведите в браузер все сообщения, а также информацию
  об авторе каждого сообщения в произвольной форме
  в обратном порядке
*/
?>

</body>
</html>