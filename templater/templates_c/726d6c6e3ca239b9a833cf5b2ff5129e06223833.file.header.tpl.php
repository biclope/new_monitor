<?php /* Smarty version Smarty-3.0.8, created on 2011-08-01 16:42:30
         compiled from "templater/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12598731474e36ad46257633-12225606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '726d6c6e3ca239b9a833cf5b2ff5129e06223833' => 
    array (
      0 => 'templater/templates/header.tpl',
      1 => 1312204267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12598731474e36ad46257633-12225606',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>


 
<title><?php echo $_smarty_tpl->getVariable('app_name')->value;?>
 - <?php echo $_smarty_tpl->getVariable('app_description')->value;?>
</title>
 
<link rel="stylesheet" href="./style.css" />
<link href="favicon.ico" rel="icon" type="image/x-icon" />	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="./js/mobilyslider.js"></script>
<script type="text/javascript" src="./js/init.js"></script>
<script type="text/javascript" src="./js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="./js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="./js/scripts.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

	<!-- BEGIN HEADER -->
	<div id="header-wrapper">
	
		<div id="header">
	
			<!-- BEGIN TOP NAVIGATION -->
			<ul id="top-navigation">
				<li><a href="/">Домой</a></li>
				<li><a href="/about.php">О нас</a></li>
				<li><a href="/contact.php">Контакты</a></li>
			</ul>
			<!-- END TOP NAVIGATION -->
			
			<!-- BEGIN SOCIAL MEDIA -->
			<div id="social-media">
				<a href="#"><img src="./images/facebook.png" alt="" /></a>
				<a href="#"><img src="./images/twitter.png" alt="" /></a>
				<a href="#"><img src="./images/rss.png" alt="" /></a>
			</div>
			<!-- END SOCIAL MEDIA -->
			
			<!-- BEGIN LOGO -->
			<div id="logo">
				<a href="./"><img src="./images/logo.jpg" alt="Game Monitor" /></a>
			</div>
			<!-- END LOGO -->
			
			<!-- BEGIN HEADER BANNER -->
			<div id="header-banner">
				<img src="./images/header-banner.png" alt="" />
			</div>
			<!-- END HEADER BANNER -->
			
			<!-- BEGIN NAVIGATION -->
			<div id="navigation-wrapper">
				<ul id="navigation">
					<li><a href="/">Домой</a></li>
					<li><a href="#">Новости</a></li>
					<li><a href="#">Игры</a></li>
					<li><a href="#">Профили</a></li>
					<li><a href="#">Команды</a></li>
					<li><a href="#">Сервера</a></li>
				</ul>
				
				<!-- BEGIN SEARCH -->
				<div id="search" style = "display: none;">
					<form action="#" />
						<input type="text" name="search" value="Поиск" />
					</form>
				</div>
				<!-- END SEARCH -->
				
			</div>
			<!-- END NAVIGATION -->
	
		</div>
	
	</div>
	<!-- END HEADER -->