	<?php
	/*	*   Template Name: Contact page
	* 	The template for displaying Page Contact.
	*
	* 	@package plumbelt-lite
	*/
	get_header();
	?>
	<section class="content">
		<div class="container">
			<div class="main-wrapper">
				<h1>
					<?php the_title(); ?>
				</h1>

				<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); ?>

						<article>
							<?php the_content(); ?>
							<?php
								wp_link_pages( array(
									'before'      => '<div class="post-links"><span class="post-links-title">' . __( 'Pages:', 'plumbelt-lite' ) . '</span>',
									'after'       => '</div>',
									'link_before' => '<span>',
									'link_after'  => '</span>',
								) );
							?>
							
						</article>

						<?php }
				}
				?>
			</div><!--/.main-wrapper-->

			<div class="sidebar-wrapper">
				<div class="widget">
					
					<div class="widget-map">
						<?php
						if ( get_theme_mod( 'ti_footer_iframecode_content','<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193572.0037917104!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York!5e0!3m2!1sro!2sro!4v1404281704059" width="600" height="450" frameborder="0" style="border:0"></iframe>' ) ) {							// allow iframe only in this instance							$iframe = array( 'iframe' => array(                            'src' => array (),                            'width' => array (),                            'height' => array (),                            'frameborder' => array(),                            'allowFullScreen' => array() // add any other attributes you wish to allow                             ) );						
							echo wp_kses(get_theme_mod( 'ti_footer_iframecode_content','<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193572.0037917104!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York!5e0!3m2!1sro!2sro!4v1404281704059" width="600" height="450" frameborder="0" style="border:0"></iframe>' ),$iframe );
						}
						?>
					</div><!--/.widget-map-->
					<?php
					if ( get_theme_mod( 'ti_contact_sidebar_content','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' ) ) {
						echo '<p>'. esc_attr(get_theme_mod( 'ti_contact_sidebar_content', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' )) .'</p>';
					}
					?>
				</div><!--/.widget-->
			</div><!--/.sidebar-wrapper-->

			<div class="clear"></div>
		</div><!--/.container-->
	</section><!--/.content-->
	<?php get_footer(); ?>