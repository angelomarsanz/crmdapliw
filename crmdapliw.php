<?php
/*
Plugin Name: Crmdapliw
Plugin URI: https://dapliw.org.ve
Description: CRM para Inmobiliarias
Author: Ángel Omar Sanz
Version: 1
Author URI: https://dapliw.org.ve
*/

register_activation_hook(__FILE__, 'crmdapliw_activate');
register_deactivation_hook(__FILE__, 'crmdapliw_deactivate');

function crmdapliw_activate() {
    global $wp_rewrite;
    require_once dirname(__FILE__).'/crmdapliw_loader.php';
    $loader = new CrmdapliwLoader();
    $loader->activate();
    $wp_rewrite->flush_rules( true );
}

function crmdapliw_deactivate() {
    global $wp_rewrite;
    require_once dirname(__FILE__).'/crmdapliw_loader.php';
    $loader = new CrmdapliwLoader();
    $loader->deactivate();
    $wp_rewrite->flush_rules( true );
}
