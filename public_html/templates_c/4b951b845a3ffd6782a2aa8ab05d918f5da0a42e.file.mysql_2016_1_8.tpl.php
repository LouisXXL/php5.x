<?php /* Smarty version Smarty-3.0.5, created on 2016-01-08 10:53:56
         compiled from "./templates/mysql_2016_1_8.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1854255080568f24c43e5217-97723392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b951b845a3ffd6782a2aa8ab05d918f5da0a42e' => 
    array (
      0 => './templates/mysql_2016_1_8.tpl',
      1 => 1452221566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1854255080568f24c43e5217-97723392',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title></title>
</head>
<body>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
	<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
<br/>
<?php }} ?>
</body>
</html>