<?php 
$db = null;
try {
    $res = mysql_query('SELECT * FROM table', $db);
} catch (Exception $e) {
    throw new Exception('Some error');
}
//fatal errors не ловятся try catch
?>