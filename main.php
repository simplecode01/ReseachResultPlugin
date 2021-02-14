<?php
/*
Plugin Name: Researcher Result HUMIC
Plugin URI: https://github.com/simplecode01/ReseacherResultPlugin
Description: This plugin use to input Reseacher Result
Version: 1.1
Author: simplecode01
Author URI: https://simplecode01.wordpress.com
*/
if(!defined('ABSPATH')){
    die;
}

define('ResearcherResult_Version', '1.1');

require_once plugin_dir_path(__file__).'includes/class-reseacher-result-init.php';

function ResearcherResult_activate(){
    ResearcherResult_Init::activate();
}
function ResearcherResult_deactivate(){
    ResearcherResult_Init::deactivate();
}

register_activation_hook(__file__,'ResearcherResult_activate');
register_deactivation_hook(__file__,'ResearcherResult_deactivate');

require_once plugin_dir_path(__file__).'includes/class-reseacher-result.php';

function initi(){
    if(class_exists('ResearcherResult')){
        $dev = new ResearcherResult();
        $dev->run();
    }
};

initi();