<?php
/**
 * newland functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package newland
 */
 
require get_template_directory() . '/inc/redux-options.php';

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'newland_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function newland_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on newland, use a find and replace
		 * to change 'newland' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'newland', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size('offers-thumb', 312, 216, false);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'header-menu' => esc_html__( 'Меню в шапке', 'newland' ),
				'footer-menu-1' => esc_html__( 'Меню в подвале первый столбец', 'newland' ),
				'footer-menu-2' => esc_html__( 'Меню в подвале второй столбец', 'newland' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

 
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 120,
				'width'       => 240,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'newland_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function newland_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'newland' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'newland' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'newland_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function newland_scripts() {
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css' );
    wp_enqueue_style( 'fancyboxjquery', get_template_directory_uri() . '/css/jquery.fancybox.css');
   
    
    wp_enqueue_style( 'fancy-min', get_template_directory_uri() . '/css/jquery.fancybox.min.css'  );
     
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css' );
      
    wp_enqueue_style( 'your-land', get_template_directory_uri() . '/css/your-land.css' );
         
             
    wp_enqueue_style( 'contacts', get_template_directory_uri() . '/css/contacts.css' );
    
    wp_enqueue_style( 'get-objects', get_template_directory_uri() . '/css/get-objects.css' );
       
    wp_enqueue_style( 'invest', get_template_directory_uri() . '/css/invest.css' );
    
    wp_enqueue_style( 'news', get_template_directory_uri() . '/css/news.css' );
    
    wp_enqueue_style( 'offer-today', get_template_directory_uri() . '/css/offer-today.css' );
    
    wp_enqueue_style( 'offer', get_template_directory_uri() . '/css/offers.css' );
    
    wp_enqueue_style( 'participation', get_template_directory_uri() . '/css/participation.css' );
    
    wp_enqueue_style( 'pre-order', get_template_directory_uri() . '/css/pre-order.css' );
    
    wp_enqueue_style( 'reviews', get_template_directory_uri() . '/css/reviews.css' );
    
    wp_enqueue_style( 'single', get_template_directory_uri() . '/css/single.css' );
    
    wp_enqueue_style( 'news-simple', get_template_directory_uri() . '/css/news-simple.css' );
         
     wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/styles.css' );
    
    wp_enqueue_script('js', get_template_directory_uri() .  '/js/jquery.fancybox.js' , [], '1.0', true);
     
    wp_enqueue_script('js2', get_template_directory_uri() .  '/js/jquery.fancybox.min.js
' , [], '1.0', true);

  wp_enqueue_script('js2', get_template_directory_uri() .  '/js/jqueryrotate.2.1.js

' , [], '1.0', true);

  wp_enqueue_script('js3', get_template_directory_uri() .  '/js/jquery-1.11.3.min.js

' , [], '1.0', true);

  wp_enqueue_script('js4', get_template_directory_uri() .  '/js/jquery-3.6.0.min.js


' , [], '1.0', true);

  wp_enqueue_script('js5', get_template_directory_uri() .  '/js/main.js


' , [], '1.0', true);

  wp_enqueue_script('js6', get_template_directory_uri() .  '/js/slick.js


' , [], '1.0', true);

 wp_enqueue_script('js7', get_template_directory_uri() .  '/js/slide_up.js


' , [], '1.0', true);
     
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'newland_scripts' );


 /** Custom Types */
 
 
 add_action('init', 'newland_news');
function newland_news(){
	register_post_type('news', array(
		'labels'             => array(
			'name'               => 'Новости',  
			'singular_name'      => 'Новости',  
			'add_new'            => 'Добавить новость',
			'add_new_item'       => 'Добавть новость',
			'edit_item'          => 'Редактировать новость',
			'new_item'           => 'Новая новость',
			'view_item'          => 'Просмотреть новость',
			'search_items'       => 'Искать новость',
			'not_found'          => 'Ничего не найдено',
			'not_found_in_trash' => 'В корзине ничего не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Новости'

		  ),
		'public'             => true,
		'menu_icon'           => 'dashicons-list-view',
		'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
		'has_archive'        => true,
	 	'supports'           => array('title','editor','author','excerpt', 'thumbnail'),
	 	
	 
		 
	) );
	
 
}


add_action('init', 'newland_reviews');
function newland_reviews(){
	register_post_type('reviews', array(
		'labels'             => array(
			'name'               => 'Отзывы',  
			'singular_name'      => 'Отзывы',  
			'add_new'            => 'Добавить отзыв',
			'add_new_item'       => 'Добавть отзыв',
			'edit_item'          => 'Редактировать отзыв',
			'new_item'           => 'Новый отзыв',
			'view_item'          => 'Просмотреть отзыв',
			'search_items'       => 'Искать отзыв',
			'not_found'          => 'Ничего не найдено',
			'not_found_in_trash' => 'В корзине ничего не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Отзывы'

		  ),
		'public'             => true,
		'menu_icon'           => 'dashicons-format-status',
		'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
		'has_archive'        => true,
 		'supports'           => array('title','editor','author', 'thumbnail', 'excerpt'),
		 
	) );
	
}
add_action('add_meta_boxes', 'add_meta_box_to_review');
function add_meta_box_to_review()
  {
    add_meta_box(
      'newland_settings',
       esc_html__('К какому объекту этот отзыв?', 'newland'),
       'metabox_offers_html',
      'reviews',
      'normal',
      'default'
    );
  }

function metabox_offers_html($post)
  {
    
    echo '<p>';
    $offers = get_posts(array('post_type' => 'offers', 'numberposts' => -1));
    $review_meta = get_post_meta($post->ID, 'offer', true);

    if ( $offers) {
      echo '<label for="offer">' . esc_html__('Выберите объект', 'teovin-core') . '</label>';
      echo '<select class="" name="offer" id="offer">';
      echo '<option value="">Ничего не выбрано</option>';
      foreach ( $offers as  $offer) {
        echo '<option value="' . $offer->ID . ' " ' . selected($offer->ID, $review_meta, false) . '>' . $offer->post_title . '</option>';
      }
      echo '</select></p>';
    }
  }
 
 add_action('save_post',  'save_metabox', 10, 2);
 function save_metabox($post_id, $post)
  {
    if (is_null($_POST['offer'])) {
      delete_post_meta($post_id, 'offer');
    } else {
      update_post_meta($post_id, 'offer', sanitize_text_field($_POST['offer']));
    }

    return $post_id;
  }

add_action('init', 'newland_offers');
function newland_offers(){
	register_post_type('offers', array(
		'labels'             => array(
			'name'               => 'Наши проекты',  
			'singular_name'      => 'Проекты',  
			'add_new'            => 'Добавить проекты',
			'add_new_item'       => 'Добавть проект',
			'edit_item'          => 'Редактировать проект',
			'new_item'           => 'Новый проект',
			'view_item'          => 'Просмотреть проект',
			'search_items'       => 'Искать проект',
			'not_found'          => 'Ничего не найдено',
			'not_found_in_trash' => 'В корзине ничего не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Все проекты'

		  ),
		'public'             => true,
		'menu_icon'           => 'dashicons-admin-multisite',
		'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
		'has_archive'        => true,
 		'supports'           => array('title','editor','author','excerpt', 'thumbnail'),
 		'taxonomies'            => array( 'category', 'post_tag' ),
 			) );
 		
  
	
 
}

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});


// add_action('publish_post','email_me');

// function email_me($post_id)
// {

// 	$subject = 'Hello! We have a new post in our website! ';
	
// 	$post_title = get_the_title( $post_id );
// 	$post_url = get_permalink( $post_id );

// 	$message = "Read a new post in our website:\n\n";
// 	$message .= $post_title . ": " . $post_url;

// 	// Send email to admin.
// 	wp_mail( 'elenaldomingos@gmail.com', $subject, $message );	
// }

