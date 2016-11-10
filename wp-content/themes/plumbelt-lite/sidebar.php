<?php
/*
* 	The template for displaying Sidebar.
*
* 	@package plumbelt-lite
*/
?>
<div class="sidebar-wrapper">
<?php
	if ( is_active_sidebar( 'general_sidebar' ) ) {
		dynamic_sidebar( 'general_sidebar' );
	} else {
		echo __('The sidebar is not active.','plumbelt-lite');
	}
?>
</div><!--/.sidebar-wrapper-->