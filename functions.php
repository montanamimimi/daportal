<?php 

require_once( get_template_directory() . "/inc/helpers.php" );

class DigitalAgensy {
    public static $version = '0.0.1';

    public static function init() {
        add_action( 'wp_enqueue_scripts', [ __CLASS__, 'assets' ] );
		add_action('after_setup_theme', [ __CLASS__, 'addMenus' ]);
		add_action('after_setup_theme', [ __CLASS__, 'addSettings' ]);
		add_action('init', [ __CLASS__, 'addPostTypes' ]);
		add_action('init', [ __CLASS__, 'addTaxonomy' ], 0);
		add_theme_support( 'post-thumbnails' );
		show_admin_bar(false);
		add_action('wp_ajax_welcome_form', [ __CLASS__, 'createClient' ]);
		add_action('wp_ajax_nopriv_welcome_form', [ __CLASS__, 'createClient' ]);
    }

	public static function createClient() {

		$interests = isset($_POST['interests']) ? $_POST['interests'] : array();
		$products = isset($_POST['products']) ? $_POST['products'] : array();		
		$contacts = isset($_POST['contacts']) ? $_POST['contacts'] : array();		
		$name = isset($_POST['name']) ? $_POST['name'] : '';	
		$email = isset($_POST['email']) ? $_POST['email'] : '';	
		$phone = isset($_POST['phone']) ? $_POST['phone'] : '';	

		$title = 'Новый клиент. ' . $name;
		$content = 'Указанные данные: <br> email: ' . $email . ', Телефон: '. $phone . '<br>';
		$content .= 'Предпочитаемые способы связи: ';
		foreach ($contacts as $contact) {
			$content .= $contact . ', ';
		}

		$new_client = array(
			'post_title'   => $title,
			'post_content' => $content,
			'post_status'  => 'publish',           
			'post_type'    => 'client',         
		);

		$post_id = wp_insert_post($new_client);

		wp_set_post_terms($post_id, $interests, 'interest');
		wp_set_post_terms($post_id, $products, 'products');
		$to = 'mnt_13@mail.ru'; 
		$subject = $title; 
		$message = $content; 
		$headers = array('Content-Type: text/html; charset=UTF-8'); 
	
		
		if (wp_mail($to, $subject, $message, $headers)) {
			error_log('Email sent successfully.');
		} else {
			error_log('Email failed to send.');
		}
		
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

	public static function addTaxonomy() {
		register_taxonomy('interest', 'client', array(
			'labels' => array('name' => 'Интересы'),
			'public' => true,
			'hierarchical' => true,
			'show_in_rest'  => true,
		));

		register_taxonomy('products', 'client', array(
			'labels' => array('name' => 'Продукты'),
			'public' => true,
			'hierarchical' => true,
			'show_in_rest'  => true,
		));
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

		register_post_type( 'client', array(    
			'supports' => array('title', 'editor', 'thumbnail'),			
			'rewrite' => array(
				'slug' => 'clients'
			),
			'public' => true,
			'publicly_queryable' => false,
			'show_in_rest' => true,
			'labels' => array(
				'name' => 'Клиенты',
				'add_new_item' => 'Добавить клиента',
				'edit_item' => 'Изменить клиента',
				'all_items' => 'Все клиенты',
				'singular_name' => 'Клиент'
			),
			'menu_icon' => 'dashicons-id'
		));

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

		wp_localize_script('daportal-scripts', 'daportalData', array(
			'root_url' => get_site_url(),
			'ajax_url' => admin_url('admin-ajax.php')
		));

    }
}

DigitalAgensy::init();