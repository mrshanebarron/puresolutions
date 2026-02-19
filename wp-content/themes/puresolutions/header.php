<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('font-body bg-light text-text-main'); ?> x-data="{ mobileMenu: false }">

<!-- Site Header -->
<header class="site-header bg-white/95 backdrop-blur-sm" x-data="stickyHeader()" x-init="init()" :class="{ 'scrolled': scrolled }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="<?php echo home_url(); ?>" class="flex items-center space-x-3 no-underline">
                <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <div>
                    <span class="font-heading text-xl font-bold text-navy leading-none block">Pure Solutions</span>
                    <span class="text-xs text-text-light tracking-wider uppercase font-semibold">Senior Living Consulting</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-1">
                <?php
                $nav_items = array(
                    'Home'      => home_url('/'),
                    'About'     => home_url('/about/'),
                    'Services'  => home_url('/services/'),
                    'Solutions' => home_url('/solutions/'),
                    'Packages'  => home_url('/packages/'),
                    'FAQ'       => home_url('/faq/'),
                );
                foreach ($nav_items as $label => $url) :
                    $is_current = (rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') === rtrim(parse_url($url, PHP_URL_PATH), '/'));
                    if ($label === 'Home') {
                        $is_current = (parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) === '/' || parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) === '/home/');
                    }
                ?>
                    <a href="<?php echo esc_url($url); ?>" class="px-4 py-2 text-sm font-semibold tracking-wide uppercase no-underline transition-colors duration-200 rounded <?php echo $is_current ? 'text-primary bg-primary/5' : 'text-navy hover:text-primary'; ?>">
                        <?php echo esc_html($label); ?>
                    </a>
                <?php endforeach; ?>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn-gold ml-4 !py-3 !px-6 !text-sm !tracking-wide !uppercase no-underline">
                    Contact Us
                </a>
            </nav>

            <!-- Mobile Menu Button -->
            <button @click="mobileMenu = !mobileMenu" class="lg:hidden p-2 text-navy hover:text-primary transition-colors" aria-label="Toggle menu">
                <svg x-show="!mobileMenu" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="mobileMenu" x-cloak class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenu" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="lg:hidden bg-white border-t border-gray-100 shadow-lg">
        <div class="px-4 py-4 space-y-1">
            <?php
            foreach ($nav_items as $label => $url) :
                $is_current = (rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') === rtrim(parse_url($url, PHP_URL_PATH), '/'));
                if ($label === 'Home') {
                    $is_current = (parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) === '/' || parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) === '/home/');
                }
            ?>
                <a href="<?php echo esc_url($url); ?>" class="block px-4 py-3 text-sm font-semibold tracking-wide uppercase no-underline rounded transition-colors duration-200 <?php echo $is_current ? 'text-primary bg-primary/5' : 'text-navy hover:text-primary hover:bg-gray-50'; ?>">
                    <?php echo esc_html($label); ?>
                </a>
            <?php endforeach; ?>
            <a href="<?php echo home_url('/contact/'); ?>" class="block btn-gold text-center !mt-3 no-underline">
                Contact Us
            </a>
        </div>
    </div>
</header>

<!-- Spacer for fixed header -->
<div class="h-20"></div>

<script>
function stickyHeader() {
    return {
        scrolled: false,
        init() {
            this.scrolled = window.scrollY > 20;
            window.addEventListener('scroll', () => {
                this.scrolled = window.scrollY > 20;
            });
        }
    }
}
</script>

<main>
