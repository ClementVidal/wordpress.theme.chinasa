<div chi-smooth-apparition chi-class="chi-visible" id="chi-section-<?php echo $page->post_name;?>" >
    <section>
        <?php if( get_post_meta( $page->ID, 'hideTitle', true ) != 'true' ): ?>
            <h1>
                <?php echo $page->post_title;?>
            </h1>
        <?php endif; ?>

        <?php echo $page->post_content;?>
    </section>
</div>
<div class="chi-section-sep"></div>
