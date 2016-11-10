	<?php

	/*
	* 	The template for displaying Front Page.
	*
	* 	@package plumbelt-lite
	*/

	get_header();

	if ( get_option( 'show_on_front' ) == 'page' ){?>

		<section class="content">

		<div class="container">

			<div class="main-wrapper">

				<?php

				if ( have_posts() ) {

					while ( have_posts() ) {

						the_post(); ?>



						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						
							<?php the_content(); ?>

							
						</article>



						<?php }

				}

				?>

			</div><!--/.main-wrapper-->



			<?php get_sidebar(); ?>



			<div class="clear"></div>

		</div><!--/.container-->

	</section><!--/.content-->

	<?php } else { 

	get_template_part( 'includes/subheader' );



	if ( !dynamic_sidebar() ) {

		$content_style = 'style="position: relative";';

	}

	?>

	<section class="content" <?php echo $content_style; ?>>

		<div class="container">
			
			<?php 

			if (get_theme_mod( 'ti_frontpage_boxone_title' ) || get_theme_mod( 'ti_frontpage_boxone_content' ,'Go to Appearance - Customize, to add content.') || get_theme_mod( 'ti_frontpage_boxtwo_title' ) || get_theme_mod( 'ti_frontpage_boxtwo_content','Go to Appearance - Customize, to add content.' ) || get_theme_mod( 'ti_frontpage_boxthree_title' ) || get_theme_mod( 'ti_frontpage_boxthree_content','Go to Appearance - Customize, to add content.' )): 
			?>

			<div class="three-cols-content">

				<div class="col">

					<?php

					if ( get_theme_mod( 'ti_frontpage_boxone_title' ) ) {

						echo '<h3>'. esc_attr(get_theme_mod( 'ti_frontpage_boxone_title' )) .'</h3>';

					}



					if ( get_theme_mod( 'ti_frontpage_boxone_content','Go to Appearance - Customize, to add content.' ) ) {

						echo '<p>'. esc_attr(get_theme_mod( 'ti_frontpage_boxone_content','Go to Appearance - Customize, to add content.' )).'</p>';

					}

					?>

				</div><!--/.col-->

				<div class="col">

					<?php

					if ( get_theme_mod( 'ti_frontpage_boxtwo_title' ) ) {

						echo '<h3>'. esc_attr(get_theme_mod( 'ti_frontpage_boxtwo_title' )).'</h3>';

					}



					if ( get_theme_mod( 'ti_frontpage_boxtwo_content','Go to Appearance - Customize, to add content.' ) ) {

						echo '<p>'. esc_attr(get_theme_mod( 'ti_frontpage_boxtwo_content','Go to Appearance - Customize, to add content.' )).'</p>';

					}

					?>

				</div><!--/.col-->

				<div class="col">

					<?php

					if ( get_theme_mod( 'ti_frontpage_boxthree_title' ) ) {

						echo '<h3>'. esc_attr(get_theme_mod( 'ti_frontpage_boxthree_title' )).'</h3>';

					}



					if ( get_theme_mod( 'ti_frontpage_boxthree_content','Go to Appearance - Customize, to add content.' ) ) {

						echo '<p>'. esc_attr(get_theme_mod( 'ti_frontpage_boxthree_content','Go to Appearance - Customize, to add content.' )).'</p>';

					}

					?>

				</div><!--/.col-->

			</div><!--/.three-cols-content-->



			<hr class="separator" />

			<?php endif; ?>
			
			<?php if( get_theme_mod( 'ti_frontpage_article_image' ) || get_theme_mod( 'ti_frontpage_article_title',__( 'About our services', 'plumbelt-lite' ) ) || get_theme_mod( 'ti_frontpage_article_content','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.' ) ): ?>

			<article class="big">

				<?php

				if ( get_theme_mod( 'ti_frontpage_article_image',get_template_directory_uri() .'/upload/article-1.jpg' ) ) {

					echo '<img src="'. esc_url(get_theme_mod( 'ti_frontpage_article_image',get_template_directory_uri() .'/upload/article-1.jpg' )) .'" alt="" title="" />';

				}



				if ( get_theme_mod( 'ti_frontpage_article_title',__( 'About our services', 'plumbelt-lite' ) ) ) {

					echo '<h2>'. esc_attr(get_theme_mod( 'ti_frontpage_article_title',__( 'About our services', 'plumbelt-lite' ) )) .'</h2>';

				}


				if ( get_theme_mod( 'ti_frontpage_article_content','<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit</p><p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue.</p><p>Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p><p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>' ) ) {
				
					
					$allow_p = array( 'p' => array());

					echo wp_kses(get_theme_mod( 'ti_frontpage_article_content','<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit</p><p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue.</p><p>Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p><p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>' ),$allow_p);

				}

				?>

				<span class="clear"></span>

			</article><!--/.big-->



			
			
			<?php
			
			$ti_frontpage_latestposts = get_theme_mod('ti_frontpage_latestposts','show');
			
			if( isset($ti_frontpage_latestposts) && ($ti_frontpage_latestposts == 'show') ):
			
			?>
			
			<section class="content">

				<div class="container">

					<div class="main-wrapper">

						<?php

						if ( have_posts() ) {
							
							echo '<h1>'.__('Latest posts','plumbelt-lite').'</h1>';

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

					<div class="clear"></div>

				</div><!--/.container-->

			</section><!--/.content-->

			<?php endif; ?>	
			<?php endif; ?>


		</div><!--/.container-->

	</section><!--/.content-->


	<?php } get_footer(); ?>