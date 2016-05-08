
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">

    <?php
	  /**
	   * Hook - photo_perfect_single_image.
	   *
	   * @hooked photo_perfect_add_image_in_single_display -  10
	   */
	  do_action( 'photo_perfect_single_image' );
	?>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span>' . esc_html__( 'Pages:', 'photo-perfect' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );

		?>

		<?php 

			$custom_fields = get_post_custom();
			$playlists = $custom_fields['soundloudPlaylist'];
			$songs = $custom_fields['soundcloudSong'];
		?>

		<?php 
			foreach ($playlists as &$playlist){
		?>
	    		<div class="track">
					<iframe scrolling="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/<?=$playlist?>&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
				</div>
		<?php } ?>

		<?php foreach ($songs as &$song) { ?>
			<div class="track">
				<iframe scrolling="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?=$song?>&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
			</div>
		<?php } ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'photo-perfect' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
