<?php
/*
Template Name: Contact
*/
?>

<div chi-smooth-apparition chi-class="chi-visible" id="chi-section-<?php echo $page->post_name;?>" >
    <section>
        <h1>
            <?php echo $page->post_title;?>
        </h1>
        <div>
            <?php echo $page->post_content;?>
        </div>
    </section>

    <section>
        <form class="form-horizontal" role="form" method="post" action="index.php">

            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nom et prénom" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Voter email" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Message</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="4" name="message"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <! Will be used to display an alert to the user>
                </div>
            </div>

        </form>

    </section>
</div>
<div class="chi-section-sep"></div>
