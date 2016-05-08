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

	<?php
	/**
	 * Hook - photo_perfect_action_before.
	 *
	 * @hooked photo_perfect_page_start - 10
	 * @hooked photo_perfect_skip_to_content - 15
	 */
	do_action( 'photo_perfect_action_before' );
	?>


		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

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
