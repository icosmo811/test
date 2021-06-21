<?php
/**
 * mijobrands functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mijobrands
 */


if ( ! function_exists( 'mijobrands_setup' ) ) :

	function mijobrands_setup() {

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'mijobrands' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'mijobrands_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
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
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'mijobrands_setup' );

// Template parts
function templatePart_navigation_nav() {
	get_template_part( 'template-parts/navigation/nav');
}
function templatePart_excerpt_excerpt() {
	get_template_part( 'template-parts/excerpt/excerpt');
}

// Scrips propios
wp_enqueue_script( 'themejs', get_template_directory_uri() .'/assets/js/theme.js', array('jquery'), '', 1);

// VueJS
wp_enqueue_script('vue', 'https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js', [], '2.5.17');
wp_enqueue_script('vuecomponent', get_template_directory_uri() .'/assets/js/component.js', [], '1.0', true);           
wp_enqueue_script('vueapp', get_template_directory_uri() .'/assets/js/main.js', [], '1.0', true);      

// Función AJAX para envío de correo
function example_ajax_request() {
	require 'inc/PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->IsSMTP();
	$mail->Mailer = "smtp";
	$mail->SMTPDebug  = 1;  
	$mail->SMTPAuth   = TRUE;
	$mail->SMTPSecure = "tls";
	$mail->Port       = 587;
	$mail->Host       = "smtp.gmail.com";
	$mail->Username   = "mailsendtests8@gmail.com";
	$mail->Password   = "05cosmo11";
	$mail->IsHTML(true);
	$mail->CharSet = 'utf8';
	$mail->AddAddress($_POST['correo'], $_POST['nombre']);
	$mail->SetFrom("mailsendtests8@gmail.com", "Carlos Ochoa - pruebas de envío");
	$mail->AddReplyTo("mailsendtests8@domain", "Carlos Ochoa - pruebas de envío");
	$mail->Subject = "Landing page - prueba técnica web developer";
	$content = "<p>Gracias por utilizar el formulario de contacto, los datos que ingresaste son los siguientes:</p>
				<p><strong>Nombre:</strong> ".$_POST['nombre']."</p>
				<p><strong>Correo:</strong> ".$_POST['correo']."</p>
				<p><strong>Mensaje:</strong> ".$_POST['mensaje']."</p>";
	$mail->MsgHTML($content); 
	if(!$mail->Send()) {
	  echo "Error while sending Email.";
	  var_dump($mail);
	} else {
	  echo "Email sent successfully";
	}
	
}
 
add_action( 'wp_ajax_example_ajax_request', 'example_ajax_request' );
add_action( 'wp_ajax_nopriv_example_ajax_request', 'example_ajax_request' );

function example_ajax_enqueue() {
	wp_enqueue_script(
		'example-ajax-script',
		get_template_directory_uri() . '/assets/js/send-mail.js',
		array('jquery')
	);
	wp_localize_script(
		'example-ajax-script',
		'example_ajax_obj',
		array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) )
	);
}
add_action( 'wp_enqueue_scripts', 'example_ajax_enqueue' );

