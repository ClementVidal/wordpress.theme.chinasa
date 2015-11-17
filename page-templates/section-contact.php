<?php
/*
Template Name: Contact
*/
?>



<div chi-resize-to-full-screen chi-smooth-apparition chi-class="chi-visible" id="chi-section-<?php echo $page->post_name;?>" >
    <section>
        <h1>
            <?php echo $page->post_title;?>
        </h1>

        <?php
        $content = apply_filters( 'the_content', $page->post_content );
        $content = str_replace( ']]>', ']]&gt;', $content );
        echo $content;
        ?>
    </section>

</div>


<!--
<form >
    <div>
        <label for="name">Name</label>
        <div>
            <input type="text" class="form-control" id="name" placeholder="Nom et prénom" >
        </div>
    </div>

    <div>
        <label for="email">Email</label>
        <div>
            <input type="email" class="form-control" id="email" placeholder="Votre email"  >
        </div>
    </div>

    <div>
        <label for="message">Message</label>
        <div>
            <textarea class="form-control" rows="8" id="message"></textarea>
        </div>
    </div>

    <div>
        <div class="col-md-offset-2">
            <button type="submit" value="Send" class="btn btn-secondary"> Envoyer ! </button>
        </div>
    </div>

</form>
-->
