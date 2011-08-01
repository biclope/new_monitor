<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<?php
/* DATABASE */
$config["db_host"] = "localhost";
$config["db_user"] = "root";
$config["db_password"] = "";
$config["db_database"] = "monitor";

/* NEWS */
$config["news_excerpt_length"] = "300";

/* PROFILES */

/* TEAMS */

/* BANNERS */

/* GENERAL */
$config["slider_show"] = true;

echo '<div class="settings"></div>';
?>

<script type="text/javascript">
$(document).ready(function(){
        $.post("ajax.php", {action: "get_config"}, function(returned_data){
                $(".settings").html(returned_data);
            });
        
        $(".add_new").click(function(){
               $(".settings").append('<input type="text" id = "config_key"/> <input type="text" id = "config_val"/> <br />'); 
            });
        
        $(".generate").click(function(){
                var res = {};
                $("input#config_val").each(function(){
                        res[$(this).prev().attr("value")] = $(this).attr("value");
                    });
                //alert(res);
                $.post("ajax.php", {action: "generate_config", config: res}, function(returned_data){
                        $(".settings").html(returned_data);
                    });
            });
    });
</script>

<input type="button" value = "+" class = "add_new"/>
<input type="button" value = "generate config" class = "generate"/>