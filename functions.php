<?php

// Enqueue scripts and styles
function twisted_theme_scripts() {
  wp_enqueue_style('global template', get_template_directory_uri().'/assets/css/style.css', array(), '1.0', 'all');	
  wp_enqueue_script('global scripts', get_template_directory_uri().'/assets/js/script.js', array(), '1.0', 'all');
  wp_enqueue_script('isotope masonry', 'https://npmcdn.com/isotope-layout@3.0.6/dist/isotope.pkgd.js', array(), '3.0.6', 'all');
  wp_enqueue_script('awesome icons', "https://kit.fontawesome.com/eb5e14c15e.js", array(), '5.15', 'all');
}
add_action('wp_enqueue_scripts', 'twisted_theme_scripts');

// Twisted theme setup
if ( !function_exists('twisted_setup') ) {
  function twisted_setup() {
    // Adding theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('image'));
    add_theme_support( 'editor-styles' );

    // Custom header image
    $args = array(
      'flex-width'    => true,
      'width'         => 1500,
      'flex-height'   => true,
      'height'        => 1000,
      'default-image' => get_template_directory_uri() . '/assets/images/first-section-bg.jpg',
    );
    add_theme_support('custom-header', $args);

    // Custom menus
    function register_my_menus() {
      register_nav_menus(
        array(
          'header-menu' => __('Header Menu'),
          'footer-menu' => __('Footer Menu')
        )
      );
    }
    add_action('init', 'register_my_menus');

    // Custom background color.
    add_theme_support(
      'custom-background',
      array(
        'default-color' => 'd1e4dd',
      )
    );

    // Editor color palette.
    $black     = '#000000';
    $dark_gray = '#28303D';
    $gray      = '#39414D';
    $green     = '#D1E4DD';
    $blue      = '#D1DFE4';
    $purple    = '#D1D1E4';
    $red       = '#E4D1D1';
    $orange    = '#E4DAD1';
    $yellow    = '#EEEADD';
    $white     = '#FFFFFF';
  }
  add_action( 'after_setup_theme', 'twisted_setup' );
}

// Testimonial custom post type
function testimonial_custom_post_type() {
  register_post_type('testimonial',
    array(
      'labels' => array(
        'name'          => __('Testimonials', 'textdomain'),
        'singular_name' => __('Testimonial', 'textdomain'),              
      ),
      'public'      => true,
      'has_archive' => false,
      'rewrite'     => array( 'slug' => 'testimonial' ),
      'menu_icon'   => 'dashicons-slides',
    )
  );
}
add_action('init', 'testimonial_custom_post_type');

// TGM Plugin Activation Class
require_once locate_template('/lib/TGM-Plugin-Activation-2.6.1/class-tgm-plugin-activation.php');

// Require Advanced Custom Fields Plugin
function twisted_required_plugins() {
	$plugins = array(
		// Require ACF
		array(
			'name'     				    => 'Advanced Custom Fields', // The plugin name
			'slug'     				    => 'advanced-custom-fields', // The plugin slug (typically the folder name)
			'source'   				    => 'http://downloads.wordpress.org/plugin/advanced-custom-fields.zip', // The plugin source
			'required' 				    => true, // If false, the plugin is only 'recommended' instead of required
			'version' 				    => '5.11.4', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			  => '', // If set, overrides default API URL and points to an external URL
    ),
    array(
			'name'     				    => 'Classic Editor', // The plugin name
			'slug'     				    => 'classic-editor', // The plugin slug (typically the folder name)
			'source'   				    => 'http://downloads.wordpress.org/plugin/classic-editor.zip', // The plugin source
			'required' 				    => false, // If false, the plugin is only 'recommended' instead of required
			'version' 				    => '1.6', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			  => '', // If set, overrides default API URL and points to an external URL
    ),
    array(
			'name'     				    => 'Contact Form 7', // The plugin name
			'slug'     				    => 'contact-form-7', // The plugin slug (typically the folder name)
			'source'   				    => 'http://downloads.wordpress.org/plugin/contact-form-7.zip', // The plugin source
			'required' 				    => false, // If false, the plugin is only 'recommended' instead of required
			'version' 				    => '5.5.3', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			  => '', // If set, overrides default API URL and points to an external URL
    )
	);

	$theme_text_domain = 'twisted';

	$config = array(
		'domain'       		  => $theme_text_domain,         	// Text domain - likely want to be the same as your theme.
		'default_path' 		  => '',                         	// Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		  => 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
		'message' 			    => '',							// Message to output right before the plugins table
		'strings' => array(
			'page_title'                      => __( 'Install Required Plugins', $theme_text_domain ),
			'menu_title'                      => __( 'Install Plugins', $theme_text_domain ),
			'installing'                      => __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
			'oops'                            => __( 'Something went wrong with the plugin API.', $theme_text_domain ),
			'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'	=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'	=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
			'install_link' 					  			  => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
			'activate_link' 				  			  => _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
			'return'                          => __( 'Return to Required Plugins Installer', $theme_text_domain ),
			'plugin_activated'                => __( 'Plugin activated successfully.', $theme_text_domain ),
			'complete' 									      => __( 'All plugins installed and activated successfully. %s', $theme_text_domain ), // %1$s = dashboard link
			'nag_type'									      => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'twisted_required_plugins' );

//Returns Twisted Theme Configuration Page
function twisted_config_page() {
  global $twistedConfigID;

  $args = [
    'post_type' => 'page',
    'fields' => 'ids',
    'nopaging' => true,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'twisted-config.php'
  ];
  $pages = get_posts( $args );

  empty($pages) ? $twistedConfigID = 0 : $twistedConfigID = $pages[0];  

  return $twistedConfigID;
}
