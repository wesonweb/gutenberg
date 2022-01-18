<?php 

// remove the WordPress version number from admin footer
function remove_admin_wordpress_version () {
    return ' ';
}
add_filter( 'update_footer', 'remove_admin_wordpress_version', 50 );

//remove the 'thank you for creating with WordPress' from bottom of admin area
function remove_footer_admin () {
    echo '<p>Add a footer message in function-templates/wordpress-filters.php</p>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

// enable shortcodes for text widget
add_filter( 'widget_text', 'do_shortcode' );

// shorten excerpt length
function set_custom_excerpt_length ( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'set_custom_excerpt_length', 100, 1 );

function wsds_defer_scripts( $tag, $handle, $src ) {

// The handles of the enqueued scripts we want to defer
    $defer_scripts = array( 
    'admin-bar',
    );

    if ( in_array( $handle, $defer_scripts ) ) {
    return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
    }

    return $tag;
} 
add_filter( 'script_loader_tag', 'wsds_defer_scripts', 10, 3 );


// removes author column from posts
// can also remove cb, title, author, categories, tags, comments, date
function wp_manage_posts_columns( $columns ) {
    unset( $columns['comments'] );
	return $columns;
}
add_filter( 'manage_posts_columns', 'wp_manage_posts_columns' );
// for custom posts use:
// manage_{$post_type}_posts_columns where { $post_type } is custom post ID name 


// remove some social media accounts and add others
// function user_contactmethods_update( $contactmethods ) {
//     unset( $contactmethods['yim'] );
// 	unset( $contactmethods['aim'] );
// 	unset( $contactmethods['jabber'] );
// 	$contactmethods['facebook']		= 'Facebook'; 
// 	$contactmethods['twitter']		= 'Twitter';
// 	$contactmethods['gplus']		= 'Google+';
// 	$contactmethods['linkedin']		= 'LinkedIn';
// 	$contactmethods['instagram']	= 'Instagram';
// 	return $contactmethods;
// }
// add_filter( 'user_contactmethods', 'user_contactmethods_update' );




// PRACTICE 2 - Login Redirect
// function wphooks_members_login_redirect( $redirect_to, $request, $user ) {


//     if ( isset( $user->roles ) && is_array( $user->roles ) ) {

//         if ( in_array( 'administrator', $user->roles ) ) {

//             return home_url( '/blog' );

//         } else {

//             return $redirect_to;
//         }

//     }

//     return;
// }
// add_filter( 'login_redirect', 'wphooks_members_login_redirect', 10, 3 );

// // PRACTICE 3 - caldera_forms_render_field_type
// function wphooks_change_caldera_button_class( $field_html ) {

//     $new_field_html = str_replace( 'btn', 'button', $field_html  );
//     return $new_field_html;

// };

// // add the filter
// add_filter( 'caldera_forms_render_field_type-button', 'wphooks_change_caldera_button_class', 10, 1 );

