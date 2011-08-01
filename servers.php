<?php
require_once("smarty_setup.php");
require_once("admin/config.php");
$smarty = new Smarty_monitor();
$smarty->assign("copy", "Copyright &copy; 2011 - G-game team production.");
$smarty->assign("author", "Тридцать три коровы.");
$smarty->assign("banner_show", $banner_show);
$smarty->display("servers.tpl");
?>