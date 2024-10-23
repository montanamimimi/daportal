<?php 

require_once( get_template_directory() . "/inc/helpers.php" );

class DigitalAgensy {
    public static $version = '0.0.1';

    public static function init() {
        add_action( 'wp_enqueue_scripts', [ __CLASS__, 'assets' ] );
		add_action('after_setup_theme', [ __CLASS__, 'addMenus' ]);
	//	add_action('after_setup_theme', [ __CLASS__, 'addThumbnails' ]);
		add_action('after_setup_theme', [ __CLASS__, 'addSettings' ]);
		add_action('init', [ __CLASS__, 'addPostTypes' ]);
		add_theme_support( 'post-thumbnails' );
		show_admin_bar(false);
    }

	public static function addSettings() {
		acf_add_options_page([
			'page_title' => __('Settings','daportal'),
			'menu_title' => __('Settings','daportal'),
			'menu_slug' => 'theme-settings',
			'capability' => 'edit_posts',
			'redirect' => false
		]);

	}

	public static function addPostTypes() {

		register_post_type( 'step', array(    
			'supports' => array('title', 'editor', 'thumbnail'),
			'taxonomies' => array('category'),
			'rewrite' => array(
				'slug' => 'steps'
			),
			'public' => true,
			'publicly_queryable' => false,
			'show_in_rest' => true,
			'labels' => array(
				'name' => 'Этапы',
				'add_new_item' => 'Добавить новый этап',
				'edit_item' => 'Изменить этап',
				'all_items' => 'Все этапы',
				'singular_name' => 'Этап'
			),
			'menu_icon' => 'dashicons-editor-ol'
		));

	}

	public static function addThumbnails() {
		// add_theme_support('post-thumbnails');
		// add_image_size('video-gallery', 424, 220, true); 
		// add_image_size('fansy-gallery', 500, 300, true); 
		// add_image_size('video-large', 1024, 570, true); 
	}

	public static function addMenus() {
		register_nav_menus( array(
			'primary' => 'Primary Navigation Menu',
			'secondary1' => 'Secondary Navigation Menu 1',
			'secondary2' => 'Secondary Navigation Menu 2',
			'secondary3' => 'Secondary Navigation Menu 3'			
		) );
	}

    public static function assets() {
        $themePath = get_template_directory_uri();
        
        wp_enqueue_style(
			'daportal-style',
			"{$themePath}/build/index.css",
			array(),	
			self::$version
		);

        wp_enqueue_script(
			'daportal-scripts',
			"{$themePath}/build/index.js",
			NULL,   
			self::$version,
			true
		);

    }
}

DigitalAgensy::init();