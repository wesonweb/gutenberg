<?php get_header(); ?>
	<article id="post-<?php the_ID(); ?><?php post_class(); ?> >
		<?php 
			if(have_posts()) {
				while(have_posts()) {
					the_post();
					get_template_part('template-parts/content','blog' );
				}
			}
		?>
	</article>
<?php get_footer(); ?>

