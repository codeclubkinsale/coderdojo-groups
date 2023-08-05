<?php
/**
 * Register shortcodes
 *
 * @link https://developer.wordpress.org/reference/functions/add_role/
 * @link https://developer.wordpress.org/reference/functions/remove_role/
 *
 * @package CoderDojo
 * @subpackage CoderDojo_Theme_One
 * @since 1.0.0
 */
function cdgroups_custom_shortcodes() {
	add_shortcode( 'groups', 'groups_shortcode' );
}
add_action( 'init', 'cdgroups_custom_shortcodes' );

/**
 * The [wporg] shortcode.  Accepts a title and will display a box.
 *
 * @param array  $atts     Shortcode attributes. Default empty.
 * @param atring $content  Shortcode content. Default null.
 * @param string $tag      Shortcode tag (name). Default empty.
 *
 * @return string
 */
function groups_shortcode( $atts = [], $content = null, $tag = '' ) {
    // normalize attribute keys, lowercase
    $atts = array_change_key_case( (array) $atts, CASE_LOWER );
 
    // override default attributes with user attributes
    $groups_atts = shortcode_atts(
        array(
            'group' => 'team-members'
        ), $atts, $tag
    );

    $args = array(
        'post_type'		=> $groups_atts['group'],
        'numberposts' => -1,
        'order' => 'ASC'
    );
    $posts = get_posts( $args );
 
    // start box
    $o = '<div id="user-profiles" class="alignwide">';
    foreach($posts as $post) {
        $post_url = esc_attr( get_post_meta($post->ID, 'website-text', true)); 
        $post_linkedin = esc_attr( get_post_meta($post->ID, 'linkedin-text', true)); 
        $post_twitter = esc_attr( get_post_meta($post->ID, 'twitter-text', true)); 

        $o .= '<button id="' . $post->ID . '" onClick="user_button_click(this.id)" class="user-profile">';
        $o .= '<img class="user-image" src="' . get_the_post_thumbnail_url($post->ID) . '" />';
        $o .= '<div class="user-content">';
        $o .= '<div>' . get_the_title( $post->ID ) . '</div>';
        $o .= '<div>' . get_post_meta($post->ID, 'position-text', true). '</div>';
        $o .= '</div>';
        $o .= '</button>';

        $o .= '<div id="modal-' . $post->ID . '" class="modal-dialog"><div class="modal-content">';
        $o .= '<div class="modal-header"><button id="span-' . $post->ID . '" type="button" class="close" onClick="close_span_click(this.id)" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button><h2 class="modal-title">' . get_the_title( $post->ID ) . '</h2></div>';
        $o .= '<div class="modal-body"><img class="user-image" src="' . get_the_post_thumbnail_url($post->ID) . '" /><div>' . $post->post_content . '</div></div>';
        $o .= '<div class="modal-footer"><ul class="user-links social-links">';
        if ($post_url) :
            $o .= '<li><a href="' . $post_url . '"><p></p></a></li>';
        endif;
        if ($post_linkedin) :
            $o .= '<li><a href="' . $post_linkedin . '"><p></p></a></li>';
        endif;
        if ($post_twitter) :
            $o .= '<li><a href="' . $post_twitter . '"><p></p></a></li>';
        endif;
        $o .= '</ul>';
        $o .= '<button id="button-' . $post->ID . '" type="button" class="btn btn-default" onClick="close_button_click(this.id)" data-dismiss="modal">Close</button>';
        $o .= '</div></div></div>';
    }
 
    // end box
    $o .= '</div>';
 
    // return output
    return $o;
}

 
