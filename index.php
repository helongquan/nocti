<?php 
/*
Plugin Name: single_page_search
Plugin URI: helongquanss.github.io
Description: this is use to be top top in website.
Author: HLQ
Author URI: helongquanss.github.io
Version: 1.0
Text Domain: single_page_search
License: nnn
License URI: helongquanss.github.io
*/

// 添加外部样式
function wpjam_add_styles_2() {
  wp_register_style('plugin_stylesheet_2', plugins_url('css/bootstrap.min.css', __FILE__));
  wp_enqueue_style('plugin_stylesheet_2');
}
add_action( 'wp_enqueue_scripts', 'wpjam_add_styles_2' );

function wpjam_add_styles_3() {
  wp_register_style('plugin_stylesheet_3', plugins_url('css/jumbotron-narrow.css', __FILE__));
  wp_enqueue_style('plugin_stylesheet_3');
}
add_action( 'wp_enqueue_scripts', 'wpjam_add_styles_3' );


function wpjam_add_scripts_5() {
  wp_register_script('nocti_plugin_script_5', plugins_url('js/anchor.js', __FILE__), array('jquery'),'1.1', true);
  wp_enqueue_script('nocti_plugin_script_5');
}
add_action( 'wp_enqueue_scripts', 'wpjam_add_scripts_5' );

function wpjam_add_scripts_6() {
  wp_register_script('nocti_plugin_script_6', plugins_url('js/jquery.full-search.js', __FILE__));
  wp_enqueue_script('nocti_plugin_script_6');
}
add_action( 'wp_enqueue_scripts', 'wpjam_add_scripts_6' );


function single_page_search(){
	echo '<div class="jumbotron" style="position: fixed; right:10px; bottom:40%; z-index:1000;width:365px"><form><div class="form-group form-group-search"><h3><label for="exampleInputEmail1">搜索内容</label></h3><input type="search" class="form-control" id="search" placeholder="请输入本页面内容"><div class="search-result" style="display:none"><h4>标题</h4><ul class="result-section"><li><a href="">dsfsdfsdf</a></li><li><a href="">sdfsdf</a></li></ul><h4>内容</h4><ul class="result-content"><li><a href="">sdfsdf</a></li><li><a href="">sdfsd</a></li></ul></div></div></form></div>';
echo '<script type="text/javascript">$(function() {$("#search").fullsearch({highlight: true,search_data: ".search-result",search_title: ".result-section",search_content: ".result-content",list: "#result-list",nodata: "未找到相关数据",});});</script>';
}
add_action('wp_footer',single_page_search);
add_filter ('wp_footer',single_page_search);
 ?>