<?php /* Smarty version Smarty-3.1.8, created on 2012-03-13 16:13:59
         compiled from "C:\SERVER\WebPages\Smarty-test\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164194f5f1d7a1e3d96-52664892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '219f6a92ad6e2d64187fb2a1e28b36043bc04260' => 
    array (
      0 => 'C:\\SERVER\\WebPages\\Smarty-test\\templates\\index.tpl',
      1 => 1331633637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164194f5f1d7a1e3d96-52664892',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5f1d7a3271b9_85846248',
  'variables' => 
  array (
    'app_name' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5f1d7a3271b9_85846248')) {function content_4f5f1d7a3271b9_85846248($_smarty_tpl) {?>
<h1><?php echo ($_smarty_tpl->tpl_vars['app_name']->value);?>
</h1>
<p>Привет, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
! Добро пожаловать в Smarty!</p>
<?php if ($_smarty_tpl->tpl_vars['name']->value=="Atomsk"){?>
<p>да ты крут</p>
<?php }?><?php }} ?>