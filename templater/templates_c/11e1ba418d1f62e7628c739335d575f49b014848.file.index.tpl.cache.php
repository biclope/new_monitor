<?php /* Smarty version Smarty-3.0.8, created on 2011-07-26 16:20:30
         compiled from "templater/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21419039024e2ebb6a9b0de4-25002891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11e1ba418d1f62e7628c739335d575f49b014848' => 
    array (
      0 => 'templater/templates/index.tpl',
      1 => 1311686357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21419039024e2ebb6a9b0de4-25002891',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $sha = sha1("header.tpl" . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<h1><?php echo $_smarty_tpl->getVariable('app_name')->value;?>
</h1>

<?php $sha = sha1("footer.tpl" . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
