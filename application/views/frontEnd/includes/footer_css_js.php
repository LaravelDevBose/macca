
	<!-- js -->
	<script type="text/javascript" src="<?= base_url();?>libs/frontEnd/js/jquery-2.1.4.min.js"></script>

	<script type="text/javascript" src="<?= base_url();?>libs/frontEnd/js/bootstrap-3.1.1.min.js"></script>
	
	<!-- stats -->
	<script src="<?= base_url();?>libs/frontEnd/js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url();?>libs/frontEnd/js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!-- owl carousel -->
	<script src="<?= base_url();?>libs/frontEnd/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({

				autoPlay: 3000, //Set AutoPlay to 3 seconds
				autoPlay: true,
				items: 3,
				itemsDesktop: [991, 2],
				itemsDesktopSmall: [414, 4]

			});
		}); 
	</script>
	<!-- //owl carousel -->
	
	<!-- Responsive slider  -->
	<script src="<?= base_url();?>libs/frontEnd/js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //Responsive slider  -->

	<!-- Flex slider-script -->
	<script defer src="<?= base_url();?>libs/frontEnd/js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
	<!-- //Flex slider-script -->
	
	<!-- start-smooth-scrolling -->
	<script src="<?= base_url();?>libs/frontEnd/js/move-top.js"></script>
	<script src="<?= base_url();?>libs/frontEnd/js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	
	<!-- smooth scrolling js -->
	<script src="<?= base_url();?>libs/frontEnd/js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling js -->
