<?php if( get_theme_mod( 'ti_subheader_title',__('This is a nice headline to get my attention','plumbelt-lite') ) || get_theme_mod( 'ti_subheader_content',__('Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi','plumbelt-lite' )) || get_theme_mod( 'ti_subheader_contact_form_shortcode' ) ): ?>	
	
	<section id="featured">

		<div class="container">

		

			<div class="three-cols">

				<div class="two-cols frontpage-content">

					<?php

					if ( get_theme_mod( 'ti_subheader_title',__('This is a nice headline to get my attention','plumbelt-lite') ) ) {

						echo '<h2>'. esc_attr(get_theme_mod( 'ti_subheader_title',__('This is a nice headline to get my attention','plumbelt-lite') )) .'</h2>';

					}



					if ( get_theme_mod( 'ti_subheader_content',__('Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi','plumbelt-lite') ) ) {

						echo '<p>'. esc_attr(get_theme_mod( 'ti_subheader_content',__('Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi','plumbelt-lite' ))) .'</p>';

					}

					?>

				</div>

			</div>

			<?php

			if ( is_front_page() ) {



				if ( get_theme_mod( 'ti_subheader_contact_form_shortcode' ) ) {

					echo '<div class="widget cf">';

					echo do_shortcode(get_theme_mod( 'ti_subheader_contact_form_shortcode' ));

					echo '</div>';

				}



			}

			?>

		</div><!--/.container-->

	</section><!--/#featured-->
	
<?php endif; ?>	