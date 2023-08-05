<?php
/**
 * Add custom meta boxes
 *
 * @link https://developer.wordpress.org/reference/functions/add_meta_box/
 * @link https://developer.wordpress.org/reference/functions/add_action/
 *
 * @package CoderDojo
 * @subpackage CoderDojo_Theme_One
 * @since 1.0.0
 */
function cdgroups_custom_meta_boxes() {

   add_meta_box( 
    'group-user-information',
    'Information',
    'group_user_information_callback',
    array('team-members', 'colleagues', 'funders', 'partners', 'regional-bodies' ),
    'side',
    'high'
    );
}
add_action( 'add_meta_boxes', 'cdgroups_custom_meta_boxes', 10, 2 );

function group_user_information_callback(){
	
    global $post;
    ?>
    <div class="components-base-control css-wdf2ti-Wrapper e1puf3u0">
        <div class="components-base-control__field css-11vcxb9-StyledField e1puf3u1">
            <?php if($post->post_type == "team-members" || $post->post_type == "colleagues" ) : ?>
                <label for="meta-text" class="components-base-control__label css-pezhm9-StyledLabel e1puf3u2"><?php _e( 'Position', 'coderdojo' )?></label>
                <input type="text" name="position-text" id="position-text" class="components-text-control__input" value="<?php echo get_post_meta($post->ID, 'position-text', true)?>" />
            <?php else: ?>
                <label for="meta-text" class="components-base-control__label css-pezhm9-StyledLabel e1puf3u2"><?php _e( 'Website', 'coderdojo' )?></label>
                <input type="text" name="website-text" id="website-text" class="components-text-control__input" value="<?php echo get_post_meta($post->ID, 'website-text', true)?>" />
            <?php endif; ?>
        </div> 
        <div class="components-base-control__field css-11vcxb9-StyledField e1puf3u1">
            <label for="meta-text" class="components-base-control__label css-pezhm9-StyledLabel e1puf3u2"><?php _e( 'LinkedIn Profile', 'coderdojo' )?></label>
            <input type="text" name="linkedin-text" id="linkedin-text" class="components-text-control__input" value="<?php echo get_post_meta($post->ID, 'linkedin-text', true)?>" />
        </div>  
        <div class="components-base-control__field css-11vcxb9-StyledField e1puf3u1">
            <label for="meta-text" class="components-base-control__label css-pezhm9-StyledLabel e1puf3u2"><?php _e( 'Twitter Profile', 'coderdojo' )?></label>
            <input type="text" name="twitter-text" id="twitter-text" class="components-text-control__input" value="<?php echo get_post_meta($post->ID, 'twitter-text', true)?>" />
        </div>          
    </div>
 
    <?php
}


function save_group_user_information_meta(){
    global $post;
 
    //$taxonomy = get_custom_post_type_taxonomy($post->post_type);
    if ($post->post_type == "team-members" || $post->post_type == "colleagues") :
        if(isset($_POST["position-text"])):
            update_post_meta($post->ID, 'position-text', $_POST["position-text"]); 
        endif;
    else:
        if(isset($_POST["website-text"])): 
            update_post_meta($post->ID, 'website-text', $_POST["website-text"]); 
        endif;
    endif;

    if(isset($_POST["linkedin-text"])): 
        update_post_meta($post->ID, 'linkedin-text', $_POST["linkedin-text"]); 
    endif;

    if(isset($_POST["twitter-text"])): 
        update_post_meta($post->ID, 'twitter-text', $_POST["twitter-text"]); 
    endif;
}
add_action('save_post', 'save_group_user_information_meta');
