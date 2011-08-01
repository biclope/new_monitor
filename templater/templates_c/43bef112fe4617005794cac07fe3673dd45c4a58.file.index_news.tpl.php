<?php /* Smarty version Smarty-3.0.8, created on 2011-08-01 16:08:22
         compiled from "templater/templates/index_news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7217733444e36a546a150f0-74541446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43bef112fe4617005794cac07fe3673dd45c4a58' => 
    array (
      0 => 'templater/templates/index_news.tpl',
      1 => 1311935587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7217733444e36a546a150f0-74541446',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- BEGIN NEWS WRAPPER -->
<div id="news-wrapper">
	<h3 class="section-title">Свежие новости</h3>
		<?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news_content')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
?>
			<!-- BEGIN NEWS ITEM -->
			<div class="news-item">		
				<div class="news-thumb-wrapper">				
					<a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['news']->value['image'];?>
" alt="" /></a>
					
					<div class="news-arrows"></div>
					<h1><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['caption'];?>
</a></h1>
				</div>				
				<div class="news-meta-wrapper">
					<span class="news-meta"><?php echo $_smarty_tpl->tpl_vars['news']->value['author'];?>
, <?php echo $_smarty_tpl->tpl_vars['news']->value['date'];?>
</span>
					<span class="news-cats">
						<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['news']->value['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cat']->iteration=0;
if ($_smarty_tpl->tpl_vars['cat']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
 $_smarty_tpl->tpl_vars['cat']->iteration++;
 $_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categories']['last'] = $_smarty_tpl->tpl_vars['cat']->last;
?>
							<a href = "<?php echo $_smarty_tpl->tpl_vars['cat']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['text'];?>
</a>
							<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['categories']['last']){?>| <?php }?>
						<?php }} ?>
					</span>
				</div>
					
				<p><?php echo $_smarty_tpl->tpl_vars['news']->value['abstract'];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['url'];?>
"><br />Читать дальше</a></p>
				
			</div>
			<!-- END NEWS ITEM -->			
		<?php }} ?>
				

			
</div>
			<!-- END NEWS WRAPPER -->
			
			<!-- BEGIN PAGINATION -->
			<div id="pagination">
			
				<span class="current">1</span> 
				<a href="#"><span>2</span></a> 
				<a href="#"><span>3</span></a> 
				<a href="#"><span>4</span></a> 
				<a href="#"><span>5</span></a>
				<a href="#"><span>6</span></a> 
				<a href="#"><span>7</span></a> 
				<a href="#"><span>8</span></a> 
				<a href="#"><span>Next</span></a>
			
			</div>
			<!-- END PAGINATION -->