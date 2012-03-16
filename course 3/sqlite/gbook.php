<?php
# Подключения и настройки
// header("content-type: text/xml; charset: utf-8");
require "GbookDB.class.php";
$gbook = new GBookDB();
$errMsg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	include "savepost.inc.php";
}
if (isset($_GET['del']) ){
	include "deletepost.inc.php";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Гостевая книга</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Гостевая книга</h1>
<?php
// Выводим эррор если есть
if ($errMsg){echo "Error:". $errMsg;}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

Ваше имя:<br />
<input type="text" name="name" /><br />
Ваш e-mail:<br />
<input type="text" name="email" /><br />
Сообщение:<br />
<textarea name="msg" cols="50" rows="5"></textarea><br />
<br />
<input type="submit" value="Добавить!" />

</form>

<?php
include "getall.inc.php";
?>

</body>
</html>