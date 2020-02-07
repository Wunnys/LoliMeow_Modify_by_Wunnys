<?php

//自动给修改网站登陆页面logo
function customize_login_logo(){         
	echo '<style type="text/css">
	    .login{background: url('.get_template_directory_uri() .'/assets/images/background.png) center center no-repeat;}#login{position:absolute;bottom:10%;right:10%;}
		.login h1 a { background-image:url('.get_template_directory_uri() .'/assets/images/webicon.png); width: 100px; max-height: 100px;margin: 20px auto 15px; background-size: contain;background-repeat: no-repeat;background-position: center center;}
		.login form{border-radius: 10px;}
        </style>';   
  
}  
add_action('login_head', 'customize_login_logo');   

function custom_loginlogo_url($url) {
	return home_url();
}
add_filter( 'login_headerurl', 'custom_loginlogo_url' );

// 后台Ctrl+Enter提交评论回复
add_action('admin_footer', '_admin_comment_ctrlenter');
function _admin_comment_ctrlenter() {
	echo '<script type="text/javascript">
        jQuery(document).ready(function($){
            $("textarea").keypress(function(e){
                if(e.ctrlKey&&e.which==13||e.which==10){
                    $("#replybtn").click();
                }
            });
        });
    </script>';
};

//编辑器TinyMCE增强
function enable_more_buttons($buttons)
{
	$buttons[] = 'hr';
	$buttons[] = 'del';
	$buttons[] = 'sub';
	$buttons[] = 'sup';
	$buttons[] = 'fontselect';
	$buttons[] = 'fontsizeselect';
	$buttons[] = 'cleanup';
	$buttons[] = 'styleselect';
	$buttons[] = 'wp_page';
	$buttons[] = 'anchor';
	$buttons[] = 'backcolor';
	return $buttons;
}
add_filter("mce_buttons_3", "enable_more_buttons");



//添加HTML编辑器按钮
function my_quicktags(){
	wp_enqueue_script(
		'my_quicktags',
		get_stylesheet_directory_uri().'/assets/js/quicktags.js',
		array('quicktags')
	);
}
add_action('admin_print_scripts', 'my_quicktags');






?>