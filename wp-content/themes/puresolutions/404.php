<?php get_header(); ?>

<section class="py-32 bg-white text-center">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <span class="font-heading text-8xl font-bold text-primary/20 block mb-4">404</span>
        <h1 class="font-heading text-3xl md:text-4xl font-bold text-dark mb-4">Page Not Found</h1>
        <p class="text-text-light text-lg mb-8">
            The page you are looking for does not exist or has been moved. Let us help you find what you need.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?php echo home_url('/'); ?>" class="btn-primary no-underline">Return Home</a>
            <a href="<?php echo home_url('/contact/'); ?>" class="btn-secondary no-underline">Contact Us</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
