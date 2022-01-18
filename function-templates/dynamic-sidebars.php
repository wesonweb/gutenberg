<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starter_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Main sidebar', 'starter-theme' ),
		'id'            => 'main-sidebar',
		'description'   => esc_html__( 'Add widgets for main sidebar.', 'starter-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Page sidebar', 'starter-theme' ),
		'id'            => 'page-sidebar',
		'description'   => esc_html__( 'Add widgets for page sidebar.', 'starter-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'front page sidebar', 'starter-theme' ),
		'id'            => 'front-page',
		'description'   => esc_html__( 'Add widgets for the front page sidebar.', 'starter-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'starter_theme_widgets_init' );

?>
