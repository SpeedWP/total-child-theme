<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: wpex
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function total_child_enqueue_parent_theme_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array(), WPEX_THEME_VERSION );
}
add_action( 'wp_enqueue_scripts', 'total_child_enqueue_parent_theme_style' );


// Add Total Theme Toolbar
function speedwp_total_theme_toolbar() {
	global $wp_admin_bar;

	$args = array(
		'id'     => 'total-theme-toolbar-parent',
		'title'  => __( 'Total Theme', 'text_domain' ),
		'href'   => 'https://total.wpexplorer.com/',
	  	'meta'   => array(
			'class'    => 'total-theme-toolbar',
			'target'   => '_blank',
			'onclick'  => 'doThisJS()',
			'title'    => '',
			'tabindex' => '1',
		  ),	  
	);
	$wp_admin_bar->add_menu( $args );
  
  	$args = array(
		'id'     => 'total-theme-toolbar-child-0',
		'parent' => 'total-theme-toolbar-parent',
		'title'  => __( 'Child Theme', 'text_domain' ),
	  	'href'   => 'https://wpexplorer-themes.com/total/docs/child-theme/',
	  	'meta'   => array(
			'target'   => '_blank',
			'onclick'  => 'doThisJS()',
			'title'    => '',
			'tabindex' => '10',
		  ),
	);
	$wp_admin_bar->add_menu( $args );

	$args = array(
		'id'     => 'total-theme-toolbar-child-1',
		'parent' => 'total-theme-toolbar-parent',
		'title'  => __( 'Theme Demos', 'text_domain' ),
	  	'href'   => 'https://total.wpexplorer.com/',
	  	'meta'   => array(
			'target'   => '_blank',
			'onclick'  => 'doThisJS()',
			'title'    => '',
			'tabindex' => '11',
		  ),
	);
	$wp_admin_bar->add_menu( $args );
  
	$args = array(
		'id'     => 'total-theme-toolbar-child-2',
		'parent' => 'total-theme-toolbar-parent',
		'title'  => __( 'Docs', 'text_domain' ),
	  	'href'   => 'http://wpexplorer-themes.com/total/docs/',
	  	'meta'   => array(
			'target'   => '_blank',
			'onclick'  => 'doThisJS()',
			'title'    => '',
			'tabindex' => '12',
		  ),
	);
	$wp_admin_bar->add_menu( $args );
  
  	$args = array(
		'id'     => 'total-theme-toolbar-child-3',
		'parent' => 'total-theme-toolbar-parent',
		'title'  => __( 'Snippets', 'text_domain' ),
	  	'href'   => 'https://wpexplorer-themes.com/total/snippets/',
	  	'meta'   => array(
			'target'   => '_blank',
			'onclick'  => 'doThisJS()',
			'title'    => '',
			'tabindex' => '13',
		  ),
	);
	$wp_admin_bar->add_menu( $args );
  
  	$args = array(
		'id'     => 'total-theme-toolbar-child-4',
		'parent' => 'total-theme-toolbar-parent',
		'title'  => __( 'Theme Filters', 'text_domain' ),
	  	'href'   => 'https://wpexplorer-themes.com/total/filters/',
	  	'meta'   => array(
			'target'   => '_blank',
			'onclick'  => 'doThisJS()',
			'title'    => '',
			'tabindex' => '14',
		  ),
	);
	$wp_admin_bar->add_menu( $args );
  
  	$args = array(
		'id'     => 'total-theme-toolbar-child-5',
		'parent' => 'total-theme-toolbar-parent',
		'title'  => __( 'Changelog', 'text_domain' ),
	  	'href'   => 'https://wpexplorer-themes.com/total/changelog/',
	  	'meta'   => array(
			'target'   => '_blank',
			'onclick'  => 'doThisJS()',
			'title'    => '',
			'tabindex' => '15',
		  ),
	);
	$wp_admin_bar->add_menu( $args );
  
    	$args = array(
		'id'     => 'total-theme-toolbar-child-6',
		'parent' => 'total-theme-toolbar-parent',
		'title'  => __( 'Video Tutorials', 'text_domain' ),
	  	'href'   => 'https://www.youtube.com/playlist?list=PLMGCosyDx4aqiPFpdRKROLW9XnT_J4-y4',
	  	'meta'   => array(
			'target'   => '_blank',
			'onclick'  => 'doThisJS()',
			'title'    => '',
			'tabindex' => '16',
		  ),
	);
	$wp_admin_bar->add_menu( $args );
	  
	$args = array(
		'id'     => 'total-theme-toolbar-child-7',
		'parent' => 'total-theme-toolbar-parent',
		'title'  => __( 'WPExplorer', 'text_domain' ),
	  	'href'   => 'https://www.wpexplorer.com/',
	  	'meta'   => array(
			'target'   => '_blank',
			'onclick'  => 'doThisJS()',
			'title'    => '',
			'tabindex' => '17',
		  ),
	);
	$wp_admin_bar->add_menu( $args );
	
		$args = array(
		'id'     => 'total-theme-toolbar-child-child-1',
		'parent' => 'total-theme-toolbar-child-7',
		'title'  => __( 'WPExplorer Themes', 'text_domain' ),
	  	'href'   => 'https://wpexplorer-themes.com',
	  	'meta'   => array(
			'target'   => '_blank',
			'onclick'  => 'doThisJS()',
			'title'    => '',
			'tabindex' => '171',
		  ),
	);
	$wp_admin_bar->add_menu( $args );
	  
	$args = array(
		'id'     => 'total-theme-toolbar-child-child-2',
		'parent' => 'total-theme-toolbar-child-7',
		'title'  => __( 'GitHub', 'text_domain' ),
	  	'href'   => 'https://github.com/wpexplorer/',
	  	'meta'   => array(
			'target'   => '_blank',
			'onclick'  => 'doThisJS()',
			'title'    => '',
			'tabindex' => '172',
		  ),
	);
	$wp_admin_bar->add_menu( $args );
  
}
add_action( 'wp_before_admin_bar_render', 'speedwp_total_theme_toolbar', 999 );
