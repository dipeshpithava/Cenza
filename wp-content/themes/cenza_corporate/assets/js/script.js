$(document).ready(function(){

	
	/* "scroll down image" animation */
	function animatethis(targetElement, speed) {
		$(targetElement).animate({ bottom: "+=10px"},
		{
			duration: speed,
			complete: function ()
			{
				targetElement.animate({ bottom: "-=10px" },
				{
					duration: speed,
					complete: function ()
					{
						animatethis(targetElement, speed);
					}
				});
			}
		});
	};
	animatethis($('.scrolldown'), 200);
	/* "scroll down image" animation */
	
	
	
	
	
	
	
	/* menu text hover effect */
	$(".menu_li").hover(function(){
		$(this).find( ".menu_text" ).animate({ "padding-bottom" : "5%" });
	},function(){
		$(this).find( ".menu_text" ).animate({ "padding-bottom" : "55%" });
	});
	
	/* menu animation */
	var pageWidth = $(window).width();
	if (pageWidth > 768) {
		$elem1 = $('#myfirstElement');
		$elem2 = $('#mysecondElement');
		var scrollState = 'top';
		var state = true;
		
		$(window).scroll(function(){ 
			
			var scrollPos = $(window).scrollTop();
		
			if( ( scrollPos != 0 ) && ( scrollState === 'top' ) && ( state ) ) {
				$elem1.stop().animate({padding: '1%' , backgroundColor: "rgba(0,0,0,0.73)"}, 600);
				$elem2.stop().animate({width: '8%'}, 600);
				scrollState = 'scrolled';
			}       
			else if( ( scrollPos === 0 ) && ( scrollState === 'scrolled' ) ) {
				$elem1.stop().animate({padding: '2%', backgroundColor: "transparent"}, 400);
				$elem2.stop().animate({width: '10%'}, 400);
				scrollState = 'top';
			}
			state = !state;
		});
	};	
	/* menu text hover effect */
	
	
	
	
	
	
	/*mobile menu toggle effect */
	$(".menu_icon").click(function () {
		$(".mobile_menu_sub").slideToggle("slow");
	});
	/*mobile menu toggle effect */
	
	
	
	
	
	
	
	/* scroll to top code */
	$('.go_to').click(function() {
		$('html,body').animate({
			scrollTop: $('#test').css('top')
		}, 800, function() {
	
			$('html, body').animate({
				scrollTop: 0
			}, 800);
	
		});
	});
	/* scroll to top code */
	
	
	
	
	
	
	
	
	/* case studies section animation */
	$( ".click_full" ).click(function() {
		$(".tada").fadeOut();
		$(".click_full").hide();
		$(this).parent().animate({ width: "100%" });
		$(".download_pdf,.case_close").delay(600).fadeIn('slow');
		$(".page6_text1").css("margin-bottom", "0");
	});
	
	$( ".case_close" ).click(function() {
		$(".tada").fadeIn('slow');
		$(".click_full").delay(600).fadeIn();
		$('.temp').animate({ width: "50%" });
		$(".download_pdf,.case_close").hide();
		$(".page6_text1").css("margin-bottom", "10%");
	});
	
	
	
	$( ".click_full1" ).click(function() {
		$(".tada1").fadeOut();
		$(".click_full1").hide();
		$(this).parent().animate({ width: "100%" });
		$(".download_pdf1,.case_close1").delay(600).fadeIn('slow');
		$(".page6_text1").css("margin-bottom", "0");
	});
	
	$( ".case_close1" ).click(function() {
		$(".tada1").fadeIn('slow');
		$(".click_full1").delay(600).fadeIn();
		$('.temp1').animate({ width: "50%" });
		$(".download_pdf1,.case_close1").hide();
		$(".page6_text1").css("margin-bottom", "10%");
	});
	
	/* case studies section animation */
	
	
	
	
	
	
	$(".csr").hover(function(){
		$(this).find( ".csr_sub" ).fadeIn();
	},function(){
		$(this).find( ".csr_sub" ).fadeOut();
	});
	
});
