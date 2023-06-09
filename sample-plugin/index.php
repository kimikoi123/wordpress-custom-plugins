<?php


/*
    Plugin Name: Sample Plugin
    Description: Give your readers a multiple choice question.
    Version: 1.0
    Author: Brad
    Author URI: https://www.udemy.com/user/bradschiff/
*/

if ( ! defined('ABSPATH')) exit;

class AreYouPayingAttention {
    function __construct() {
        add_action('enqueue_block_editor_assets', array($this, 'adminAssets'));
    }

    function adminAssets() {
        wp_enqueue_script('ournewblocktype', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks'));
    }
}

$areYouPayingAttention = new AreYouPayingAttention();