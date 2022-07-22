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
							<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Home</span></a>
								<!-- sub menu start    -->
								<ul class="aside-menu__sub-list">
									<li><a href="../index.html"><span>01 Home Color Style</span></a></li>
									<li><a href="../front_2.html"> <span>02 Home Color Style</span></a></li>
									<li><a href="../front_3.html"><span>03 Home Color Style</span></a></li>
									<li><a href="index.html"><span>04 Home Monochrome</span></a></li>
									<li><a href="front_2.html"><span>05 Home Monochrome</span></a></li>
									<li><a href="front_3.html"><span>06 Home Monochrome</span></a></li>
								</ul>
								<!-- sub menu end-->
							</li>
							<li class="aside-menu__item aside-menu__item--has-child aside-menu__item--active"><a class="aside-menu__link" href="javascript:void(0);"><span>Pages</span></a>
								<!-- sub menu start    -->
								<ul class="aside-menu__sub-list">
									<li class="item--active"><a href="about.html"><span>About</span></a></li>
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
									<li><a href="causes_2.html"> <span>Causes 2</span></a></li>
									<li><a href="causes_3.html"><span>Causes 3</span></a></li>
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
			<?php require_once('includes/header.html'); ?>
			<!-- header end-->
			<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="img/about.jpg" media="(min-width: 992px)"/><img class="img--bg" src="img/about.jpg" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span>Donation</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
										<h1 class="promo-primary__title"><span>About</span><br/><span>Organization</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- about-us start-->
				<section class="section about-us">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-xl-5">
								<div class="img-box">
									<div class="img-box__img"><img class="img--bg" src="img/about_2.png" alt="img"/></div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-6 offset-xl-1">
								<div class="heading heading--primary"><span class="heading__pre-title">About Us</span>
									<h2 class="heading__title"><span>Help is Our</span> <span>Main Goal</span></h2>
								</div>
								<p><strong>Thresher shark rudd African lungfish silverside, Red salmon rockfish grunion, garpike zebra danio king-of-the-salmon banjo catfish."</strong></p>
								<p>Sea chub demoiselle whalefish zebra lionfish mud cat pelican eel. Minnow snoek icefish velvet-belly shark, California halibut round stingray northern sea robin. Southern grayling trout-perch</p>
								<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish basslet. Buri chimaera triplespine northern sea robin zingel lancetfish galjoen fish, catla wolffish, mosshead warbonnet</p>
							</div>
						</div>
					</div>
				</section>
				<!-- about-us end-->
				<!-- text section start-->
				<section class="section text-section text-section--style-2 no-padding-top">
					<div class="container">
						<div class="row">
							<div class="col-12 text-center">
								<h2 class="text-section__heading">Our Mission</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-8 offset-lg-4 col-xl-7 offset-xl-4">
								<h3 class="text-section__title">We work around the globe to save lives and defeat poverty</h3>
								<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish</p>
							</div>
						</div>
					</div>
				</section>
				<!-- text section end-->
				<!-- video block start-->
				<section class="section video-block no-padding-top">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="video-frame"><img class="img--bg" src="img/video_frame.png" alt="frame"/><a class="video-trigger video-frame__trigger" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><span class="video-frame__icon"><i class="fa fa-play" aria-hidden="true"></i></span><span class="video-frame__text">Watch our video</span></a></div>
							</div>
						</div>
					</div>
				</section>
				<!-- video block end-->
				<!-- statistics start-->
				<section class="section statistics no-padding-top">
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12">
								<div class="heading heading--primary heading--center"><span class="heading__pre-title">What we Do</span>
									<h2 class="heading__title no-margin-bottom color--white"><span>Our</span> <span>Statistics</span></h2>
								</div>
							</div>
						</div>
						<div class="row offset-margin">
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><span class="js-counter">20</span></div>
									<div class="icon-item__text">
										<p>Years of Experience</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><span class="js-counter">32</span></div>
									<div class="icon-item__text">
										<p>Country</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><span class="js-counter">200 </span><span>+</span></div>
									<div class="icon-item__text">
										<p>Thousand People Helped</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><span class="js-counter">65 </span><span>b</span></div>
									<div class="icon-item__text">
										<p>Dollars We Collected				</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- statistics end-->
				<!-- team start-->
				<section class="section team">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="heading heading--primary"><span class="heading__pre-title">Team</span>
									<h2 class="heading__title no-margin-bottom"><span>Meet</span> <span>our Team</span></h2>
								</div>
							</div>
						</div>
						<div class="row margin-bottom">
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder">
										<div class="team-item__img"><img class="img--bg" src="img/team_1.jpg" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Chris Patt</div>
										<div class="team-item__position">Ceo/Founder</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder">
										<div class="team-item__img"><img class="img--bg" src="img/team_2.jpg" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Mike Carter</div>
										<div class="team-item__position">Manager</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder">
										<div class="team-item__img"><img class="img--bg" src="img/team_3.jpg" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Bella Crusio</div>
										<div class="team-item__position">Leader</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder">
										<div class="team-item__img"><img class="img--bg" src="img/team_4.jpg" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Cesario Lee</div>
										<div class="team-item__position">Founder</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder">
										<div class="team-item__img"><img class="img--bg" src="img/team_5.jpg" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Ched Kurtsovski</div>
										<div class="team-item__position">Volunteer</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder">
										<div class="team-item__img"><img class="img--bg" src="img/team_6.jpg" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Lisa Chester</div>
										<div class="team-item__position">Volunteer</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder">
										<div class="team-item__img"><img class="img--bg" src="img/team_7.jpg" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Aisha Ten</div>
										<div class="team-item__position">CEO</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder">
										<div class="team-item__img"><img class="img--bg" src="img/team_8.jpg" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Jack Blumberg</div>
										<div class="team-item__position">Volunteer</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
						</div>
						<div class="row">
							<div class="col-12 text-center"><a class="button button--blue" href="volunteer.html">Become our volunteer</a></div>
						</div>
					</div>
				</section>
				<!-- team end-->
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
									<li class="footer-menu__item"><a class="footer-menu__link" href="index.html">Home</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">Blog</a></li>
									<li class="footer-menu__item footer-menu__item--active"><a class="footer-menu__link" href="about.html">About</a></li>
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