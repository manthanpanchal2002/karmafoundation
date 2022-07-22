<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="description" content="description"/>
		<meta name="keywords" content="keywords"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<link rel="shortcut icon" href="img/favicon.ico"/>
		<title>Helpo HTML Template</title>
		<!-- styles-->
		<link rel="stylesheet" href="css/styles.min.css"/>
		<!-- web-font loader-->
		<script>
			WebFontConfig = {

				google: {

					families: ['Quicksand:300,400,500,700', 'Permanent+Marker:400'],

				}

			}

			function font() {

				var wf = document.createElement('script')

				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
				wf.type = 'text/javascript'
				wf.async = 'true'

				var s = document.getElementsByTagName('script')[0]

				s.parentNode.insertBefore(wf, s)

			}

			font()
		</script>
	</head>
	<body>
		<div class="page-wrapper">
			<!-- mobile menu start-->
			<div class="mobile-nav">
				<div class="mobile-nav__inner">
					<div class="mobile-nav__item">
						<nav class="menu-holder">
							<ul class="mobile-menu">
								<li class="mobile-menu__item"><a class="mobile-menu__link" href="#">item</a></li>
								<li class="mobile-menu__item"><a class="mobile-menu__link" href="#">item</a></li>
								<li class="mobile-menu__item"><a class="mobile-menu__link" href="#">item</a></li>
								<li class="mobile-menu__item"><a class="mobile-menu__link" href="#">item</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- mobile menu end-->
			<!-- aside dropdown start-->
			<div class="aside-dropdown">
				<div class="aside-dropdown__inner"><span class="aside-dropdown__close">
					<svg class="icon">
						<use xlink:href="#close"></use>
					</svg></span>
					<div class="aside-dropdown__item d-lg-none d-block">
						<ul class="aside-menu">
							<li class="aside-menu__item aside-menu__item--has-child aside-menu__item--active"><a class="aside-menu__link" href="javascript:void(0);"><span>Home</span></a>
								<!-- sub menu start    -->
								<ul class="aside-menu__sub-list">
									<li><a href="../index.html"><span>01 Home Color Style</span></a></li>
									<li><a href="../front_2.html"> <span>02 Home Color Style</span></a></li>
									<li><a href="../front_3.html"><span>03 Home Color Style</span></a></li>
									<li class="item--active"><a href="index.html"><span>04 Home Monochrome</span></a></li>
									<li><a href="front_2.html"><span>05 Home Monochrome</span></a></li>
									<li><a href="front_3.html"><span>06 Home Monochrome</span></a></li>
								</ul>
								<!-- sub menu end-->
							</li>
							<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Pages</span></a>
								<!-- sub menu start    -->
								<ul class="aside-menu__sub-list">
									<li><a href="about.html"><span>About</span></a></li>
									<li><a href="typography.html"> <span>Typography</span></a></li>
									<li><a href="donors.html"><span>Donors & Partners</span></a></li>
									<li><a href="volunteer.html"><span>Become a Volunteer</span></a></li>
									<li><a href="events.html"><span>Events</span></a></li>
									<li><a href="event-details.html"><span>Event Details</span></a></li>
									<li><a href="stories.html"><span>Stories</span></a></li>
									<li><a href="storie-details.html"><span>Storie Details</span></a></li>
									<li><a href="blog.html"><span>Blog</span></a></li>
									<li><a href="blog-post.html"><span>Blog Post</span></a></li>
									<li><a href="gallery.html"><span>Gallery</span></a></li>
									<li><a href="pricing.html"><span>Pricing Plans</span></a></li>
									<li><a href="faq.html"><span>FAQ</span></a></li>
									<li><a href="404.html"><span>404 Page</span></a></li>
								</ul>
								<!-- sub menu end-->
							</li>
							<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Causes</span></a>
								<!-- sub menu start-->
								<ul class="aside-menu__sub-list">
									<li><a href="causes.html"><span>Causes 1</span></a></li>
									<li><a href="cause-details.html"><span>Cause Details</span></a></li>
								</ul>
								<!-- sub menu end-->
							</li>
							<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Shop</span></a>
								<!-- sub menu start-->
								<ul class="aside-menu__sub-list">
									<li><a href="shop.html"><span>Catalog Page</span></a></li>
									<li><a href="shop-product.html"><span>Shop Product</span></a></li>
									<li><a href="shop-cart.html"><span>Shop Cart</span></a></li>
									<li><a href="shop-checkout.html"><span>Shop Checkout</span></a></li>
									<li><a href="shop-account.html"><span>Shop Account</span></a></li>
								</ul>
								<!-- sub menu end-->
							</li>
							<li class="aside-menu__item"><a class="aside-menu__link" href="contacts.html"><span>Contacts</span></a></li>
							<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Elements</span></a>
								<!-- sub menu start    -->
								<ul class="aside-menu__sub-list">
									<li><a href="alerts.html"><span>Alerts</span></a></li>
									<li><a href="team.html"><span>Team</span></a></li>
									<li><a href="testimonials.html"><span>Testimonials</span></a></li>
									<li><a href="accordion.html"><span>Accordion</span></a></li>
									<li><a href="tabs.html"><span>Tabs</span></a></li>
									<li><a href="pricing-plan.html"><span>Pricing Plan</span></a></li>
									<li><a href="counters.html"><span>Counters</span></a></li>
									<li><a href="icons.html"><span>Icons</span></a></li>
								</ul>
								<!-- sub menu end-->
							</li>
						</ul>
					</div>
					<div class="aside-dropdown__item">
						<!-- aside menu start-->
						<ul class="aside-menu">
							<li class="aside-menu__item"><a class="aside-menu__link" href="#">Documents</a></li>
							<li class="aside-menu__item"><a class="aside-menu__link" href="#">Information</a></li>
							<li class="aside-menu__item"><a class="aside-menu__link" href="#">Additional Pages</a></li>
							<li class="aside-menu__item"><a class="aside-menu__link" href="#">Elements</a></li>
							<li class="aside-menu__item"><a class="aside-menu__link" href="#">Contacts</a></li>
						</ul>
						<!-- aside menu end-->
						<div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:support@helpo.org">support@helpo.org</a></div>
						<div class="aside-inner"><span class="aside-inner__title">Phone numbers</span><a class="aside-inner__link" href="tel:+180012345678">+ 1800 - 123 456 78</a><a class="aside-inner__link" href="tel:+18009756511">+ 1800 - 975 65 11</a></div>
						<ul class="aside-socials">
							<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="aside-dropdown__item"><a class="button button--squared" href="#"> <span>Donate</span></a></div>
				</div>
			</div>
			<!-- aside dropdown end-->
			<!-- header start-->
			<?php require_once("includes/header.html");?>
			<!-- header end-->
			<main class="main">
				<!-- promo start-->
				<section class="promo">
					<div class="promo-slider">
						<div class="promo-slider__item promo-slider__item--style-1">
							<picture>
								<source srcset="img/promo_1.jpg" media="(min-width: 992px)"/><img class="img--bg" src="img/promo_1.jpg" alt="img"/>
							</picture>
							<div class="container">
								<div class="row">
									<div class="col-12">
										<div class="align-container">
											<div class="align-container__item">
												<div class="promo-slider__wrapper-1">
													<h2 class="promo-slider__title"><span>Some people need help and we give it!</span></h2>
												</div>
												<div class="promo-slider__wrapper-2">
													<p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
												</div>
												<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="#">Discover</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="promo-slider__item promo-slider__item--style-2">
							<picture>
								<source srcset="img/promo_2.jpg" media="(min-width: 992px)"/><img class="img--bg" src="img/promo_2.jpg" alt="img"/>
							</picture>
							<div class="container">
								<div class="row">
									<div class="col-lg-8 col-xl-7">
										<div class="align-container">
											<div class="align-container__item">
												<div class="promo-slider__wrapper-1">
													<h2 class="promo-slider__title"><span>Our Helping</span><br/><span>around the world.</span></h2>
												</div>
												<div class="promo-slider__wrapper-2">
													<p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
												</div>
												<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="#">Discover</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="promo-slider__item promo-slider__item--style-3">
							<picture>
								<source srcset="img/promo_3.jpg" media="(min-width: 992px)"/><img class="img--bg" src="img/promo_3.jpg" alt="img"/>
							</picture>
							<div class="container">
								<div class="row">
									<div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
										<div class="align-container">
											<div class="align-container__item">
												<div class="promo-slider__wrapper-1">
													<h2 class="promo-slider__title"><span>Helpo Volounteers</span><br/><span>Around the world.</span></h2>
												</div>
												<div class="promo-slider__wrapper-2">
													<p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
												</div>
												<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="#">Discover</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="promo-pannel__video"><img class="img--bg" src="img/video_block.jpg" alt="image"/><a class="video-trigger" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><span>Watch our video</span><i class="fa fa-play" aria-hidden="true"></i></a></div><a class="anchor promo-pannel__anchor" href="#about"> <span>Scroll Down</span></a>
					<!-- promo pannel start-->
					<div class="promo-pannel">
						<div class="promo-pannel__phones">
							<p class="promo-pannel__title">Phone numbers</p><a class="promo-pannel__link" href="tel:+180012345678">+ 1800 - 123 456 78</a><a class="promo-pannel__link" href="tel:+18009756511">+ 1800 - 975 65 11</a>
						</div>
						<div class="promo-pannel__email">
							<p class="promo-pannel__title">Email</p><a class="promo-pannel__link" href="mailto:support@helpo.org">support@helpo.org</a>
						</div>
						<div class="promo-pannel__socials">
							<p class="promo-pannel__title">Socials</p>
							<ul class="promo-socials">
								<li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- promo pannel end-->
					<!-- slider nav start-->
					<div class="slider__nav slider__nav--promo">
						<div class="promo-slider__count"></div>
						<div class="slider__arrows">
							<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
							</div>
							<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
							</div>
						</div>
					</div>
					<!-- slider nav end-->
				</section>
				<!-- promo end-->
				<!-- about us start-->
				<section class="section about-us about-us--blue" id="about">
					<div class="container">
						<div class="row">
							<div class="col-lg-4">
								<div class="heading heading--primary"><span class="heading__pre-title color--mono">About Us</span>
									<h2 class="heading__title color--white"><span>Helpo Mission is</span> <span>Give for People</span></h2>
								</div><a class="button button--primary d-none d-lg-inline-block" href="about.html">More About</a>
							</div>
							<div class="col-lg-8">
								<p><strong class="color--white">Thresher shark rudd African lungfish silverside, Red salmon rockfish grunion, garpike zebra danio king-of-the-salmon banjo catfish."</strong></p>
								<p>Sea chub demoiselle whalefish zebra lionfish mud cat pelican eel. Minnow snoek icefish velvet-belly shark, California halibut round stingray northern sea robin. Southern grayling trout-perch</p>
								<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish basslet. Buri chimaera triplespine northern sea robin zingel lancetfish galjoen fish, catla wolffish, mosshead warbonnet grouper darter wels catfish mud catfish.</p><a class="button button--primary d-inline-block d-lg-none margin-top-30" href="about.html">More About</a>
							</div>
						</div>
					</div>
				</section>
				<!-- about us end-->
				<!-- icons section start-->
				<section class="section icons-section no-padding-top">
					<div class="container">
						<div class="row offset-margin">
							<div class="col-6 col-lg-3">
								<div class="icon-item icon-item--with-line text-left">
									<div class="icon-item__img">
										<svg class="icon icon-item__icon color--mono">
											<use xlink:href="#donation"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<p class="color--white">Medicine Help</p><span class="color--white">Sea chub demoiselle whalefish zebra lionfish mud cat pelican eel. Minnow snoek icefish velvet-belly</span>
									</div>
								</div>
							</div>
							<div class="col-6 col-lg-3">
								<div class="icon-item icon-item--with-line text-left">
									<div class="icon-item__img">
										<svg class="icon icon-item__icon color--mono">
											<use xlink:href="#church"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<p class="color--white">We Build and Create</p><span class="color--white">Midshipman dartfish Modoc sucker, yellowtail kingfish basslet. Buri chimaera triplespine northern sea </span>
									</div>
								</div>
							</div>
							<div class="col-6 col-lg-3">
								<div class="icon-item icon-item--with-line text-left">
									<div class="icon-item__img">
										<svg class="icon icon-item__icon color--mono">
											<use xlink:href="#blood"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<p class="color--white">Water Delivery</p><span class="color--white">Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, </span>
									</div>
								</div>
							</div>
							<div class="col-6 col-lg-3">
								<div class="icon-item icon-item--with-line text-left">
									<div class="icon-item__img">
										<svg class="icon icon-item__icon color--mono">
											<use xlink:href="#charity"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<p class="color--white">We Care About</p><span class="color--white">Canthigaster rostrata. Midshipman dartfish. Sharksucker sea toad candiru rocket danio tilefish stingra</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- icons section end-->
				<!-- section start-->
				<section class="section">
					<!-- counter style-3 start-->
					<div class="container">
						<div class="row offset-margin">
							<div class="col-md-4 text-center">
								<div class="counter-item counter-item--style-3">
									<div class="counter-item__top">
										<h6 class="counter-item__title">People We Helped on 2018</h6>
									</div>
									<div class="counter-item__lower"><span class="js-counter">200</span><span>k</span></div>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="counter-item counter-item--style-3">
									<div class="counter-item__top">
										<h6 class="counter-item__title">Dollars We Collected</h6>
									</div>
									<div class="counter-item__lower"><span class="js-counter">65</span><span>bil</span></div>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="counter-item counter-item--style-3">
									<div class="counter-item__top">
										<h6 class="counter-item__title">Closed Projects</h6>
									</div>
									<div class="counter-item__lower"><span class="js-counter">100</span><span>k +</span></div>
								</div>
							</div>
						</div>
					</div>
					<!-- counter style-3 end-->
				</section>
				<!-- section end-->
				<!-- causes start-->
				<section class="section causes">
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-xl-5">
								<div class="heading heading--primary"><span class="heading__pre-title color--green">What we Do</span>
									<h2 class="heading__title"><span>Helpo</span> <span>Causes</span></h2>
								</div>
							</div>
							<div class="col-xl-7">
								<p class="no-margin-bottom">Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish</p><a class="button button--blue margin-top-30" href="causes.html">More Causes</a>
							</div>
						</div>
					</div>
					<div class="causes-holder">
						<div class="causes-holder__wrapper">
							<div class="causes-slider causes-slider--dots offset-margin">
								<div class="causes-slider__item">
									<div class="causes-item causes-item--primary">
										<div class="causes-item__body">
											<div class="causes-item__top">
												<h6 class="causes-item__title"> <a href="cause-details.html">Water Delivery in Africa</a></h6>
												<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>
											</div>
											<div class="causes-item__img">
												<div class="causes-item__badge">Water Delivery</div><img class="img--bg" src="img/causes_1.jpg" alt="img"/>
											</div>
											<div class="causes-item__lower">
												<div class="progress-bar">
													<div class="progress-bar__inner" style="width: 78%;">
														<div class="progress-bar__value">78%</div>
													</div>
												</div>
												<div class="causes-item__details-holder">
													<div class="causes-item__details-item"><span>Goal: </span><span>25 000$</span></div>
													<div class="causes-item__details-item text-right"><span>Pledged: </span><span>20 350$</span></div>
												</div>
											</div>
										</div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
									</div>
								</div>
								<div class="causes-slider__item">
									<div class="causes-item causes-item--primary">
										<div class="causes-item__body">
											<div class="causes-item__top">
												<h6 class="causes-item__title"> <a href="cause-details.html">Health in other Countries</a></h6>
												<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>
											</div>
											<div class="causes-item__img">
												<div class="causes-item__badge">Medicine</div><img class="img--bg" src="img/causes_2.jpg" alt="img"/>
											</div>
											<div class="causes-item__lower">
												<div class="progress-bar">
													<div class="progress-bar__inner" style="width: 23%;">
														<div class="progress-bar__value">23%</div>
													</div>
												</div>
												<div class="causes-item__details-holder">
													<div class="causes-item__details-item"><span>Goal: </span><span>14 000$</span></div>
													<div class="causes-item__details-item text-right"><span>Pledged: </span><span>6 098$</span></div>
												</div>
											</div>
										</div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
									</div>
								</div>
								<div class="causes-slider__item">
									<div class="causes-item causes-item--primary">
										<div class="causes-item__body">
											<div class="causes-item__top">
												<h6 class="causes-item__title"> <a href="cause-details.html">We Build and Create</a></h6>
												<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>
											</div>
											<div class="causes-item__img">
												<div class="causes-item__badge">Education</div><img class="img--bg" src="img/causes_3.jpg" alt="img"/>
											</div>
											<div class="causes-item__lower">
												<div class="progress-bar">
													<div class="progress-bar__inner" style="width: 51%;">
														<div class="progress-bar__value">51%</div>
													</div>
												</div>
												<div class="causes-item__details-holder">
													<div class="causes-item__details-item"><span>Goal: </span><span>150 000$</span></div>
													<div class="causes-item__details-item text-right"><span>Pledged: </span><span>76 500$</span></div>
												</div>
											</div>
										</div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
									</div>
								</div>
								<div class="causes-slider__item">
									<div class="causes-item causes-item--primary">
										<div class="causes-item__body">
											<div class="causes-item__top">
												<h6 class="causes-item__title"> <a href="cause-details.html">Healthy Food</a></h6>
												<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>
											</div>
											<div class="causes-item__img">
												<div class="causes-item__badge">Food</div><img class="img--bg" src="img/causes_2.jpg" alt="img"/>
											</div>
											<div class="causes-item__lower">
												<div class="progress-bar">
													<div class="progress-bar__inner" style="width: 50%;">
														<div class="progress-bar__value">50%</div>
													</div>
												</div>
												<div class="causes-item__details-holder">
													<div class="causes-item__details-item"><span>Goal: </span><span>50 000$</span></div>
													<div class="causes-item__details-item text-right"><span>Pledged: </span><span>25 000$</span></div>
												</div>
											</div>
										</div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
									</div>
								</div>
							</div>
						</div>
						<div class="causes-slider__dots"></div>
					</div>
				</section>
				<!-- causes end-->
				<!-- section start-->
				<section class="section no-padding-top no-padding-bottom">
					<div class="row no-gutters">
						<div class="col-lg-6 col-xl-8 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary projects-masonry__item--heading">
							<div class="projects-masonry__img">
								<div class="heading heading--primary"><span class="heading__pre-title">What we Did</span>
									<h2 class="heading__title"><span>Helpo</span> <span>Projects</span></h2>
									<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtai</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
							<div class="projects-masonry__img"><img class="img--bg" src="img/projects_4.jpg" alt="img"/>
								<div class="projects-masonry__inner"><span class="projects-masonry__badge">Education</span>
									<h3 class="projects-masonry__title"> <a href="cause-details.html">Help for Children of the East</a></h3>
									<p>Murray cod clownfish American sole rockfish dojo loach gulper, trout-perch footballfish, pelican eel. Spinefoot coelacanth eagle ray </p>
									<div class="projects-masonry__details-holder">
										<div class="projects-masonry__details-item"><span>Goal: </span><span>25 000$</span></div>
										<div class="projects-masonry__details-item"><span>Date: </span><span>23 Jan'19</span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
							<div class="projects-masonry__img"><img class="img--bg" src="img/projects_5.jpg" alt="img"/>
								<div class="projects-masonry__inner"><span class="projects-masonry__badge">Education</span>
									<h3 class="projects-masonry__title"> <a href="cause-details.html">Help for Children of the East</a></h3>
									<p>Murray cod clownfish American sole rockfish dojo loach gulper, trout-perch footballfish, pelican eel. Spinefoot coelacanth eagle ray </p>
									<div class="projects-masonry__details-holder">
										<div class="projects-masonry__details-item"><span>Goal: </span><span>25 000$</span></div>
										<div class="projects-masonry__details-item"><span>Date: </span><span>23 Jan'19</span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
							<div class="projects-masonry__img"><img class="img--bg" src="img/projects_3.jpg" alt="img"/>
								<div class="projects-masonry__inner"><span class="projects-masonry__badge">Food</span>
									<h3 class="projects-masonry__title"> <a href="cause-details.html">Help for Children of the East</a></h3>
									<p>Murray cod clownfish American sole rockfish dojo loach gulper, trout-perch footballfish, pelican eel. Spinefoot coelacanth eagle ray </p>
									<div class="projects-masonry__details-holder">
										<div class="projects-masonry__details-item"><span>Goal: </span><span>25 000$</span></div>
										<div class="projects-masonry__details-item"><span>Date: </span><span>23 Jan'19</span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
							<div class="projects-masonry__img"><img class="img--bg" src="img/projects_6.jpg" alt="img"/>
								<div class="projects-masonry__inner"><span class="projects-masonry__badge">Medicine</span>
									<h3 class="projects-masonry__title"> <a href="cause-details.html">Helpo for Help</a></h3>
									<p>Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp</p>
									<div class="projects-masonry__details-holder">
										<div class="projects-masonry__details-item"><span>Goal: </span><span>25 000$</span></div>
										<div class="projects-masonry__details-item"><span>Date: </span><span>23 Jan'19</span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
							<div class="projects-masonry__img"><img class="img--bg" src="img/projects_1.jpg" alt="img"/>
								<div class="projects-masonry__inner"><span class="projects-masonry__badge">Water Delivery</span>
									<h3 class="projects-masonry__title"> <a href="cause-details.html">More than One Life Changed</a></h3>
									<p>Rockweed gunnel; candlefish mail-cheeked fish, yellowtail snapper cuskfish elasmobranch seamoth triggerfish gar </p>
									<div class="projects-masonry__details-holder">
										<div class="projects-masonry__details-item"><span>Goal: </span><span>25 000$</span></div>
										<div class="projects-masonry__details-item"><span>Date: </span><span>23 Jan'19</span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
							<div class="projects-masonry__img"><img class="img--bg" src="img/projects_2.jpg" alt="img"/>
								<div class="projects-masonry__inner"><span class="projects-masonry__badge">Medicine</span>
									<h3 class="projects-masonry__title"> <a href="cause-details.html">Helpo for Help</a></h3>
									<p>Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp</p>
									<div class="projects-masonry__details-holder">
										<div class="projects-masonry__details-item"><span>Goal: </span><span>25 000$</span></div>
										<div class="projects-masonry__details-item"><span>Date: </span><span>23 Jan'19</span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary background--light">
							<div class="projects-masonry__img background--brown">
								<div class="counter-item counter-item--style-3 no-margin-bottom">
									<div class="counter-item__top">
										<h6 class="counter-item__title">Closed Projects</h6>
									</div>
									<div class="counter-item__lower"><span class="js-counter">200</span><span>+</span></div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- section end-->
				<!-- events start-->
				<section class="section events">
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12">
								<div class="heading heading--primary heading--center"><span class="heading__pre-title">Events</span>
									<h2 class="heading__title"><span>Helpo Holds</span> <span>for You</span></h2>
									<p class="no-margin-bottom">Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-lg-4">
								<div class="event-item">
									<div class="event-item__img"><img class="img--bg" src="img/event_1.jpg" alt="img"/></div>
									<div class="event-item__content">
										<h6 class="event-item__title"><a href="#">Help for Language. Voluanteer</a></h6>
										<p><b>Dark Spurt,</b> San Francisco, CA 94528, USA</p>
										<p><b>September 30 - October 31,</b> 2019</p>
										<p><b>10:00 AM - 18:00 PM,</b> Everyday</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="event-item">
									<div class="event-item__img"><img class="img--bg" src="img/event_2.jpg" alt="img"/></div>
									<div class="event-item__content">
										<h6 class="event-item__title"><a href="#">The Culture of Africa. Rebirth</a></h6>
										<p><b>Dark Spurt,</b> San Francisco, CA 94528, USA</p>
										<p><b>September 30 - October 31,</b> 2019</p>
										<p><b>10:00 AM - 18:00 PM,</b> Everyday</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="event-item">
									<div class="event-item__img"><img class="img--bg" src="img/event_3.jpg" alt="img"/></div>
									<div class="event-item__content">
										<h6 class="event-item__title"><a href="#">Help for Language. Voluanteer</a></h6>
										<p><b>Dark Spurt,</b> San Francisco, CA 94528, USA</p>
										<p><b>April 15 - April 20,</b> 2019</p>
										<p><b>10:00 AM - 15:00 PM,</b> Everyday</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 text-center"><a class="button button--blue" href="#">View all events</a></div>
						</div>
					</div>
				</section>
				<!-- events end-->
				<!-- section start-->
				<section class="section">
					<div class="jarallax">
						<picture>
							<source srcset="img/pricing_bg.jpg" media="(min-width: 992px)"/><img class="jarallax-img" src="img/pricing_bg.jpg" alt="img"/>
						</picture>
					</div>
					<div class="container">
						<div class="row offset-margin">
							<div class="col-lg-4">
								<div class="heading heading--primary"><span class="heading__pre-title">Pricing Tables</span>
									<h2 class="heading__title color--white"><span>Pricing</span> <span>Plan</span></h2>
									<p class="color--white margin-bottom">Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata.</p>
								</div>
							</div>
							<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-lg-4">
								<div class="pricing-item pricing-item--primary">
									<h6 class="pricing-item__plan">Standart</h6>
									<div class="pricing-item__price">Free</div>
									<ul class="pricing-item__list">
										<li>Canthigaster rostrata. </li>
										<li>Midshipman dartfish </li>
										<li class="item--disabled">Modoc sucker yellowtail </li>
										<li class="item--disabled">Kingfish basslet.</li>
									</ul><a class="pricing-item__button button button--blue" href="#">Get Started</a>
								</div>
							</div>
							<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-lg-4">
								<div class="pricing-item pricing-item--primary">
									<h6 class="pricing-item__plan">Premium</h6>
									<div class="pricing-item__price">0.99<span>/mo</span></div>
									<ul class="pricing-item__list">
										<li>Canthigaster rostrata. </li>
										<li>Midshipman dartfish </li>
										<li>Modoc sucker yellowtail </li>
										<li>Kingfish basslet.</li>
									</ul><a class="pricing-item__button button button--blue" href="#">Get Started</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- section end-->
				<!-- testimonials style-1 start-->
				<section class="section testimonials testimonials--style-1">
					<div class="container">
						<div class="row align-items-end margin-bottom">
							<div class="col-lg-8 col-xl-7 offset-xl-1">
								<div class="heading heading--primary"><span class="heading__pre-title">Testimonials</span>
									<h2 class="heading__title"><span>What People</span> <span>Says About Us</span></h2>
								</div>
							</div>
							<div class="col-lg-4 col-xl-3">
								<!-- slider nav start-->
								<div class="slider__nav testimonials-style-1__nav">
									<div class="slider__arrows">
										<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
										</div>
										<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
										</div>
									</div>
								</div>
								<!-- slider nav end-->
							</div>
						</div>
						<div class="row">
							<div class="col-xl-10 offset-xl-1">
								<div class="testimonials-slider testimonials-slider--style-1">
									<div class="testimonials-slider__item">
										<div class="testimonials-slider__icon">“</div>
										<div class="testimonials-slider__text">
											<p>Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black triplefin Atlantic saury</p>
											<div class="testimonials-slider__author"><span class="testimonials-slider__name">Jack Wolfskin, </span><span class="testimonials-slider__position">Volunteer</span></div>
										</div>
									</div>
									<div class="testimonials-slider__item">
										<div class="testimonials-slider__icon">“</div>
										<div class="testimonials-slider__text">
											<p>Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black triplefin Atlantic saury</p>
											<p>Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black triplefin Atlantic saury</p>
											<div class="testimonials-slider__author"><span class="testimonials-slider__name">Jack Wolfskin, </span><span class="testimonials-slider__position">Volunteer</span></div>
										</div>
									</div>
									<div class="testimonials-slider__item">
										<div class="testimonials-slider__icon">“</div>
										<div class="testimonials-slider__text">
											<p>Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black triplefin Atlantic saury</p>
											<div class="testimonials-slider__author"><span class="testimonials-slider__name">Jack Wolfskin, </span><span class="testimonials-slider__position">Volunteer</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- testimonials style-1 end-->
				<!-- blog start-->
				<section class="section blog">
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12">
								<div class="heading heading--primary heading--center"><span class="heading__pre-title">News</span>
									<h2 class="heading__title no-margin-bottom"><span>Helpo</span> <span>Blog</span></h2>
								</div>
							</div>
						</div>
						<div class="row offset-margin">
							<div class="col-md-6 col-lg-5 col-xl-4">
								<div class="blog-item blog-item--style-1">
									<div class="blog-item__img"><img class="img--bg" src="img/blog_1.jpg" alt="img"/><span class="blog-item__badge">Water Delivery</span></div>
									<div class="blog-item__content">
										<h6 class="blog-item__title"><a href="#">Save the Children's Role in Fight Against Malnutrition Hailed</a></h6>
										<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster</p>
										<div class="blog-item__details"><span class="blog-item__date">23 Jan' 19</span><span>
											<svg class="icon">
												<use xlink:href="#comment"></use>
											</svg> 501</span></div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-7 col-xl-8">
								<div class="blog-item blog-item--style-2"><img class="img--bg" src="img/blog_2.png" alt="img"/>
									<div class="blog-item__content"><span class="blog-item__badge">Education</span>
										<h6 class="blog-item__title"><a href="#">Back to the future: Quality education through respect, commitment and accountability</a></h6>
										<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail</p>
									</div>
									<div class="blog-item__details"><span class="blog-item__date">23 Jan' 19</span><span>
										<svg class="icon">
											<use xlink:href="#comment"></use>
										</svg> 501</span></div>
								</div>
							</div>
							<div class="col-md-6 col-lg-7 col-xl-8">
								<div class="blog-item blog-item--style-2"><img class="img--bg" src="img/blog_8.jpg" alt="img"/>
									<div class="blog-item__content"><span class="blog-item__badge">Food</span>
										<h6 class="blog-item__title"><a href="#">Condolences to Families Effected By Flash Floods in Setswetla, Alexandra Township, Johannesburg</a></h6>
										<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail</p>
									</div>
									<div class="blog-item__details"><span class="blog-item__date">23 Jan' 19</span><span>
										<svg class="icon">
											<use xlink:href="#comment"></use>
										</svg> 501</span></div>
								</div>
							</div>
							<div class="col-md-6 col-lg-5 col-xl-4">
								<div class="blog-item blog-item--style-1">
									<div class="blog-item__img"><img class="img--bg" src="img/blog_4.png" alt="img"/><span class="blog-item__badge">Medicine</span></div>
									<div class="blog-item__content">
										<h6 class="blog-item__title"><a href="#">Save the Children's Role in Fight Against Malnutrition Hailed</a></h6>
										<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster</p>
										<div class="blog-item__details"><span class="blog-item__date">23 Jan' 19</span><span>
											<svg class="icon">
												<use xlink:href="#comment"></use>
											</svg> 501</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- blog end-->
				<!-- donors start-->
				<section class="section donors no-padding-top">
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12">
								<div class="heading heading--primary heading--center"><span class="heading__pre-title">Donors</span>
									<h2 class="heading__title no-margin-bottom"><span>Who Help</span> <span>Us</span></h2>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<!-- donors slider start-->
								<div class="slider-holder">
									<div class="donors-slider donors-slider--style-1">
										<div class="donors-slider__item">
											<div class="donors-slider__img"><img src="img/donor_1.png" alt="donor"/></div>
										</div>
										<div class="donors-slider__item">
											<div class="donors-slider__img"><img src="img/donor_2.png" alt="donor"/></div>
										</div>
										<div class="donors-slider__item">
											<div class="donors-slider__img"><img src="img/donor_3.png" alt="donor"/></div>
										</div>
										<div class="donors-slider__item">
											<div class="donors-slider__img"><img src="img/donor_4.png" alt="donor"/></div>
										</div>
									</div>
								</div>
								<!-- donors slider end-->
							</div>
						</div>
					</div>
				</section>
				<!-- donors end-->
				<!-- subscribe start-->
				<section class="subscribe">
					<div class="container">
						<div class="row align-items-end">
							<div class="col-lg-4">
								<h2 class="subscribe__title">Subscribe.</h2>
							</div>
							<div class="col-lg-8">
								<form class="subscribe-form" action="javascript:void(0);">
									<input class="subscribe-form__input" type="email" name="email" placeholder="Enter your E-mail" required="required"/>
									<input class="subscribe-form__submit" type="submit" value="Submit"/>
								</form>
							</div>
						</div>
					</div>
				</section>
				<!-- subscribe end-->
			</main>
			<!-- footer start-->
			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-lg-3">
							<div class="footer-logo"><a class="footer-logo__link" href="index.html"><img class="footer-logo__img" src="img/logo_white.png" alt="logo"/></a></div>
							<!-- footer socials start-->
							<ul class="footer-socials">
								<li class="footer-socials__item"><a class="footer-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="footer-socials__item"><a class="footer-socials__link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="footer-socials__item"><a class="footer-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li class="footer-socials__item"><a class="footer-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
							<!-- footer socials end-->
						</div>
						<div class="col-sm-6 col-lg-3">
							<h4 class="footer__title">Contacts</h4>
							<div class="footer-contacts">
								<p class="footer-contacts__address">Elliott Ave, Parkville VIC 3052, Melbourne Canada</p>
								<p class="footer-contacts__phone">Phone: <a href="tel:+31859644725">+31 85 964 47 25</a></p>
								<p class="footer-contacts__mail">Email: <a href="mailto:support@helpo.org">support@helpo.org</a></p>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<h4 class="footer__title">Menu & Links</h4>
							<!-- footer nav start-->
							<nav>
								<ul class="footer-menu">
									<li class="footer-menu__item footer-menu__item--active"><a class="footer-menu__link" href="index.html">Home</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">Blog</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="about.html">About</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">Contacts</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">Pages</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">Elements</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="causes.html">Causes</a></li>
								</ul>
							</nav>
							<!-- footer nav end-->
						</div>
						<div class="col-sm-6 col-lg-3">
							<h4 class="footer__title">Donate</h4>
							<p>Help Us Change the Lives of Children in World</p><a class="button footer__button button--filled" href="#">Donate</a>
						</div>
					</div>
					<div class="row align-items-baseline">
						<div class="col-md-6">
							<p class="footer-copyright">© 2020 Helpo Charity Template by Artureanec</p>
						</div>
						<div class="col-md-6">
							<div class="footer-privacy"><a class="footer-privacy__link" href="#">Privacy Policy</a><span class="footer-privacy__divider">|</span><a class="footer-privacy__link" href="#">Term and Condision</a></div>
						</div>
					</div>
				</div>
			</footer>
			<!-- footer end-->
		</div>
		<!-- libs-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="js/libs.min.js"></script>
		<!-- scripts-->
		<script src="js/common.min.js"></script>
	</body>
</html>