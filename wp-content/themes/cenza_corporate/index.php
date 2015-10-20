<?php
/*
Theme Name: Cenza Corporate
Theme URI: 
Description: Corporate Theme.
Version: 1.0
Author: Dipesh P. Pithwa.
URI: www.nightlybuilds.io
*/
global $query_string;
$is_search = explode("=", $query_string);
get_header();
					if(@$is_search[0] == "s"){
						get_template_part("search_template");
					}else{
						// Start the loop.
						while ( have_posts() ) : the_post();
							the_content();
						// End the loop.
						endwhile;
					}
get_footer();
?>