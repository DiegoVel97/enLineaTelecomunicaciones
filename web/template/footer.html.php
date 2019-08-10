<!-- footer -->
	<footer>
		<div class="w3ls-footer-grids py-sm-4 py-3">
			<div class="container py-xl-5 py-sm-3">
				<div class="row">
					<div class="col-lg-3 col-sm-6 w3l-footer">
						<ul class="list-unstyled">
							<li>
								<a href="index.html">Inicio</a>
							</li>
							<li class="mt-2">
								<a href="about.html" class="">Nosotros</a>
							</li>
							<li class="mt-2">
								<a href="#services" class="scroll">Nuestros servicios</a>
							</li>
							<li class="mt-2">
								<a href="gallery.html" class="">Noticias</a>
							</li>
							<li class="mt-2">
								<a href="contact.html" class="">Contactanos</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6 w3l-footer mt-sm-0 mt-2">
						<ul class="list-unstyled">
							<li>
								<a href="faqs.html">PQRS</a>
							</li>
							<li class="mt-2">
								<a href="#feedback" class="scroll">Testimonios</a>
							</li>
							<li class="mt-2">
								<a href="single.html" class="">Aliados</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6 w3l-footer footer-social-agile mt-lg-0 mt-4">
						<h1 class="footer-head-w3ls mb-4">Encuentranos en redes sociales</h1>
						<ul class="list-unstyled">
							<li>
								<a href="#">
									<img src="<?php echo addLib('template/images/icon-facebook.png'); ?>" width="40px">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo addLib('template/images/icon-instagram.png'); ?>" width="40px">
								</a>
							</li>
							<li class="ml-1">
								<a href="#">
									<img src="<?php echo addLib('template/images/icon-whatsapp.png'); ?>" width="40px">
								</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6 w3l-footer payment-w3lsmk  mt-lg-0 mt-4">
						<!--<h2 class="footer-head-w3ls mb-4">Payment Options</h2>
						<ul class="list-unstyled">
							<li>
								<a href="#">
									<i class="fab fa-cc-amex"></i>
								</a>
							</li>
							<li class="mx-1">
								<a href="#">
									<i class="fab fa-cc-discover"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-cc-jcb"></i>
								</a>
							</li>
							<li class="mx-1">
								<a href="#">
									<i class="fab fa-cc-visa"></i>
								</a>
							</li>
							<li class="">
								<a href="#">
									<i class="fab fa-cc-paypal"></i>
								</a>
							</li>
							<li class="mx-1">
								<a href="#">
									<i class="fab fa-cc-stripe"></i>
								</a>
							</li>
							<li class="">
								<a href="#">
									<i class="fab fa-cc-visa"></i>
								</a>
							</li>
							<li class="ml-1">
								<a href="#">
									<i class="fab fa-cc-mastercard"></i>
								</a>
							</li>
						</ul>-->
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!-- copyright -->
	<div class="copy-right-w3ls py-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 w3ls-left-copy text-lg-left text-center">
					<p class="copy-right-grids text-white">© 2019. All Rights Reserved | Design by
						<a href="https://www.facebook.com/worldWebDesignD/?modal=admin_todo_tour" target="_blank">Worl Web Design Colombia</a>
					</p>
				</div>
				<div class="col-lg-4 w3ls-left-copy text-lg-right text-center">
					<p class="text-white">
						<i class="fas fa-phone mr-2"></i></p>
				</div>
			</div>
		</div>
	</div>
	<!-- //copyright -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="<?php echo addLib('template/js/jquery-2.2.3.min.js'); ?>"></script>
	<!-- Default-JavaScript-File -->
	<script src="<?php echo addLib('template/js/bootstrap.js'); ?>"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- navigation -->
	<!-- dropdown smooth -->
	<script>
		$(document).ready(function () {
			
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown smooth -->
	<!-- fixed nav -->
	<script>
		$(window).scroll(function () {
			if ($(document).scrollTop() > 50) {
				$('nav').addClass('shrink');
			} else {
				$('nav').removeClass('shrink');
			}
		});
	</script>
	<!-- //fixed nav -->
	<!-- //navigation -->

	<!--banner-slider-->
	<script src="<?php echo addLib('template/js/JiSlider.js'); ?>"></script>
	<script>
		$(window).load(function () {
			$('#JiSlider').JiSlider({
				color: '#fff',
				start: 3,
				reverse: true
			}).addClass('ff')
		})
	</script>
	<!-- //banner-slider -->

	<!-- carousel(for feedback) -->
	<script src="<?php echo addLib('template/js/owl.carousel.js'); ?>"></script>
	<script>
		$(document).ready(function () {
			
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					1000: {
						items: 3,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})

	</script>
	<link rel="stylesheet" href="<?php echo addLib('template/css/owl.theme.css'); ?>" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo addLib('template/css/owl.carousel.css'); ?>" type="text/css" media="screen" property="" />
	<!-- //carousel(for feedback) -->

	<!-- flexisel(for filter) -->
	<script src="<?php echo addLib('template/js/jquery.flexisel.js'); ?>"></script>
	
<script type="text/javascript">
$(window).on('load', function () {
     
    $(".loader-page").css({visibility:"hidden",opacity:"0"})
     
});
</script>

	<script>

		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
	<!-- //flexisel(for filter) -->

	<!-- smooth scrolling -->
	<script src="<?php echo addLib('template/js/SmoothScroll.min.js'); ?>"></script>
	<!-- move-top -->
	<script src="<?php echo addLib('template/js/move-top.js'); ?>"></script>
	<!-- easing -->
	<script src="<?php echo addLib('template/js/easing.js'); ?>"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="<?php echo addLib('template/js/outdoor.js'); ?>"></script>

	<script src="<?php echo addLib('template/js/bootstrap.js'); ?>"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<script src="<?php echo addLib('template/js/personalizado.js'); ?>"></script>


	<!-- //Js files -->


</body>

</html>