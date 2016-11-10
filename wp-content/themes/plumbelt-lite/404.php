	<?php

	/*
	* 	The template for displaying 404 page.
	*
	* 	@package plumbelt-lite
	*/

	get_header();

	?>

	<section class="content">

		<div class="container">

			<div class="main-wrapper">

				<h1>

					<?php _e( 'Oops! That page can&rsquo;t be found.', 'plumbelt-lite' ); ?>

				</h1>



				<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'plumbelt-lite' ); ?></p>

			</div><!--/.main-wrapper-->



			<?php get_sidebar(); ?>



			<div class="clear"></div>

		</div><!--/.container-->

	</section><!--/.content-->

	<?php get_footer(); ?>