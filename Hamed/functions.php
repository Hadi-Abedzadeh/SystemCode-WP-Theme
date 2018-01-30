<?php
function tel_addr(){
	register_sidebar(array('name' => 'آدرس و تلفن','id' => 'tel_addr'));
}

function map(){
	register_sidebar(array('name' => 'نقشه','id' => 'map'));
}

function about_1(){
	register_sidebar(array('name' => 'درباره ما_1','id' => 'about_1'));
}

function about_2(){
	register_sidebar(array('name' => 'درباره ما_2','id' => 'about_2'));
}

function about_3(){
	register_sidebar(array('name' => 'درباره ما_3','id' => 'about_3'));
}

function service_1(){
	register_sidebar(array('name' => 'خدمات_1','id' => 'service_1'));
}

function service_2(){
	register_sidebar(array('name' => 'خدمات_2','id' => 'service_2'));
}

function service_3(){
	register_sidebar(array('name' => 'خدمات_3','id' => 'service_3'));
}

function service_4(){
	register_sidebar(array('name' => 'خدمات_4','id' => 'service_4'));
}

function cooperation_1(){
	register_sidebar(array('name' => 'همکاری_1','id' => 'cooperation_1'));
}

function cooperation_2(){
	register_sidebar(array('name' => 'همکاری_2','id' => 'cooperation_2'));
}

	add_action('widgets_init', 'tel_addr');
	add_action('widgets_init', 'map');
	add_action('widgets_init', 'about_1');
	add_action('widgets_init', 'about_2');
	add_action('widgets_init', 'about_3');
	
	add_action('widgets_init', 'service_1');
	add_action('widgets_init', 'service_2');
	add_action('widgets_init', 'service_3');
	add_action('widgets_init', 'service_4');

	add_action('widgets_init', 'cooperation_1');
	add_action('widgets_init', 'cooperation_2');
	
?>