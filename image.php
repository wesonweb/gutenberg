<?php get_header(); ?>
	<article <?php post_class(); ?> >
		<?php 
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();	
        ?> 
            <article class="container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php
                    if ( is_singular() ) :
                        the_title( '<h1 class="entry-title">', '</h1>' );
                    else :
                        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    endif;
                    if ( 'post' === get_post_type() ) :
                        ?>
                        <div class="entry-meta">
                            <?php
                            //starter_theme_posted_on();
                            //starter_theme_posted_by();
                            ?>
                        </div><!-- .entry-meta -->
                    <?php endif; ?>
                </header><!-- .entry-header -->
                <?php starter_theme_post_thumbnail(); ?>
                <div class="entry-content">
                    <?php ?>
                        <p>
                            <img src="<?php echo esc_url( $post->guid ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                        </p>
                    <?php the_content( sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'starter-theme' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    ) );
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'starter-theme' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div><!-- .entry-content -->
                <footer class="entry-footer">
                    <?php starter_theme_entry_footer(); ?>
                </footer><!-- .entry-footer -->
            </article><!-- #post-<?php the_ID(); ?> -->
        <?php endwhile; endif; ?> <!-- ends the loop -->
	</article>
<?php get_footer(); ?>