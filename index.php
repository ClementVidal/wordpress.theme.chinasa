<?php get_header(); ?>
<div id="chi-main" class="container">
    <div class="row">
        <div id="chi-content" class="col-md-12">
            <h1>The Main Area</h1>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                <p><?php the_content(__('(more...)')); ?></p>
                <hr>
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>
