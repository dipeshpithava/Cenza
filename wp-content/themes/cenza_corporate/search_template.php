<?php
/**
 * Template Name: Search Page
 *
 * @package WordPress
 * @subpackage Cenza
 * @since Cenza 1.0
 */

	$search_resut_count = 0;
	while ( have_posts() ) : the_post();
		$search_resut_count++;
		// End the loop.
	endwhile;
?>
<style type="text/css">
		.page1{
			width:100%;
			height:100%;
			position:relative;
			background:url(<?=site_url()?>/wp-content/themes/cenza_corporate/assets/images/contact_bg.jpg) no-repeat;
			background-size:cover;
		}
		
		.page2{
			overflow-y:auto;
			padding-right:1%;
		}
		
		.shell{
			width:100%;
			height:100%;
			overflow-x:hidden;
		}
		
		.footer{
			position:relative;
		}
		
		span{
			border-bottom:2px solid #cd5428;
			padding-bottom:0.5%;
		}
		
		u{
			color:#cd5428;
		}
		
		li{
			text-align:left !important; 
			margin-bottom:5%;
		}

		.m2{
			color: #fff !important;
		}

		.page2_text p{
			font-size:0.6em;
		}
		
	</style>

		<div class="page1">
			<div class=" page1_sub grid-50 prefix-25 mobile-grid-100 tablet-grid-50">
				<p class="page1_text">"<?php the_search_query(); ?>"</p>
				<img src="<?=site_url()?>/wp-content/themes/cenza_corporate/assets/images/redline.png" class="redline" alt="" />
				<?php
				if($search_resut_count > 0){
					?>
					<p class="page1_text1">We found <?=$search_resut_count?> results with "<?php the_search_query(); ?>" in them.</p>
					<?php
				}else{
					?>
					<p class="page1_text1">No Result found for <?php the_search_query(); ?>.</p>
					<?php
				}
				?>
				
			</div>
		</div>

		<?php
		if($search_resut_count > 0){
			?>
			<div class="shell">
				<div class="page2">
					<div class="mn grid-60 prefix-20 mobile-grid-100 tablet-grid-100">
						<ul>
							<?php
							while ( have_posts() ) : the_post();
								?>
								<li class="page2_text">
									<p ><a style="font-size:2em;" class="page2_text" href="<?=esc_url( get_permalink() )?>"><?=get_the_title()?></a></p>
									<p class="fnt_excerpt"><?=the_excerpt()?></p>
								</li>
								<?php
								// End the loop.
							endwhile;
							?>
						</ul>
					</div>
				</div>
			</div>	
			<?php
		}
		?>
		