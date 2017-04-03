<?php /* Smarty version 3.1.27, created on 2017-04-03 17:49:53
         compiled from "C:\OpenServer\domains\newclear.rus\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1319158e261112e2647_50456791%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52983dea7452013b94c4c8142520bf36cf142f84' => 
    array (
      0 => 'C:\\OpenServer\\domains\\newclear.rus\\manager\\templates\\default\\welcome.tpl',
      1 => 1491217292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1319158e261112e2647_50456791',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58e261112f2049_49986436',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e261112f2049_49986436')) {
function content_58e261112f2049_49986436 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1319158e261112e2647_50456791';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>