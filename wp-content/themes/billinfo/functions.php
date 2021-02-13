<?php

function load_stylesheets(){
wp_register_style('bootnavbar',get_template_directory_uri().'/css/bootnavbar.css',array(),1,'all');
wp_enqueue_style('bootnavbar');

wp_register_style('democss',get_template_directory_uri().'/css/demo.css',array(),1,'all');
wp_enqueue_style('democss');

wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css',array(),1,'all');
wp_enqueue_style('bootstrap');
wp_register_style('bootstrap-responsive',get_template_directory_uri().'/css/bootstrap-responsive.css',array(),1,'all');
wp_enqueue_style('bootstrap-responsive');

wp_register_style('custom',get_template_directory_uri().'/css/custom.css',array(),1,'all');
wp_enqueue_style('custom');



}
add_action('wp_enqueue_scripts','load_stylesheets');


/*require_once('wp_bootstrap_navwalker.php');
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/*<!-- jQuery -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="js/bootnavbar.js" ></script>*/

//load scripts


//Custom Widgets
function ieatwebsites_widgets_init(){
register_sidebar( 
	array(
		'name' => esc_html__('Footer Navigation','ieatwebsites'), 
		'id'=>'footer-nav',
		'description'=>esc_html__('Add widgets here','ieatwebsites'),
		'before_widget'=>'<div class="container-bottom">',
		'after_widget'=>'',
		'before_title'=>'<h3>',
		'after_title'=>'</h3>',


	)
);
register_sidebar( 
	array(
		'name' => esc_html__('Top Bar','ieatwebsites'), 
		'id'=>'top-nav',
		'description'=>esc_html__('Add widgets here','ieatwebsites'),
		'before_widget'=>'<div class="container-top">',
		'after_widget'=>'',
		'before_title'=>'<h3>',
		'after_title'=>'</h3>',


	)
);

}
add_action('widgets_init','ieatwebsites_widgets_init');
//widgets end here
//----------------------------------


/*function addjs(){
wp_register_scripts('jQuery',get_template_directory_uri().'/js/jquery-2.2.4.min.js',array(),1,1,1);
wp_enqueue_scripts('jQuery');

wp_register_scripts('bootstrap',get_template_directory_uri().'/js/bootstrap.bundle.min.js',array(),1,1,1);
wp_enqueue_scripts('bootstrap');

wp_register_scripts('bootnavbar',get_template_directory_uri().'/js/bootnavbar.js','',1,true);
wp_enqueue_scripts('bootnavbar');

wp_register_scripts('custom',get_template_directory_uri().'/custom.js',array(),'',1,false);
wp_enqueue_scripts('custom');

}

//add_action('wp_enqueue_scripts','addjs');*/

//jquery scripts

function include_js(){

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery-2.2.4.min.js','',1,false);
    add_action('wp_enqueue_scripts','jquery');



    wp_enqueue_script('bootnavbar',get_template_directory_uri().'/js/bootnavbar.js','',1,true);
    add_action('wp_enqueue_scripts','bootnavbar');
    
}
add_action('wp_enqueue_scripts','include_js');

function loadjs(){
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.bundle.min.js',array(),'',1,false);
	wp_enqueue_script('bootstrap');

wp_register_script('custom',get_template_directory_uri().'/custom.js',array(),'',1,true);
wp_enqueue_script('custom');

}
add_action('wp_enqueue_scripts','loadjs');
//Jquery ends here
//---------------------------------------------------

//Custom Menus
register_nav_menus(

array(
     'top-menu'=> __('Top Menu','Vcon Theme'),
     'additional-menu' => __( 'Additional Menu' ),

)

);
add_theme_support('menus');

#Adding Menu css class

function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

//Menus work ends here
//----------------------------------


add_theme_support( 'title-tag' );



//Experiment

/* Theme setup */
// Get top ancestor



?>
	

