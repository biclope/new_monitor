<?php /* Smarty version Smarty-3.0.8, created on 2011-08-01 16:08:22
         compiled from "templater/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7181717944e36a546900b65-78512584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11e1ba418d1f62e7628c739335d575f49b014848' => 
    array (
      0 => 'templater/templates/index.tpl',
      1 => 1312204100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7181717944e36a546900b65-78512584',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('slider_show')->value==true){?>
	<?php $_template = new Smarty_Internal_Template("slider.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }?>
	<!-- BEGIN MAIN WRAPPER -->
	<div id="main-wrapper">
	
		<!-- BEGIN MAIN -->
		<div id="main">
			
		<?php $_template = new Smarty_Internal_Template("index_news.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
			
		</div>
		<!-- END MAIN -->
		
		<!-- BEGIN SIDEBAR -->
		<div id="sidebar">
			
			<?php if ($_smarty_tpl->getVariable('banner_show')->value==true){?>
			<!-- BEGIN WIDGET BANNER -->
			<div class="widget-banner">
			
				<img src="./images/sidebar-banner.jpg" alt="" />
			
			</div>
			<!-- END WIDGET BANNER -->
			<?php }?>
			
			<div class="widget">
			
				<h4 class="widget-title">Статистика</h4>
				
				<img src="images/users.png" alt="users" /> 0
				<img src="images/servers.png" alt="servers" /> 0
				

				
			</div>
			
			<div class="widget">
			
				<h4 class="widget-title">Новобранцы</h4>
				
				
					
				</div>
						
			</div>
	
		</div>
		<!-- END SIDEBAR -->

	<!-- END MAIN WRAPPER -->
	 
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>