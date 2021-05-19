<?php

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a intro block.
        acf_register_block_type(array(
            'name'              => 'intro',
            'title'             => __('Intro'),
            'description'       => __(''),
            'render_template'   => 'template-parts/intro.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'intro', 'quote' ),
        ));

        // activity-performance
        acf_register_block_type(array(
            'name'              => 'activity_performance',
            'title'             => __('Activity performance'),
            'description'       => __(''),
            'render_template'   => 'template-parts/activity/performance.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'performance', 'quote' ),
        ));
    }
}
?>
