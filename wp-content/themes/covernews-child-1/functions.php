<?php
//Child Theme Functions File

add_action( "wp_enqueue_scripts", "enqueue_wp_child_theme" );
function enqueue_wp_child_theme() 
{
    if((esc_attr(get_option("childthemewpdotcom_setting_x")) != "Yes")) 
    {
		//This is your parent stylesheet you can choose to include or exclude this by going to your Child Theme Settings under the "Settings" in your WP Dashboard
		wp_enqueue_style('font-awesome-v5',
		get_template_directory_uri().'/assets/font-awesome-v5/css/fontawesome-all'.$min.'.css');
		wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/bootstrap/css/bootstrap'.$min.'.css');
		wp_enqueue_style('slick', get_template_directory_uri().'/assets/slick/css/slick.css');
		// wp_enqueue_style("parent-css", get_template_directory_uri()."/style.css" );
    }

	//This is your child theme stylesheet = style.css
	wp_enqueue_style("child-css", get_stylesheet_uri());
    //This is your child theme js file = js/script.js
	//This is your child theme js file = js/script.js
	wp_enqueue_script("child-js", get_stylesheet_directory_uri() . "/js/script.js", array( "jquery" ), "1.0", true );
}
 

// ChildThemeWP.com Settings 
function childthemewpdotcom_register_settings() 
{ 
	register_setting( "childthemewpdotcom_theme_options_group", "childthemewpdotcom_setting_x", "ctwp_callback" );
}
add_action( "admin_init", "childthemewpdotcom_register_settings" );

//ChildThemeWP.com Options Page
function childthemewpdotcom_register_options_page() 
{
	add_options_page("Child Theme Settings", "My Child Theme", "manage_options", "childthemewpdotcom", "childthemewpdotcom_theme_options_page");
}
add_action("admin_menu", "childthemewpdotcom_register_options_page");

add_filter('use_block_editor_for_post', '__return_false');
add_filter('use_widgets_block_editor', '__return_false');
add_filter( 'rank_math/frontend/canonical', '__return_false' );
 