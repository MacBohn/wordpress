<?php

  function register_my_menu() {
    register_nav_menu('blog-menu',__( 'Blog Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

?>
