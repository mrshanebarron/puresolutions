<?php
/**
 * Pure Solutions Theme Functions
 */

// === Theme Setup ===
function puresolutions_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    register_nav_menus(array(
        'primary' => 'Primary Navigation',
        'footer'  => 'Footer Navigation',
    ));
}
add_action('after_setup_theme', 'puresolutions_setup');

// === Enqueue Scripts & Styles ===
function puresolutions_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Source+Sans+3:wght@300;400;500;600;700&display=swap', array(), null);

    // Theme stylesheet
    wp_enqueue_style('puresolutions-style', get_stylesheet_uri(), array(), '1.0.0');

    // Tailwind CSS CDN
    wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', array(), null, false);

    // Alpine.js
    wp_enqueue_script('alpinejs', 'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js', array(), null, true);

    // GSAP + ScrollTrigger
    wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), null, true);
    wp_enqueue_script('gsap-scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array('gsap'), null, true);
}
add_action('wp_enqueue_scripts', 'puresolutions_scripts');

// === Add defer to Alpine.js ===
function puresolutions_defer_alpine($tag, $handle, $src) {
    if ('alpinejs' === $handle) {
        return '<script defer src="' . esc_url($src) . '"></script>';
    }
    return $tag;
}
add_filter('script_loader_tag', 'puresolutions_defer_alpine', 10, 3);

// === Tailwind Config Inline ===
function puresolutions_tailwind_config() {
    ?>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#1B4D6E',
                    'primary-dark': '#15405c',
                    secondary: '#2E8B57',
                    'secondary-dark': '#257a4a',
                    accent: '#D4A843',
                    'accent-dark': '#c49a38',
                    dark: '#1a1a2e',
                    light: '#f8f6f3',
                    'text-main': '#333333',
                    'text-light': '#666666',
                },
                fontFamily: {
                    'heading': ['"Playfair Display"', 'serif'],
                    'body': ['"Source Sans 3"', 'sans-serif'],
                },
            }
        }
    }
    </script>
    <?php
}
add_action('wp_head', 'puresolutions_tailwind_config', 1);

// === Custom Post Type: Testimonials ===
function puresolutions_register_testimonials() {
    register_post_type('testimonial', array(
        'labels' => array(
            'name'          => 'Testimonials',
            'singular_name' => 'Testimonial',
        ),
        'public'       => false,
        'show_ui'      => true,
        'supports'     => array('title', 'editor', 'custom-fields'),
        'menu_icon'    => 'dashicons-format-quote',
    ));
}
add_action('init', 'puresolutions_register_testimonials');

// === Custom Post Type: Team Members ===
function puresolutions_register_team() {
    register_post_type('team_member', array(
        'labels' => array(
            'name'          => 'Team Members',
            'singular_name' => 'Team Member',
        ),
        'public'       => false,
        'show_ui'      => true,
        'supports'     => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'menu_icon'    => 'dashicons-groups',
    ));
}
add_action('init', 'puresolutions_register_team');

// === Contact Form Handler ===
function puresolutions_handle_contact() {
    if (!isset($_POST['puresolutions_contact_nonce']) || !wp_verify_nonce($_POST['puresolutions_contact_nonce'], 'puresolutions_contact_submit')) {
        wp_die('Security check failed.');
    }

    $name     = sanitize_text_field($_POST['contact_name'] ?? '');
    $email    = sanitize_email($_POST['contact_email'] ?? '');
    $phone    = sanitize_text_field($_POST['contact_phone'] ?? '');
    $company  = sanitize_text_field($_POST['contact_company'] ?? '');
    $size     = sanitize_text_field($_POST['contact_size'] ?? '');
    $message  = sanitize_textarea_field($_POST['contact_message'] ?? '');

    // For demo: store as a private post
    $post_id = wp_insert_post(array(
        'post_type'   => 'contact_submission',
        'post_title'  => 'Contact from ' . $name,
        'post_content' => $message,
        'post_status' => 'private',
    ));

    if ($post_id) {
        update_post_meta($post_id, '_contact_email', $email);
        update_post_meta($post_id, '_contact_phone', $phone);
        update_post_meta($post_id, '_contact_company', $company);
        update_post_meta($post_id, '_contact_size', $size);
    }

    // Redirect back with success
    wp_redirect(add_query_arg('contact', 'success', wp_get_referer()));
    exit;
}
add_action('admin_post_puresolutions_contact', 'puresolutions_handle_contact');
add_action('admin_post_nopriv_puresolutions_contact', 'puresolutions_handle_contact');

// === Register Contact Submissions CPT (for form storage) ===
function puresolutions_register_contact_submissions() {
    register_post_type('contact_submission', array(
        'labels' => array(
            'name'          => 'Contact Submissions',
            'singular_name' => 'Submission',
        ),
        'public'       => false,
        'show_ui'      => true,
        'supports'     => array('title', 'editor', 'custom-fields'),
        'menu_icon'    => 'dashicons-email',
    ));
}
add_action('init', 'puresolutions_register_contact_submissions');

// === Helper: Get theme image URL ===
function ps_img($filename) {
    return get_template_directory_uri() . '/images/' . $filename;
}

// === Set static front page ===
function puresolutions_set_front_page() {
    $front_page = get_page_by_path('home');
    if ($front_page) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $front_page->ID);
    }
}
add_action('after_switch_theme', 'puresolutions_set_front_page');

// === Remove admin bar for cleaner demo ===
add_filter('show_admin_bar', '__return_false');
