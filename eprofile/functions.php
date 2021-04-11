<?php
  function college_files(){
  
    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700');
    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css?family=Muli:400,400i,800,800i');
    wp_enqueue_style('mystyles', get_theme_file_uri('/css/styles.css'));

    wp_enqueue_script('myjs1', '//use.fontawesome.com/releases/v5.15.1/js/all.js', NULL, '1.0', true);
    wp_enqueue_script('myjs2', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', NULL, '1.0', true);
    wp_enqueue_script('myjs3', '//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', NULL, '1.0', true);
    wp_enqueue_script('myjs4', '//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', NULL, '1.0', true);
    wp_enqueue_script('myjs5', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);
    
  }
  add_action('wp_enqueue_scripts','college_files');

  function college_features(){
    add_theme_support('title-tag');
  }
  add_action('after_setup_theme','college_features');
 ?>
