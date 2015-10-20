<?php
global $query_string;
$is_search = explode("=", $query_string);
if(@$is_search[0] == "s"){
	$src_str = @$is_search[1];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<title><?=get_field('page_title')?></title>
	<?=get_field('seo_meta_tags')?>
	<!--[if lt IE 9]>
	<script src="<?=site_url()?>/wp-content/themes/cenza_corporate/assets/javascripts/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?=site_url()?>/wp-content/themes/cenza_corporate/style.css" />
	<link rel="stylesheet" href="<?=site_url()?>/wp-content/themes/cenza_corporate/assets/stylesheets/demo.css" />
	<!--[if (gt IE 8) | (IEMobile)]><!-->
	<!--<link rel="stylesheet" href="<?=site_url()?>/wp-content/themes/cenza_corporate/assets/stylesheets/unsemantic-grid-responsive.css" />-->
	<link rel="stylesheet" href="<?=site_url()?>/wp-content/themes/cenza_corporate/assets/stylesheets/unsemantic-grid-responsive-tablet.css" />
	<!--<![endif]-->
	<!--[if (lt IE 9) & (!IEMobile)]>
	<link rel="stylesheet" href="<?=site_url()?>/wp-content/themes/cenza_corporate/assets/stylesheets/ie.css" />
	<![endif]-->
	<link rel="stylesheet" href="<?=site_url()?>/wp-content/themes/cenza_corporate/assets/css/jquery-ui.min.css">
	<style type="text/css">
	<?=@get_field('css')?>
	#page1{
		background:url(<?=@get_field('background_image')?>) no-repeat !important;
		background-size:cover !important;
	}
	</style>
</head>
<body>
	<div class="container">
		<div id="myfirstElement" class="menu posr grid-100 mobile-grid-100 tablet-grid-100">
			<a href="<?=site_url()?>"><img id="mysecondElement" src="<?=site_url()?>/wp-content/themes/cenza_corporate/assets/images/logo.png" class="logo" alt="" /></a>
			<div class="menu_sub grid-70 prefix-15 hide-on-mobile hide-on-tablet">
				<ul>
					<li class="menu_li menu_marg_l"><a class="m1 menu_text" href="<?=site_url()?>/about">ABOUT</a></li>
					<li class="menu_li"><a class="m2 menu_text" href="<?=site_url()?>/service">SERVICES</a></li>
					<li class="menu_li"><a class="m4 menu_text" href="<?=site_url()?>/people-and-culture">PEOPLE &amp; CULTURE</a></li>
					<li class="menu_li"><a class="m5 menu_text" href="<?=site_url()?>/case-studies">CASE STUDIES</a></li>
					<li class="menu_li"><a class="m7 menu_text" href="<?=site_url()?>/contact">CONTACT</a></li>
				</ul>	
			</div>
			<div class="search_box hide-on-mobile hide-on-tablet">
				<form action="/cenza/" method="get" id="search_frm">
					<input type="text" name="s" class="inpt" value="<?=$src_str?>" />
				</form>
				<a href="javascript:void(0);" id="search_btn"><img src="<?=site_url()?>/wp-content/themes/cenza_corporate/assets/images/search.png" class="search" alt="" /></a>
			</div>
			<a href="javascript:void(0);"><img src="<?=site_url()?>/wp-content/themes/cenza_corporate/assets/images/menu_icon.png"  class="menu_icon hide-on-desktop" alt="" /></a>
			<div class="mobile_menu_sub hide hide-on-desktop">
				<ul style="margin-bottom:0;">
					<li class="mobile_menu_li"><a class="m1 mobile_menu_text" href="<?=site_url()?>/about">ABOUT</a></li>
					<li style="border-bottom:none;" class="mobile_menu_li"><a class="m2 mobile_menu_text" href="<?=site_url()?>/service">SERVICES</a></li>
					<li class="mobile_menu_li"><a class="m4 mobile_menu_text" href="<?=site_url()?>/people-and-culture">PEOPLE &amp; CULTURE</a></li>
					<li class="mobile_menu_li"><a class="m5 mobile_menu_text" href="<?=site_url()?>/case-studies">CASE STUDIES</a></li>
					<li class="mobile_menu_li"><a class="m7 mobile_menu_text" href="<?=site_url()?>/contact">CONTACT</a></li>
				</ul>	
			</div>
		</div>