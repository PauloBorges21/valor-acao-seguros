<?php

get_header(); ?>
    <section class="bannerhome">
        <img src="<?= $img_url; ?>/banners/banner-portfolio.jpg" alt="banner-portfolio.jpg"
             title="banner-portfolio.jpg">
    </section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_title(); ?>
    <?php the_content(); ?>

<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer() ?>