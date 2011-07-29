<?php
require_once("smarty_setup.php");
$smarty = new Smarty_monitor();
$smarty->assign("slider", false);
$smarty->assign("banner", true);
$smarty->assign("copy", "Copyright &copy; 2011 - G-game team production.");
$smarty->assign("author", "Тридцать три коровы.");

$slider_content = array();
$slider_content[] = array("image" => "images/feat1.jpg", "url" => "http://zhyk.ru", "text" => "Ежики-экстремисты захватывают вагон метро", "author" => "Yohan");
$slider_content[] = array("image" => "images/feat2.jpg", "url" => "http://google.ru", "text" => "Ежики-экстремисты захватывают вагон метро", "author" => "Yohan");
$slider_content[] = array("image" => "images/feat5.jpg", "url" => "http://shit.ru", "text" => "Ежики-экстремисты захватывают вагон метро", "author" => "Yohan");
$slider_content[] = array("image" => "images/feat6.jpg", "url" => "http://fuck.ru", "text" => "Ежики-экстремисты захватывают вагон метро", "author" => "Yohan");
$smarty->assign("slider_content", $slider_content);


$news_content = array();
$news_content[] = array("url" => "http://zhyk.ru",
                        "image" => "images/newsthumb.jpg",
                        "caption" => "Неожиданная находка сантехника Петра и Степана Ивановича",
                        "author" => "Yohan",
                        "date" => date("H:m", time()),
                        "category" => array(array("url" => "/tf2",
                                                  "text" => "Team Fortress 2"),
                                            array("url" => "/cs",
                                                  "text" => "Counter-Strike")),
                        "abstract" => "text text sgfdjksl gfdkl sgjdkl sgj dlsgjfld sjglfds gjds jgfd jsgfdj sglkfjd lgfdl sgjflds gjflds jgfds jgfdsgfdlsg jfdkls jglfdk gsjkdflgjkdflgjslfds jgldfgjfdl gkfdl gjkfd lsgfdl ksgjfd ljsgk ldfgkdfls jgklf jskglfdl skgjfdkl sglfdjks lgjfdl sgjfd ksglf kdslgj fkldsgj lkfdgjlk dsjglfd jsgklfdj lsgjfdkl sjglfdjs gklfdlksg jdfkjsgl kfsdjklg jdfklsgj ldfsgjfdklsgj fdklsg jdfklsgjlkdf sjglkfdjlskgj lks");

$smarty->assign("news_content", $news_content);
//$smarty->assign("name", "ololo name");
$smarty->display("index.tpl");
?>