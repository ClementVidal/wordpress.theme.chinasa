<?php
/*
Template Name: Portfolio
*/
?>

<div chi-resize-to-full-screen chi-smooth-apparition ng-cloak id="chi-section-<?php echo $page->post_name;?>" >
    <section>
        <h1>
            <?php echo $page->post_title;?>
        </h1>

        <?php echo $page->post_content;?>
    </section>
</div>
