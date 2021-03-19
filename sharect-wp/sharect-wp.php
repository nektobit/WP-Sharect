<?php
/*
* Plugin Name: Sharect WP
* Plugin URI: https://nektobit.github.io/WP-Sharect/
* Description: A lightweight WordPress plugin to let users share their text selections to social networks.
* Version: 1.0.0
* Author: Dmitrii Nektobit
* Author URI: https://nektobit.ru
* Text Domain: sharectwp
*
* Requires at least: 5.0
* Licence: MIT
*/

add_action('wp_enqueue_scripts', 'sharectwp_add');
add_action('wp_footer', 'sharectwp_init');

function sharectwp_add()
{
    wp_enqueue_script('sharect', plugins_url('/assets/sharect.js', __FILE__), null, '1.0.0');
}

function sharectwp_config() {
    $config = "";
    return apply_filters( 'sharectwp_config_filter', $config );
}

function sharectwp_appendCustomShareButtons() {
    $config = "";
    return apply_filters( 'sharectwp_appendCustomShareButtons_filter', $config );
}

function sharectwp_init() {
    ?>
        <script type="text/javascript">
            Sharect
            .config({<?php echo sharectwp_config() ?>})
            .appendCustomShareButtons([<?php echo sharectwp_appendCustomShareButtons() ?>])
            .init();
        </script>
    <?php
}
