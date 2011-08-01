<?php /* Smarty version Smarty-3.0.8, created on 2011-08-01 17:48:26
         compiled from "templater/templates/servers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12632338384e36bcbaa4fca9-74462074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5583b5f345e61bf291e4ba41e7e9941e070db511' => 
    array (
      0 => 'templater/templates/servers.tpl',
      1 => 1312210074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12632338384e36bcbaa4fca9-74462074',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<!-- BEGIN MAIN WRAPPER -->
	<div id="main-wrapper">
	
		<!-- BEGIN MAIN -->
		<div id="main">
                    <div class="blockWrapper">
                        <div class="addserver">
                            <div class="addheader">
                                <div class="title">Добавить сервер</div>
                            </div>
                            <div class="addbody">
                                <p><span>IP</span><input type="text" id="ip" /></p>
                                <p><span>Port</span><input type="text" id="ip" /></p>
                                <p><span>Query port</span><input type="text" id="ip" /></p>
                                <p><input type="button" id="send" value = "Добавить" /></p>
                            </div>
                        </div>
                    </div>
			
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
			
				<h4 class="widget-title">TOP - сервера</h4>
				
				
					
				</div>
						
			</div>
	
		</div>
		<!-- END SIDEBAR -->

	<!-- END MAIN WRAPPER -->
	 
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>