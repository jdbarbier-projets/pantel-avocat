	<?php

	/*
	* 	The template for displaying Footer.
	*
	* 	@package plumbelt-lite
	*/

	?>

	<footer id="footer">

		<div class="container">

			<div class="about-us">

				<?php

				if ( get_theme_mod( 'ti_footer_aboutus_title',__('About Us','plumbelt-lite') ) ) {

					echo '<h5>'.esc_attr(get_theme_mod( 'ti_footer_aboutus_title',__('About Us','plumbelt-lite') )).'</h5>';

				}



				if ( get_theme_mod( 'ti_footer_aboutus_content',__('Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed','plumbelt-lite') ) ) {

					echo '<p>'.esc_attr(get_theme_mod( 'ti_footer_aboutus_content',__('Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed','plumbelt-lite' ))).'</p>';

				}

				?>

			</div><!--/.about-us-->

			<div class="contact-us">

				<?php

				if ( get_theme_mod( 'ti_footer_contactus_title',__('Contact Us','plumbelt-lite') ) ) {

					echo '<h5>'. esc_attr(get_theme_mod( 'ti_footer_contactus_title',__('Contact Us','plumbelt-lite'))).'</h5>';

				}



				if ( get_theme_mod( 'ti_footer_contactus_content',__('<p>Romania, Bucuresti<br />Str. Loreum ipsum, Nr. 2</p><p>Tel: (+4) 0746123456<br />E-mail: contact@domeniu.com</p>' ,'plumbelt-lite')) ) {
				
					$allow_p = array( 'p' => array());

					echo wp_kses(get_theme_mod( 'ti_footer_contactus_content',__('<p>Romania, Bucuresti<br />Str. Loreum ipsum, Nr. 2</p><p>Tel: (+4) 0746123456<br />E-mail: contact@domeniu.com</p>','plumbelt-lite')), $allow_p);

				}

				?>

			</div><!--/.contact-us-->

			<div class="directions">

				<?php

				if ( get_theme_mod( 'ti_footer_map_title',__('Map','plumbelt-lite') ) ) {

					echo '<h5>'. esc_attr(get_theme_mod( 'ti_footer_map_title',__('Map','plumbelt-lite') )).'</h5>';

				}



				if ( get_theme_mod( 'ti_footer_iframecode_content','<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193572.0037917104!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York!5e0!3m2!1sro!2sro!4v1404281704059" width="600" height="450" frameborder="0" style="border:0"></iframe>' ) ) {

					echo '<p>'. get_theme_mod( 'ti_footer_iframecode_content','<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193572.0037917104!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York!5e0!3m2!1sro!2sro!4v1404281704059" width="600" height="450" frameborder="0" style="border:0"></iframe>' ) .'</p>';

				}

				?>

			</div><!--/.directions-->
			
			<div class="copyright">
				<a href="http://themeisle.com/themes/plumbelt-lite/" target="_blank" rel="nofollow">PlumBelt Lite</a><?php _e(' powered by ','plumbelt-lite'); ?><a href="http://wordpress.org/" target="_blank" rel="nofollow"><?php _e('WordPress','plumbelt-lite'); ?></a>
			</div>

		</div><!--/.container-->

	</footer><!--/#footer-->

	<?php wp_footer(); ?>

</body><!--/.blog-->

</html>
