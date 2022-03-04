<?php 

function handel_add_woocommerce_support() {
  add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'handel_add_woocommerce_support');

function handel_css(){
  wp_register_style('handel-style', get_template_directory_uri() . '/style.css', [], '1.0.0');
  wp_enqueue_style('handel-style');
}

add_action('wp_enqueue_scripts', 'handel_css');

function executar_na_home(){
  echo 'Teste';
  echo '<h2>Segundo Titulo</h2>';
}


add_action('dentro_da_home', 'executar_na_home'
);

function mudar_titulo($titulo){
  echo '<h2>' . $titulo .'</h2>';
}

add_filter('titulo_home', 'mudar_titulo');
?>