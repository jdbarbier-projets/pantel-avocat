	<?php
	/*
	* 	The template for displaying Archive.
	*
	* 	@package plumbelt-lite
	*/
	get_header();
	?>
	<section class="content">
		<div class="container">
			<div class="main-wrapper">
				<h1>
					<?php
						$category_archive = get_the_category();
						$author_archive = get_the_author();
						$search_archive = get_search_query();
						if ( is_day() ) {
							printf( __( 'Daily Archives: %s', 'plumbelt-lite' ), get_the_date() );
						} elseif ( is_month() ) {
							printf( __( 'Monthly Archives: %s', 'plumbelt-lite' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'plumbelt-lite' ) ) );
						} elseif ( is_year() ) {
							printf( __( 'Yearly Archives: %s.', 'plumbelt-lite' ), get_the_date( _x( 'Y', 'yearly archives date format', 'plumbelt-lite' ) ) );
						} elseif ( is_category() ) {
							echo _e( 'Category: ', 'plumbelt-lite' ) . single_cat_title("", false) . '.';
						} elseif ( is_author() ) {
							echo _e( 'Author: ', 'plumbelt-lite' ) . $author_archive;
						}
					?>
				</h1>

				<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();						?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>							<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>						
							<?php
							if ( has_post_thumbnail() ) {								the_post_thumbnail();							}
							?>
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