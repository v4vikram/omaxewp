<?php

if (!function_exists('omaxe_setup')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function omaxe_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on omaxe, use a find and replace
		 * to change 'omaxe' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('omaxe', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'menu-1' => esc_html__('Primary', 'omaxe'),
		));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('omaxe_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');


	}


	function enqueue_custom_scripts()
	{



		wp_enqueue_script('jquery-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), null, true);
		wp_enqueue_script('jquery-validate-js', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js', array(), null, true);
		wp_enqueue_script('toastr-min-js-js', 'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js', array(), null, true);
		wp_enqueue_script('owl-carousel-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), null, true);
		wp_enqueue_script('gsap-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/gsap.min.js', array(), null, true);
		wp_enqueue_script('ScrollTrigger-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/ScrollTrigger.min.js', array(), null, true);
		wp_enqueue_script('lenis-js', 'https://cdn.jsdelivr.net/npm/@studio-freight/lenis@latest/bundled/lenis.js', array(), null, true);
		wp_enqueue_script('omaxe-js', get_template_directory_uri() . '/js/omaxe.js', array('jquery'), null, true);

		// Pass the AJAX URL to the script
		wp_localize_script('omaxe-js', 'ajax_object', array(
			'ajax_url' => admin_url('admin-ajax.php')
		));
	}
	add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


	// Function to handle the form submission
	function handle_contact_form()
	{
		
		// Validate and sanitize input data
		$name = sanitize_text_field($_POST['name']);
		$email = sanitize_email($_POST['email']);
		$phone = sanitize_text_field($_POST['phone']);

		// Get the admin email address
		$admin_email = get_option('admin_email');
		error_log('Admin email: ' . $admin_email);

		// Email subject and message
		$subject = "New Contact Form Submission";
		$message = "You have received a new contact form submission:\n\n";
		$message .= "Name: $name\n";
		$message .= "Email: $email\n";
		$message .= "Phone: $phone\n";

		// Email headers
		$headers = array('Content-Type: text/plain; charset=UTF-8');

		// Send the email
		$email_sent = wp_mail($admin_email, $subject, $message, $headers);

		// Check if email was sent successfully
		if ($email_sent) {
			$response = array(
				'success' => true,
				'message' => 'Form submitted successfully!',
			);
		} else {
			$response = array(
				'success' => false,
				'message' => 'Form submission failed. Please try again later.',
			);
		}

		// Send JSON response
		wp_send_json($response);
	}
	add_action('wp_ajax_send_contact_form', 'handle_contact_form');
	add_action('wp_ajax_nopriv_send_contact_form', 'handle_contact_form');

	add_action('wp_ajax_send_contact_form', 'handle_contact_form');
	add_action('wp_ajax_nopriv_send_contact_form', 'handle_contact_form');


endif;
add_action('after_setup_theme', 'omaxe_setup');
