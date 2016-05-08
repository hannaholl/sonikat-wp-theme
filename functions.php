<?php
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


if( ! function_exists( 'sonikat_add_primary_navigation' ) ) :

  /**
   * Primary navigation
   *
   * @since  Photo Perfect 1.0
   */
  function sonikat_add_primary_navigation(){

    if ( ! has_nav_menu( 'primary' ) ) {
      return;
    }
	$header_menu_text = photo_perfect_get_option( 'header_menu_text' );
    ?>
    <div id="main-nav" class="clear-fix">
        <div class="container">
        <nav id="site-navigation" class="header-navigation" role="navigation">
            <div class="wrap-menu-content">
              <?php
                wp_nav_menu(
                  array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                  )
                );
              ?>
            </div><!-- .menu-content--->
        </nav><!-- #site-navigation -->
       </div> <!-- .container -->
    </div> <!-- #main-nav -->
    <?php
  }

endif;

add_action( 'sonikat_action_main_nav', 'sonikat_add_primary_navigation', 20 );

?>
