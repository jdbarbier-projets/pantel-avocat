<?php

/*
*	Require Once
*/

require_once ( 'includes/custom-functions.php' );

require_once ( 'includes/customizer.php' );


/*
* Language folder
*/

function plumbelt_lite_load_theme_textdomain() {

	global $content_width;
    if (!isset($content_width)) {
        $content_width = 640;
    }
	
	load_theme_textdomain( 'plumbelt-lite', get_template_directory().'/languages' );
	
	/*
	*	Theme Support
	*/

	add_theme_support( 'post-thumbnails' ); // Post Thumbnails

	add_theme_support( 'automatic-feed-links' ); // Automatic Feed Links
	
}
add_action( 'after_setup_theme', 'plumbelt_lite_load_theme_textdomain' );

/*
*	WP Enqueue Style and Scripts Plumbelt
*/

function plumbelt_lite_enqueue_style_plumbelt() {

    wp_enqueue_style( 'plumbelt-lite-style', get_stylesheet_uri(), array(), '1.0', false );

    wp_enqueue_style( 'plumbelt-lite-font-family-archivo-narrow', '//fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic' );

    wp_enqueue_style( 'plumbelt-lite-font-family-istok-web', '//fonts.googleapis.com/css?family=Istok+Web:400,700,400italic,700italic' );

    wp_enqueue_style( 'plumbelt-lite-font-family-source-sans-pro', '//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' );

    wp_enqueue_script( 'plumbelt-lite-scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0', true );
	
	wp_enqueue_script('masonry');

    if ( is_singular() ) wp_enqueue_script( "comment-reply" );

}

add_action( 'wp_enqueue_scripts', 'plumbelt_lite_enqueue_style_plumbelt' );

// add ie conditional html5 shim to header
function plumbelt_lite_add_ie_html5_shim () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="' . get_template_directory_uri() . '/js/html5shiv.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_head', 'plumbelt_lite_add_ie_html5_shim');

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'plumbelt_lite_required_plugins' );

function plumbelt_lite_required_plugins() {

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        // This is an example of how to include a plugin from the WordPress Plugin Repository
        array(
            'name'      => 'Revive Old Post',
            'slug'      => 'tweet-old-post',
            'required'  => false,
        ),
        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => false,
        ),
    

    );


    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'domain'            => 'plumbelt-lite',           // Text domain - likely want to be the same as your theme.
        'default_path'      => '',                          // Default absolute path to pre-packaged plugins
        'parent_menu_slug'  => 'themes.php',                // Default parent menu slug
        'parent_url_slug'   => 'themes.php',                // Default parent URL slug
        'menu'              => 'install-required-plugins',  // Menu slug
        'has_notices'       => true,                        // Show admin notices or not
        'is_automatic'      => false,                       // Automatically activate plugins after installation or not
        'message'           => '',                          // Message to output right before the plugins table
        'strings'           => array(
            'page_title'                                => __( 'Install Required Plugins', 'plumbelt-lite' ),
            'menu_title'                                => __( 'Install Plugins', 'plumbelt-lite' ),
            'installing'                                => __( 'Installing Plugin: %s', 'plumbelt-lite' ), // %1$s = plugin name
            'oops'                                      => __( 'Something went wrong with the plugin API.', 'plumbelt-lite' ),
            'notice_can_install_required'               => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_install_recommended'            => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_install'                     => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
            'notice_can_activate_required'              => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_activate_recommended'           => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_activate'                    => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
            'notice_ask_to_update'                      => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_update'                      => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
            'install_link'                              => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'                             => _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
            'return'                                    => __( 'Return to Required Plugins Installer', 'plumbelt-lite' ),
            'plugin_activated'                          => __( 'Plugin activated successfully.', 'plumbelt-lite' ),
            'complete'                                  => __( 'All plugins installed and activated successfully. %s', 'plumbelt-lite' ), // %1$s = dashboard link
            'nag_type'                                  => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
        )
    );

    tgmpa( $plugins, $config );

}

/*
* Custom title function
*/
function plumbelt_lite_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'plumbelt-lite' ), max( $paged, $page ) );

    return $title;
}
add_filter( 'wp_title', 'plumbelt_lite_title', 10, 2 );

/*
*	Navigation Menu
*/

function plumbelt_lite_navigation_menu() {

  register_nav_menu('header-menu',__( 'Header Menu','plumbelt-lite' ));

}

add_action( 'init', 'plumbelt_lite_navigation_menu' );

/*
*	General Sidebar
*/

function plumbelt_lite_general_sidebar() {

	$args = array(

		'id'            => 'general_sidebar',

		'name'          => __( 'General Sidebar', 'plumbelt-lite' ),

		'description'   => __( 'This sidebar will appear in blog page.', 'plumbelt-lite' ),

		'before_title'  => '<h3>',

		'after_title'   => '</h3>',

		'before_widget' => '<div id="%1$s" class="widget cf %2$s">',

		'after_widget'  => '</div>',

	);

	register_sidebar( $args );

}

add_action( 'widgets_init', 'plumbelt_lite_general_sidebar' );