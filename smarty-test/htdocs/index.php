<?php 
require('smarty-test/setup.php');

$smarty = new Smarty_SmartyTest();


$smarty->assign("name", "Atomsk");

//$smarty->debugging = true;

$smarty->display('index.tpl');
?>