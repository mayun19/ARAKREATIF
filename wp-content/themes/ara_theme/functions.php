<?php
    if (!function_exists('ara_theme_setup')) {
    function ara_theme_setup()
    {
        // tambah fitur disini;
        //  mengaktifkan fitur title-tag pada theme kita
        add_theme_support('title-tag');

        // menambahkan RSS feed-link agar pengunjung situs kita bisa berlangganan artikel dari situs kita
        add_theme_support('automatic-feed-links');

        // fitur Menus
        register_nav_menus(array(
            'primary_id' => esc_html__( 'Primary', 'ara-theme' ),
       ));
    //    fitur post-thumbnails
       add_theme_support('post-thumbnails');

    //    mengaktifkan html5 markup untuk search forms, comment forms, comment lists, gallery, dan caption
       add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // mengaktifkan custom-background
    add_theme_support('custom-background', apply_filters('ara_theme_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    )));
    
    }
}
add_action('after_setup_theme', 'ara_theme_setup');

if (!function_exists('ara_theme_scripts')) {
    function onphpid_theme_scripts()
    {
        wp_enqueue_style('ara_theme-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('ara_theme-bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css');

	wp_enqueue_style('ara_theme-style', get_stylesheet_uri());

	wp_enqueue_script('ara_theme-custom', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('ara_theme-custom',
    get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
	    wp_enqueue_script('comment-reply');
	}
    }
}
add_action('wp_enqueue_scripts', 'onphpid_theme_scripts');
?>

<?php
register_nav_menus( array(
	'primary_menu' => 'Primary Menu',
) );