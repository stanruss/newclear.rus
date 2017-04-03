<?php /* Smarty version 3.1.27, created on 2017-04-03 18:03:24
         compiled from "C:\OpenServer\domains\newclear.rus\manager\templates\default\resource\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1088458e2643ccdad42_09921040%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6fcb804678f9bee708787585648c10129c13130' => 
    array (
      0 => 'C:\\OpenServer\\domains\\newclear.rus\\manager\\templates\\default\\resource\\update.tpl',
      1 => 1491217292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1088458e2643ccdad42_09921040',
  'variables' => 
  array (
    'tvOutput' => 0,
    'hidden' => 0,
    'tv' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58e2643cd21259_78068716',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e2643cd21259_78068716')) {
function content_58e2643cd21259_78068716 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1088458e2643ccdad42_09921040';
?>
<div id="modx-panel-resource-div"></div>
<div id="modx-resource-tvs-div"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>
<?php
$_from = $_smarty_tpl->tpl_vars['hidden']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tv']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tv']->value) {
$_smarty_tpl->tpl_vars['tv']->_loop = true;
$foreach_tv_Sav = $_smarty_tpl->tpl_vars['tv'];
?>
    <input type="hidden" id="tvdef<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->default_text, ENT_QUOTES, 'UTF-8', true);?>
" />
    <?php echo $_smarty_tpl->tpl_vars['tv']->value->get('formElement');?>

<?php
$_smarty_tpl->tpl_vars['tv'] = $foreach_tv_Sav;
}
?>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>