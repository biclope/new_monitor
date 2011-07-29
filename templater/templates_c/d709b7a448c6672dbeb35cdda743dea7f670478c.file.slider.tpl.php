<?php /* Smarty version Smarty-3.0.8, created on 2011-07-29 12:14:56
         compiled from "templater/templates/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11645222834e327a1068cac7-73391297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd709b7a448c6672dbeb35cdda743dea7f670478c' => 
    array (
      0 => 'templater/templates/slider.tpl',
      1 => 1311930477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11645222834e327a1068cac7-73391297',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<!-- BEGIN SLIDER -->
	<div class="slider">
	
		<div class="sliderContent">
			<?php  $_smarty_tpl->tpl_vars['featured'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('slider_content')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['featured']->key => $_smarty_tpl->tpl_vars['featured']->value){
?>
			<!-- BEGIN FEATURED ITEM -->
			<div class="featured-item" style="background:#000 url(<?php echo $_smarty_tpl->tpl_vars['featured']->value['image'];?>
) no-repeat center; height:280px;">
				
				<div class="featured-inner">
					
					<div class="featured-inner">
					
						<div class="featured-arrows"></div>
						<h1><a href="<?php echo $_smarty_tpl->tpl_vars['featured']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['featured']->value['text'];?>
</a></h1>
						<p class="featured-meta"><?php echo $_smarty_tpl->tpl_vars['featured']->value['author'];?>
</p>
						
					</div>
						
				</div>
				
			</div>
			<!-- END FEATURED ITEM -->				
			<?php }} ?>
			
		</div>
		
		<div class="top-overlay"></div>
		<div class="bottom-overlay"></div>
		
	</div>
	<!-- END SLIDER -->
