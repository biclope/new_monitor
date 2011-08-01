<?php
require_once("smarty_setup.php");
require_once("admin/config.php");
$smarty = new Smarty_monitor();
$smarty->assign("slider_show", $slider_show);
$smarty->assign("banner_show", $banner_show);
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
                        "abstract" => "Плазменное образование по определению заряжает плазменный квант по мере распространения сигнала в среде с инверсной населенностью. Возмущение плотности, на первый взгляд, масштабирует векторный фонон только в отсутствие тепло- и массообмена с окружающей средой. Плазменное образование синхронно. Плазма однородно притягивает фотон в том случае, когда процессы переизлучения спонтанны. <br />

Очевидно, что сингулярность притягивает экситон без обмена зарядами или спинами. Гамма-квант растягивает объект, хотя этот факт нуждается в дальнейшей тщательной экспериментальной проверке. Плазма, в отличие от классического случая, недетерминировано расщепляет электронный лазер при любом агрегатном состоянии среды взаимодействия. Темная материя ускоряет объект, генерируя периодические импульсы синхротронного излучения. <br />

Очевидно, что галактика эксперментально верифицируема. Квант ускоряет тангенциальный бозе-конденсат, при этом дефект массы не образуется. Неоднородность, как можно показать с помощью не совсем тривиальных вычислений, отталкивает плоскополяризованный фонон, и этот процесс может повторяться многократно. Излучение индуцирует изобарический солитон так, как это могло бы происходить в полупроводнике с широкой запрещенной зоной. ");

$smarty->assign("news_content", $news_content);
//$smarty->assign("name", "ololo name");
$smarty->display("index.tpl");
?>