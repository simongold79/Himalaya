<?php 
    //Adding style css files
    function my_theme_enqueue_styles(){
        wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style( 'font-awsome', get_template_directory_uri() . '/css/font-awesome.min.css' );
        wp_enqueue_style('style_of_css', get_template_directory_uri() . '/css/style.css' );
        wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
        wp_enqueue_style('owl_carousel', get_template_directory_uri() . '/css/owl.carousel.min.css' );
        wp_enqueue_style('owl_carousel_theme', get_template_directory_uri() . '/css/owl.theme.default.min.css' );
        // wp_enqueue_style('style_of_css', get_template_directory_uri() . '/css/owl.theme.green.min.css' );
    }

    add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

    //Adding js script files
    function my_theme_enqueue_scripts() {
	   global $wp_scripts;
        wp_enqueue_script('jquery_js',get_template_directory_uri().'/js/jquery-3.2.1.min.js');
        wp_enqueue_script('bootstrap_js',get_template_directory_uri().'/js/bootstrap.min.js');
        wp_enqueue_script('main_js',get_template_directory_uri().'/js/main.js');
        wp_enqueue_script('owl_carousel_js',get_template_directory_uri().'/js/owl.carousel.min.js');
    }

    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts');

    //Adding menu
    function register_my_menu(){
        register_nav_menu('primary','primary-menu');
    }

    add_action('init','register_my_menu');


    //Adding features to costum theme
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'video'));
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    //Remove admin bar
    show_admin_bar(false);

    remove_filter('template_redirect','redirect_canonical');
    remove_filter ('acf_the_content', 'wpautop');

?>