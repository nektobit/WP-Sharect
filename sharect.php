<?php
/*
* Plugin Name: Sharect - share text selections
* Plugin URI: https://nektobit.ru
* Description: A lightweight WordPress plugin to let users share their text selections to social networks. Based on https://estevanmaito.github.io/sharect/
* Version: 1.0.0
* Author: Dmitrii Nektobit
* Author URI: https://nektobit.ru
* Text Domain: sharect
*
* Requires at least: 5.0
* Licence: MIT
*/

add_action('wp_enqueue_scripts', 'add_and_init');

function add_and_init()
{
    wp_enqueue_script('sharect', plugins_url('/assets/sharect.js', __FILE__), null, '1.0.0');
    wp_enqueue_script(
        'sharect-init',
        plugins_url('/assets/init.js', __FILE__),
        array('sharect'),
        '1.0.0',
        true
    );
}
