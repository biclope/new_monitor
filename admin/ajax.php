<?php
function generate_config($config) {
    $temp = "<?php ";
    foreach ($config as $key => $val) {
        echo $key."<input type='hidden' value = '".$key."' id = 'config_key'/> <input type='text' value = '".$val."' id = 'config_val'/><br />";
        $temp .= '$'.$key.' = "'.$val."\"; \n";
        //echo $temp;
        //file_put_contents("config.php", $temp);
    }
    //file_put_contents("config.php", $temp);
    //echo $db_user;
    $temp .= "\$config_packed = '".serialize($config)."';";
    $temp .= " ?>";
    file_put_contents("config.php", $temp);
}

function get_config() {
    require_once("config.php");
    $config = array();
    $config = unserialize($config_packed);
    foreach ($config as $key => $val) {
        echo $key."<input type='hidden' value = '".$key."' id = 'config_key'/> <input type='text' value = '".$val."' id = 'config_val'/><br />";
    }
}

switch ($_POST["action"]) {
    case "generate_config": generate_config($_POST["config"]); break;
    case "get_config": get_config(); break;
    default: echo "lol"; break;
}
?>