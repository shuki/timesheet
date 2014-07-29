<?php /* Smarty version Smarty-3.0.8, created on 2014-07-29 14:04:28
         compiled from "tpl/content_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189584043253cdf34895a515-56987964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05e1182f1fcc85de93c6214929e4d7184ac5cb74' => 
    array (
      0 => 'tpl/content_table.tpl',
      1 => 1406629914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189584043253cdf34895a515-56987964',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table class="data">
<tr style="border: solid 1px black; border-collapse: collapse; padding: 4px;">

<?php $_smarty_tpl->tpl_vars["column_number"] = new Smarty_variable("1", null, null);?>
<?php $_smarty_tpl->tpl_vars["fulluri"] = new Smarty_variable($_SERVER['REQUEST_URI'], null, null);?>
<?php if (strpos($_smarty_tpl->getVariable('fulluri')->value,'orderby')){?>
	<?php $_smarty_tpl->tpl_vars["fulluri"] = new Smarty_variable(substr($_smarty_tpl->getVariable('fulluri')->value,0,((strpos($_smarty_tpl->getVariable('fulluri')->value,'orderby'))-1)), null, null);?>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value[0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
	<?php if ($_smarty_tpl->getVariable('report')->value->breakOnColumn&&$_smarty_tpl->getVariable('column_number')->value==$_smarty_tpl->getVariable('report')->value->breakOnColumn){?>
		<?php $_smarty_tpl->tpl_vars["breakOnColumnName"] = new Smarty_variable($_smarty_tpl->tpl_vars['k']->value, null, null);?>
	<?php }?>
	<?php $_smarty_tpl->tpl_vars["column_number"] = new Smarty_variable($_smarty_tpl->getVariable('column_number')->value+1, null, null);?>
	
	<th style="border: solid 1px black; border-collapse: collapse; padding: 4px; background-color: #dddddd;"><!--a href="<?php echo $_smarty_tpl->getVariable('fulluri')->value;?>
&orderby=order by <?php echo $_smarty_tpl->getVariable('column_number')->value-1;?>
">^</a-->&nbsp; <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 &nbsp;<!--a href="<?php echo $_smarty_tpl->getVariable('fulluri')->value;?>
&orderby=order by <?php echo $_smarty_tpl->getVariable('column_number')->value-1;?>
 desc">v</a--></th> 
<?php }} else { ?>
	<th style="border: solid 1px black; border-collapse: collapse; padding: 4px; background-color: #dddddd;">No Data</th>
<?php } ?>
</tr>

<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
<?php if (isset($_smarty_tpl->getVariable('breakOnColumnName',null,true,false)->value)&&$_smarty_tpl->getVariable('breakOnColumnName')->value==$_smarty_tpl->tpl_vars['k']->value){?>
	<?php if (!isset($_smarty_tpl->getVariable('breakOnValue',null,true,false)->value)){?>
		<?php $_smarty_tpl->tpl_vars["breakOnValue"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, null);?>
	<?php }else{ ?>
		<?php if ($_smarty_tpl->getVariable('breakOnValue')->value!=$_smarty_tpl->tpl_vars['item']->value){?>
			<?php $_smarty_tpl->tpl_vars["breakOnValue"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, null);?>	
			<tr><td colspan="<?php echo $_smarty_tpl->getVariable('column_number')->value;?>
">------------------------------------------------------------------------------------------------------------------------------</td></tr>
		<?php }?>	
	<?php }?>
<?php }?>
<?php }} ?>

<tr>
<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(0, null, null);?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable($_smarty_tpl->getVariable('i')->value+1, null, null);?>
<?php if ($_smarty_tpl->getVariable('report')->value->actionSelectionColumn==$_smarty_tpl->getVariable('i')->value){?>
	<?php if ($_smarty_tpl->tpl_vars['item']->value){?>
		<td><input type="checkbox" name="selections" value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" /></td>
	<?php }else{ ?>
		<td></td>
	<?php }?>
<?php }else{ ?>
	<td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
<?php }?>
<?php }} ?>
</tr>	
<?php }} ?>


<?php if (isset($_smarty_tpl->getVariable('aggregate',null,true,false)->value)){?>
	<tr>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aggregate')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<td class="aggregate"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
		<?php }} ?>
		<?php }} ?>
	</tr>
<?php }?>

</table>
