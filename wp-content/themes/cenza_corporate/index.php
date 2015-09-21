<?php
/*
Theme Name: Cenza Corporate
Theme URI: 
Description: Corporate Theme.
Version: 1.0
Author: Dipesh P. Pithwa.
URI: www.nightlybuilds.io
*/
get_header();
?>
				<?php
					// Start the loop.
					while ( have_posts() ) : the_post();
						the_content();
					// End the loop.
					endwhile;
				?>
<?php
get_footer();
?>