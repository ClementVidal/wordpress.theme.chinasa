<?php

function chi_skill_metabox_cb( $post )
{
    $values = get_post_custom( $post->ID );
    $chi_skill_level = isset( $values['chi_skill_level'] ) ? esc_attr( $values['chi_skill_level'][0] ) : "";
    $chi_skill_minor = isset( $values['chi_skill_minor'] ) ? esc_attr( $values['chi_skill_minor'][0] ) : "";

    // We'll use this nonce field later on when saving.
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
?>
    <p>
        <label for="chi_skill_level">Skill Level</label>
        <input type="number" name="chi_skill_level" id="chi_skill_level" value="<?php echo $chi_skill_level; ?>" />
    </p>
    <p>
        <label for="chi_skill_level">Is Minor Skill</label>
        <input type="checkbox" name="chi_skill_minor" id="chi_skill_minor" value="Minior skill"<?php checked( $chi_skill_minor, 'on' ); ?>/>
    </p>

<?php
}

function chinasa_add_metabox()
{
    add_meta_box(
    'chi-skill-meta-box',
    'Skill informations',
    'chi_skill_metabox_cb',
    'skill',
    'normal',
    'high' );
}
add_action( 'add_meta_boxes', 'chinasa_add_metabox' );

function chinasa_save_metabox( $post_id )
{
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;

    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;

    // Make sure your data is set before trying to save it
    if( isset( $_POST['chi_skill_level'] ) )
        update_post_meta( $post_id, 'chi_skill_level', $_POST['chi_skill_level'] );

    $chk = isset( $_POST['chi_skill_minor'] ) && $_POST['chi_skill_minor'] ? 'on' : 'off';
    update_post_meta( $post_id, 'chi_skill_minor', $chk );

}
add_action( 'save_post', 'chinasa_save_metabox' );

add_action('do_meta_boxes', 'change_image_box');
function change_image_box()
{
    //remove_meta_box( 'postimagediv', 'skill', 'side' );
    add_meta_box('postimagediv', __('Skill Icon'), 'post_thumbnail_meta_box', 'skill', 'normal', 'high');
}
