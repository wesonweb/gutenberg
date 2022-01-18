<?php

/**
 * 
 * Custom gutenberg functions
 */

//  add colors to Gutenberg cover photo option
function wes_gutenberg_default_colors()
{

    add_theme_support(
        'editor-color-palette', //change colors
        array(

            array(
                // create array to show attributes for colors
                'name'          =>  'White',
                'slug'          =>  'white',
                'color'         =>  '#ffffff'
            ),
            array(
                'name'          =>  'Black',
                'slug'          =>  'black',
                'color'         =>  '#000000'
            )
        )
    );

    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name'      =>  'Default',
                'slug'      =>  'default',
                'size'      =>  16
            ),

            array(
                'name'      =>  'Medium',
                'slug'      =>  'medium',
                'size'      =>  24
            ),

            array(
                'name'      =>  'Large',
                'slug'      =>  'large',
                'size'      =>  32
            )
        )
    );
}

add_action('init', 'wes_gutenberg_default_colors');
