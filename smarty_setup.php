<?php
require('templater/libs/Smarty.class.php');
class Smarty_monitor extends Smarty {

   function Smarty_monitor()
   {
        $this->template_dir = 'templater/templates/';
        $this->compile_dir  = 'templater/templates_c/';
        $this->config_dir   = 'templater/configs/';
        $this->cache_dir    = 'templater/cache/';

        $this->caching = false;
        $this->assign('app_name', 'Game Monitor');
        $this->assign("app_description", "Серверная статистика, мониторинг, рейтинги игровых серверов");
        $this->assign("slogan", "Играй, а не лагай!");
   }

}
?>
