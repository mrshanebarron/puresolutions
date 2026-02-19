<?php get_header(); ?>

<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="mb-12">
                <h2 class="font-heading text-3xl font-bold text-dark mb-4">
                    <a href="<?php the_permalink(); ?>" class="no-underline hover:text-primary transition-colors"><?php the_title(); ?></a>
                </h2>
                <div class="text-text-light leading-relaxed">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>
