<?php /* Smarty version Smarty-3.0.8, created on 2014-07-29 14:04:28
         compiled from "tpl/report.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99014709553cdf34881dea9-32547830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd36fdf7cdb68ea5be54058e4096eb17d7cad2ebb' => 
    array (
      0 => 'tpl/report.tpl',
      1 => 1406629914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99014709553cdf34881dea9-32547830',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include 'smarty/libs/plugins/function.html_options.php';
?>﻿
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8" />
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE"/>
<META HTTP-EQUIV="EXPIRES" CONTENT="-1"/>
<link rel="shortcut icon" href="../../jxset/jset/img/smile.gif" type="image/x-icon" />
<title><?php if ($_smarty_tpl->getVariable('error')->value){?>Error in report<?php }else{ ?><?php echo $_smarty_tpl->getVariable('title')->value;?>
<?php }?></title>
<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
<script src="../../jxset/jset/jquery/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="js/reporting.js" type="text/javascript"></script>
</head>

<body dir="rtl">
<?php if ($_smarty_tpl->getVariable('error')->value){?>
<div dir="ltr">
<h3 style="color:red">Error in report</h3>
<?php echo $_smarty_tpl->getVariable('error')->value;?>
<br />
<?php echo $_smarty_tpl->getVariable('error_msg')->value;?>
<br />
<?php echo $_smarty_tpl->getVariable('error_dump')->value;?>

</div>
<?php }else{ ?>
<h1><?php echo $_smarty_tpl->getVariable('description')->value;?>
</h1>
<form>
<table>
<tr style="display:none;"><td colspan="2"><input type="text" name="reportId"  value="<?php echo $_smarty_tpl->getVariable('reportId')->value;?>
" /></td></tr>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('parameters')->value->fields; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
<tr <?php if (!$_smarty_tpl->getVariable('row')->value->value){?>style="background-color:yellow"<?php }?>>
<td><?php echo $_smarty_tpl->getVariable('row')->value->title;?>
</td>
<?php if (isset($_smarty_tpl->getVariable('row',null,true,false)->value->list)){?>
<td>
    <?php echo smarty_function_html_options(array('name'=>$_smarty_tpl->getVariable('row')->value->name,'options'=>$_smarty_tpl->getVariable('row')->value->list,'selected'=>$_smarty_tpl->getVariable('row')->value->value),$_smarty_tpl);?>
 
</td>
<?php }else{ ?>
<td><input type="text" name="<?php echo $_smarty_tpl->getVariable('row')->value->name;?>
" value="<?php echo $_smarty_tpl->getVariable('row')->value->value;?>
" /></td>
<?php }?>
</tr>	
<?php }} ?>
<?php if ($_smarty_tpl->getVariable('parameters')->value->interactive){?>
<tr style="display:none;"><td colspan="2"><input type="text" name="interactive"  value="1" /></td></tr> 
<?php }?>
<tr><td colspan="2"><input type="submit" value="הרץ דוח" /></td></tr>
</table>
</form>	
<br />

<?php if ($_smarty_tpl->getVariable('report')->value->actionParamName){?>
	<table>
	<tr <?php if (!$_smarty_tpl->getVariable('action_parameter')->value->value){?>style="background-color:yellow"<?php }?>>
	<td><?php echo $_smarty_tpl->getVariable('action_parameter')->value->title;?>
</td>
	<?php if (isset($_smarty_tpl->getVariable('action_parameter',null,true,false)->value->list)){?>
	<td>
	    <?php echo smarty_function_html_options(array('name'=>'action_parameter','options'=>$_smarty_tpl->getVariable('action_parameter')->value->list,'selected'=>$_smarty_tpl->getVariable('action_parameter')->value->value),$_smarty_tpl);?>

	    <script type="text/javascript">
	    	var action_parameter_list_extra_array = <?php echo json_encode($_smarty_tpl->getVariable('action_parameter')->value->list_extra);?>
;
		</script>
	</td>
	<?php }else{ ?>
		<td><input type="text" name="action_parameter" value="<?php echo $_smarty_tpl->getVariable('action_parameter')->value->value;?>
" /></td>
	<?php }?>
	
	<td colspan="1"><input type="button" id="action_button" value="הפעל" style="color:red"/></td>
	<td style="display:none;"><input type="text" id="actionDelayMSeconds"  value="<?php echo $_smarty_tpl->getVariable('report')->value->actionDelayMSeconds;?>
" /></td>
	</tr>
	</table> 
<?php }?>

<?php if ($_smarty_tpl->getVariable('missing')->value){?>
יש לבחור פרמרטים עבור הדוח
<?php }elseif($_smarty_tpl->getVariable('parameters')->value->interactive&&!$_smarty_tpl->getVariable('interactive')->value){?>
<?php }else{ ?>

<?php if (isset($_smarty_tpl->getVariable('affected_rows',null,true,false)->value)){?>
<h4><?php echo $_smarty_tpl->getVariable('affected_rows')->value;?>
 רשומות הושפעו</h4>
<?php }else{ ?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_name')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }?>
<?php }?>
<?php }?>
</body>
