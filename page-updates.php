
<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<!-- <main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if (get_the_content() != '') { ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php } ?>
			<?php endwhile; ?>

		</main> -->

		<div class="soni-posts">
			<?php
				$pagenumber = 1;
				$perPage = 5;
				if ($_GET['pagenumber']) $pagenumber = $_GET['pagenumber'];

				$offset = ($pagenumber - 1) * $perPage;
				$args = array( 'posts_per_page' => $perPage , 'offset' => $offset, 'post_status' => 'publish' );
				$lastposts = get_posts( $args );
				foreach ( $lastposts as $post ) :
					setup_postdata( $post );
					get_template_part( 'template-parts/content', 'updates' );
					?>
				<?php endforeach;
				wp_reset_postdata(); ?>

				<?php
					$count_posts = wp_count_posts();
					$countPublished = $count_posts->publish;

					if ($countPublished > $offset + $perPage) { ?>
						<a style="float:left;" href="http://<?=$_SERVER['HTTP_HOST']?>/updates/?pagenumber=<?=$pagenumber + 1?>">Older posts<a/>
					<?php }

					if ($offset > 0) { ?>
						<a style="float:right;" href="http:///<?=$_SERVER['HTTP_HOST']?>/updates/?pagenumber=<?=$pagenumber - 1?>">Newer posts<a/>
				<?php	}
				?>
		</div>
	</div><!-- #primary -->

<?php
	/**
	 * Hook - photo_perfect_action_sidebar.
	 *
	 * @hooked: photo_perfect_add_sidebar - 10
	 */
	do_action( 'photo_perfect_action_sidebar' );
?>
<?php get_footer(); ?>
