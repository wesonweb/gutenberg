<?php while( have_rows('social_media', 'option')) : the_row();
    $icon = get_sub_field('social_media_icon', 'option');
    $url = get_sub_field('social_media_link', 'option'); ?>   
        <ul class="social__icons">
            <li><a href="<?php echo $url; ?>" class="download-brochure__link">
                <img src="<?php echo esc_url($icon['url']); ?>" class="icon" alt="<?php echo esc_attr($icon['alt']); ?>" />
            </a></li>
            <?php endwhile; ?>
            <li><a href="https://facebook.com"><?php get_template_part('template-parts/facebook', 'icon'); ?></a></li>
            <li><a href="https://twitter.com"><?php get_template_part('template-parts/twitter', 'icon'); ?></a></li>
        </ul>