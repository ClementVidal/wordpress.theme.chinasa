<div id="sidebar">

    <div id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <?php _e('Categories', 'chinasa'); ?>
                </a>
            </h4>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
            </div>
        </div>

        <div class="panel panel-default">
            <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <?php _e('Archives', 'chinasa'); ?>
                </a>
            </h4>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <?php wp_get_archives('type=monthly'); ?>
            </div>
        </div>
    </div>



</div>
