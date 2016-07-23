<?php /* Smarty version Smarty-3.0.5, created on 2016-01-08 11:09:37
         compiled from "./templates/mysql_2016_1_8_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173576354568f28713c9c46-91193595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '123f8410180e7598f5571255db974d9b63a87f89' => 
    array (
      0 => './templates/mysql_2016_1_8_table.tpl',
      1 => 1452222471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173576354568f28713c9c46-91193595',
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
<table border="1">
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['row']->value['sno'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['row']->value['chi'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['row']->value['eng'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['row']->value['math'];?>
</td>
</tr>
<?php }} ?>
</table>
</body>
</html>