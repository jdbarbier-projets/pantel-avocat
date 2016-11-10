	<?php
	/*
	* 	The template for displaying Single.
	*
	* 	@package plumbelt-lite
	*/
	get_header();
	?>
	<section class="content">
		<div class="container">
			<div class="main-wrapper">
				<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						?>
						<article>							<h2><?php the_title(); ?></h2>
							<?php
							if ( has_post_thumbnail() ) {								the_post_thumbnail();							}
							?>
							<span class="posted">
								<?php _e( 'Posted by', 'plumbelt-lite' ); ?> <?php the_author_posts_link(); ?> <?php _e( 'in', 'plumbelt-lite' ); ?> <?php the_category( ', ' ); ?>, <?php _e( 'on', 'plumbelt-lite' ); ?> <?php echo the_time( get_option( 'date_format' ) ); ?>
							</span><!--/.posted-->
							<hr />
							<?php the_content(); ?>
							<?php
								wp_link_pages( array(
									'before'      => '<div class="post-links"><span class="post-links-title">' . __( 'Pages:', 'plumbelt-lite' ) . '</span>',
									'after'       => '</div>',
									'link_before' => '<span>',
									'link_after'  => '</span>',
								) );
							?>
							<div class="meta-tags">
								<?php the_tags('Tags: ', ', '); ?>
							</div><!--/.meta-tags-->
							<?php comments_template(); ?>
						</article>

						<?php }
				} else {
					echo '<p>'.__('No posts found.','plumbelt-lite').'</p>';
				}
				
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