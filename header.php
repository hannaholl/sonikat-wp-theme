<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Photo_Perfect
 */

?><?php
	/**
	 * Hook - photo_perfect_action_doctype.
	 *
	 * @hooked photo_perfect_doctype -  10
	 */
	do_action( 'photo_perfect_action_doctype' );
?>
<head>
	<?php
	/**
	 * Hook - photo_perfect_action_head.
	 *
	 * @hooked photo_perfect_head -  10
	 */
	do_action( 'photo_perfect_action_head' );
	?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="header-container">
		<div class="header-img-nav">
			<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

			<!-- NAV -->
		  <nav id="site-navigation" class="header-navigation" role="navigation">
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
              )
            );
          ?>
      </nav><!-- #site-navigation -->
	    </div> <!-- #main-nav -->
			<!-- NAV END -->

			<?php $show_title = photo_perfect_get_option( 'show_title' ); ?>
	    <?php $show_tagline = photo_perfect_get_option( 'show_tagline' ); ?>
	    <?php if ( true == $show_title || true == $show_tagline ): ?>
	      <div id="site-identity">
	        <?php if ( true == $show_title ): ?>
	          <?php if ( is_front_page() && is_home() ) : ?>
	            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	          <?php else : ?>
	            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
	          <?php endif; ?>
	        <?php endif ?>

	        <?php if ( true == $show_tagline ): ?>
	          <p class="site-description"><?php bloginfo( 'description' ); ?></p>
	        <?php endif ?>
	      </div><!-- #site-identity -->
	    <?php endif ?>
		</div>



		<?php do_action( 'photo_perfect_action_before' ); ?>

	</div><!--header-containe-->
	<?php
	/**
	 * Hook - photo_perfect_action_before_content.
	 *
	 * @hooked photo_perfect_content_start - 10
	 */
	do_action( 'photo_perfect_action_before_content' );
	?>
    <?php
	  /**
	   * Hook - photo_perfect_action_content.
	   */
	  do_action( 'photo_perfect_action_content' );
		?>
