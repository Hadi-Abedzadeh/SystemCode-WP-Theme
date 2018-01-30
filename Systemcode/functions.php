<?php
error_reporting(0);

function onliner_show_post_meta(){
  echo '<div class="container row">';
	echo 'دسته بندی: ';
	echo "<div class='text-right'>".the_category(', ')."</div>";

  echo "<div class='pull-left'>".the_tags('کلمات کلیدی: ', ', ').'</div>';
    echo '</div>';
}

function rand_color() {
  return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}


  add_theme_support('post-thumbnails');
  the_post_thumbnail(array(100,100));
  remove_action('wp_head','wp_generator'); // Remove wordpress version in source



function SbWidgets() {
  register_sidebar( array(
    'name' => 'Main Sidebar',
    'id' => 'sidebar-1',
    'description' => 'The main sidebar appears on the right on each page except the front page template',
    'before_widget' => '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 jumbotron pull-right ">',
    'after_widget' => '</div><div class="clearfix"></div>',
    'before_title' => '<div class="widget-title">',
    'after_title' => '</div>',
  ) );

  register_sidebar( array(
    'name' => 'Main2',
    'id' => 'sidebar-2',
    'description' => 'Appears on the static front page template',
    'before_widget' => '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 jumbotron pull-right ">',
    'after_widget' => '</div><div class="clearfix"></div>',
    'before_title' => '<div style="font-size:120%;">',
    'after_title' => '</div>',
  ) );
}

add_action( 'widgets_init', 'SbWidgets');

