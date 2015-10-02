<div id="chi-main" class="container">
    <div class="row">
        <div id="chi-content" class="col-md-12">

            <?php
            // Include post type specific content
            require get_template_directory() . '/inc/parts/posts/'.get_post_type().'.php';
            ?>

        </div>
    </div>
</div>
