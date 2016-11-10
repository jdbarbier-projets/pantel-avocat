	<?php
	/*
	* 	The template for displaying Index.
	*
	* 	@package plumbelt-lite
	*/
	get_header();
	?>
	<section class="content">
		<div class="container">
			<div class="main-wrapper">
				<h1>
					<?php _e( 'Our Blog', 'plumbelt-lite' ); ?>
				</h1>

				<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php
							if ( $featured_image ) { ?>
								<div class="featured-image">
									<img src="<?php echo esc_url($featured_image[0]); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
								</div><!--/.featured-image-->
							<?php }
							?>
							<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
							<span class="posted">
								<?php _e( 'Posted by', 'plumbelt-lite' ); ?> <?php the_author_posts_link(); ?> <?php _e( 'in', 'plumbelt-lite' ); ?> <?php the_category( ', ' ); ?>, <?php _e( 'on', 'plumbelt-lite' ); ?> <?php echo the_time( get_option( 'date_format' ) ); ?>
							</span><!--/.posted-->
							<hr />
							<?php the_excerpt(); ?>
							<div class="buttons">
								<a href="<?php the_permalink(); ?>#comments" title="<?php comments_number( __('No Comments','plumbelt-lite'), __('One Comment','plumbelt-lite'), __('% Comments','plumbelt-lite') ); ?>" class="comments highlighted">
									<?php comments_number( __('No Comments','plumbelt-lite'), __('One Comment','plumbelt-lite'), __('% Comments','plumbelt-lite') ); ?>
								</a><!--/a-->
								<a href="<?php the_permalink(); ?>" class="read-more"><?php _e( 'Read more...', 'plumbelt-lite' ); ?></a>
							</div><!--/.buttons-->
						</article>

						<?php }
				} else {
					echo '<p>'.__('No posts found.','plumbelt-lite').'</p>';
				}
				?>

				<hr />

				<?php
				if (function_exists("plumbelt_lite_pagination")) {
	    			plumbelt_lite_pagination();
				}
				?>
			</div><!--/.main-wrapper-->

			<?php get_sidebar(); ?>

			<div class="clear"></div>
		</div><!--/.container-->
	</section><!--/.content-->
	<?php get_footer(); ?>