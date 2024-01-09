<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php'); 
require_once(get_template_directory().'/assets/functions/menu-walkers.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php'); 

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php');


// Custom Enqueue Scripts
// -------------------------------------------------------------
function lmog_enqueue_scripts() {
    if ( !is_admin() ) { // Instruction to only load if it is not the admin area
    // Register your script location, dependencies and version

        /* font (google CDN) */
        wp_register_style('googleFonts', '//fonts.googleapis.com/css?family=Montserrat:500,600,700');
        wp_enqueue_style( 'googleFonts');
     
        /* jquery (google CDN) */
        wp_deregister_script('jquery');
        wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js');
        wp_enqueue_script('jquery');

        /* jquery UI (google CDN) */
        wp_deregister_script('jquery-ui-core');
        wp_register_script('jquery-ui-core', '//ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js');
        wp_enqueue_script('jquery-ui-core');

        /* isotope */
        // wp_register_script('isotope', '/wp-content/themes/lmgh/js/isotope.pkgd.js','', true);
        // wp_enqueue_script('isotope');

        /* isotope - custom */
        // wp_register_script('isotope-custom', '/wp-content/themes/lmgh/js/isotope.custom.js','', true);
        // wp_enqueue_script('isotope-custom');

        /* imageload - custom */
        // wp_register_script('images-loaded', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.1.8/imagesloaded.min.js','jquery', true);
        // wp_enqueue_script('images-loaded');

        /* masonry (http://masonry.desandro.com) */ 
        wp_register_script('masonry', '/wp-content/themes/lmgh/js/masonry.pkgd.min.js','jquery','', true);    
        wp_enqueue_script('masonry');

        /* scrolltotop (https://premium.wpmudev.org/blog/back-to-top-button-wordpress/) */ 
        // wp_register_script('scrolltotop', '/wp-content/themes/lmgh/js/scrolltotop.js','jquery','', true);    
        // wp_enqueue_script('scrolltotop');

        /* tota11y */
        /* http://khan.github.io/tota11y/ */
        /* wp_register_script('tota11y', '/wp-content/themes/lmgh/js/tota11y.min.js','', false); */
        /* wp_enqueue_script('tota11y'); */
    }
}
add_action('wp_enqueue_scripts', 'lmog_enqueue_scripts');


// ---
// Custom Date Meta
// -------------------------------------------------------------
function custom_date_month() {
	echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('%s', 'reverie'), get_the_time('F y'), get_the_time()) .'</time>';
}



// Sidebars
// -------------------------------------------------------------
// Instagram - Homepage Grid
$sidebars = array('Instagram Single');
foreach ($sidebars as $sidebar) {
    register_sidebar(array('name'=> $sidebar,
        'id' => 'social-instagram-grid',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h6>',
        'after_title' => '</h6>'
    ));
}

?>