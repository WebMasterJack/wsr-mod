<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo get_template_directory_uri()?>/js/qrcode.js"></script>
</head>
<body>
    
</body>
</html>
<?php
/*
* Plugin Name: QRcode
* Description: Кастомный плагин для wsr
* Version: 1.0.0
* Author: WebMasterJack
* Author URI: https://github.com/WebMasterJack
*/
add_action( 'admin_menu', 'qrcode_menu' );
function qrcode_menu() {
	add_menu_page('My Custom Page', 'QRcode ', 'manage_options', 'my-top-level-slug');
    add_submenu_page( 'my-top-level-slug', 'My Custom Page', 'list_name','manage_options', 'my-top-level-slug','list_name_page');
    add_submenu_page( 'my-top-level-slug', 'My Custom Submenu Page', 'list_name','manage_options', 'list_name_page');

}
add_action('current_url',function(){
    global $wp;
    $home=get_home_url();
    $current_url=$home.'/'.$wp->request;
    echo $current_url;
    
    });
    add_action('qrcode',function(){
        ?>
        <div id="qrcode" style="height:100px;" ></div>
    
    
    <script type="text/javascript">
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        width : 100,
        height : 100
    });
    
    function makeCode () {		
        var scan = "<?php do_action('current_url');?>"
        qrcode.makeCode(scan);
    }
    makeCode ();
    
    </script>
    
        <?php
    });


function register_shortcodes(){
 
    add_shortcode( 'sample-shortcode','shortcode_function'  );
    function shortcode_function(  ) {
       do_action('qrcode');
    }
}




function list_name_page()
{
    echo do_shortcode('[sample-shortcode]');

}








?>