<?php /* Smarty version Smarty-3.0.8, created on 2011-07-29 13:47:33
         compiled from "templater/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21420988804e328fc5f2d667-28187089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '726d6c6e3ca239b9a833cf5b2ff5129e06223833' => 
    array (
      0 => 'templater/templates/header.tpl',
      1 => 1311936451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21420988804e328fc5f2d667-28187089',
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
<script type="text/javascript" src="./js/superfish.js"></script>
<script type="text/javascript" src="./js/mobilyslider.js"></script>
<script type="text/javascript" src="./js/init.js"></script>
<script type="text/javascript" src="./js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="./js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="./js/scripts.js"></script>
	
<script> 
    $(document).ready(function() { 
        $('ul#navigation').superfish(); 
		$('ul#top-navigation').superfish(); 
    }); 
</script>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

	<!-- BEGIN HEADER -->
	<div id="header-wrapper">
	
		<div id="header">
	
			<!-- BEGIN TOP NAVIGATION -->
			<ul id="top-navigation">
				<li><a href="./index.html">Home</a></li>
				<li><a href="./about.html">About Us</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="./typography.html">Typography</a></li>
				<li><a href="#">Page Templates</a>
					<ul>
						<li><a href="./archive.html">News archive</a></li>
						<li><a href="./news-post.html">News post</a></li>
						<li><a href="./review-archive.html">Reviews archive</a></li>
						<li><a href="./review-post.html">Review post</a></li>
						<li><a href="./video-archive.html">Videos archive</a></li>
						<li><a href="./video-post.html">Video post</a></li>
						<li><a href="./screenshot-archive.html">Screenshots archive</a></li>
						<li><a href="./screenshot-post.html">Screenshot post</a></li>
					</ul>
				</li>
				<li><a href="#">Skins</a>
					<ul>
						<li><a href="../index.html">Blue (default)</a></li>
						<li><a href="../red/index.html">Red</a></li>
						<li><a href="../green/index.html">Green</a></li>
						<li><a href="./index.html">Orange</a></li>
					</ul>
				</li>
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
				<a href="./index.html"><img src="./images/logo.jpg" alt="Game Monitor" /></a>
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
					<li><a href="./index.html">Home</a></li>
					<li><a href="#">News</a>
						<ul>
							<li><a href="./archive.html">Archive</a></li>
							<li><a href="./news-post.html">News post</a></li>
							<li><a href="#">PC</a></li>
							<li><a href="#">PS3</a></li>
							<li><a href="#">Xbox 360</a></li>
						</ul>
					</li>
					<li><a href="#">Reviews</a>
						<ul>
							<li><a href="./review-archive.html">Reviews archive</a></li>
							<li><a href="./review-post.html">Review post</a></li>
						</ul>
					</li>
					<li><a href="#">Videos</a>
						<ul>
							<li><a href="./video-archive.html">Videos archive</a></li>
							<li><a href="./video-post.html">Video post</a></li>
						</ul>
					</li>
					<li><a href="#">Screenshots</a>
						<ul>
							<li><a href="./screenshot-archive.html">Screenshots archive</a></li>
							<li><a href="./screenshot-post.html">Screenshot post</a></li>
						</ul>
					</li>
					<li><a href="#">Dropdown</a>
						<ul>
							<li><a href="#">Dropdown test</a></li>
							<li><a href="#">Dropdown test</a>
								<ul>
									<li><a href="#">Dropdown test</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
				
				<!-- BEGIN SEARCH -->
				<div id="search">
					<form action="#" />
						<input type="text" name="search" value="search here..." />
					</form>
				</div>
				<!-- END SEARCH -->
				
			</div>
			<!-- END NAVIGATION -->
	
		</div>
	
	</div>
	<!-- END HEADER -->