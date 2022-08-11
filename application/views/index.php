<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<!-- Standard Meta -->
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#f2f3f5" />
	<!-- Site Properties -->
	<title>Intraday Equity Trade</title>
	<!-- Critical preload -->
	<link rel="preload" href="<?= BASE_URL ?>/public/js/vendors/uikit.min.js" as="script">
	<link rel="preload" href="<?= BASE_URL ?>/public/css/vendors/uikit.min.css" as="style">
	<link rel="preload" href="<?= BASE_URL ?>/public/css/style.css" as="style">
	<!-- Icon preload -->
	<link rel="preload" href="<?= BASE_URL ?>/public/fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?= BASE_URL ?>/public/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
	<!-- Font preload -->
	<link rel="preload" href="<?= BASE_URL ?>/public/fonts/inter-v2-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?= BASE_URL ?>/public/fonts/inter-v2-latin-500.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?= BASE_URL ?>/public/fonts/inter-v2-latin-700.woff2" as="font" type="font/woff2" crossorigin>
	<!-- Favicon and apple icon -->
	<link rel="shortcut icon" href="<?= BASE_URL ?>/public/img/new_logo.jpg" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="<?= BASE_URL ?>/public/img/new_logo.jpg">
	<!-- CSS -->
	<link rel="stylesheet" href="<?= BASE_URL ?>/public/css/vendors/uikit.min.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>/public/css/style.css">
</head>

<body>
	<!-- preloader begin -->
	<div class="in-loader">
		<div></div>
		<div></div>
		<div></div>
	</div>
	<!-- preloader end -->
	<header>
		<!-- header content begin -->
		<div class="uk-section uk-padding-remove-vertical">
			<nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
				<div class="uk-container" data-uk-navbar>
					<div class="uk-navbar-left">
						<div class="uk-navbar-item">
							<!-- logo begin -->
							<a class="uk-logo" href="<?= BASE_URL ?>">
								<img src="<?= BASE_URL ?>/public/img/in-lazy.gif" data-src="<?= BASE_URL ?>/public/img/new_logo.jpg" alt="logo" width="60" height="60" data-uk-img>
							</a>
							<!-- logo end -->
						</div>
					</div>
					<style>
						.uk-button-default:focus,
						.uk-button-default:hover {
							background-color: #fc5b3f !important;
						}
					</style>
					<div class="uk-navbar-right">
						<div class="uk-navbar-item uk-hidden@m in-optional-nav telegram-join-button">
							<a href="https://t.me/IntradayEquityTrade">
								<button class="uk-button uk-button-default uk-border-rounded" style='color:white;'>
									<i class="fab fa-telegram-plane" style='color:#229ED9; font-size:20px;'></i>
									Join Telegram
								</button>
							</a>
						</div>
						<div class="uk-navbar-item uk-visible@m in-optional-nav telegram-join-button">
							<a href="https://t.me/IntradayEquityTrade">
								<button class="uk-button uk-button-default uk-border-rounded" style='color:white;'>
									<i class="fab fa-telegram-plane" style='color:#229ED9; font-size:20px;'></i>
									Join Telegram for Free Tips
								</button>
							</a>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<!-- header content end -->
	</header>
	<main>
		<style>
			.main-content-small-screen {
				min-height: 800px !important;
			}

			.main-content-small-screen-banner-img {
				margin-top: 25px !important;
			}
		</style>
		<!-- slideshow content begin -->
		<div class="uk-section uk-padding-remove-vertical">
			<div class="uk-light in-slideshow uk-background-cover uk-background-top-center" style="background-image: url(<?= BASE_URL ?>/public/img/in-liquid-slide-bg.png);" data-uk-slideshow>
				<ul class="uk-slideshow-items main-content-small-screen">
					<li>
						<div class="uk-container">
							<div class="uk-grid-medium" data-uk-grid>
								<div class="uk-width-1-2@s">
									<div class="uk-overlay">
										<h1>Join IET,<br>a single service provider for <br> Stock Market.</h1>
										<p class="uk-text-lead">Trade forex, commodities, and stocks with experts from IET</p>
										<a href="https://upstox.com/open-account/?f=JH3470" class="uk-button uk-button-default uk-border-rounded">Join Upstox</a>
									</div>
								</div>
								<div class="uk-width-1-2@s main-content-small-screen-banner-img">
									<img class="in-slide-img" src="<?= BASE_URL ?>/public/img/in-lazy.gif" data-src="<?= BASE_URL ?>/public/img/in-liquid-slide-1.svg" alt="image-slide" width="500" height="400" data-uk-img>
								</div>
							</div>
						</div>
					</li>
				</ul>
				<div class="uk-section uk-padding-remove-vertical in-slideshow-features uk-visible@m uk-hidden">
					<div class="uk-container">
						<ul class="uk-grid uk-child-width-1-5@m uk-text-center" data-uk-grid>
							<li>
								<img src="<?= BASE_URL ?>/public/img/in-lazy.gif" data-src="<?= BASE_URL ?>/public/img/in-liquid-ticker-1.svg" alt="ticker-image" data-width data-height data-uk-img>
								<span class="uk-label uk-label-success uk-margin-left"><i class="fas fa-caret-up"></i>1,740.05</span>
							</li>
							<li>
								<img src="<?= BASE_URL ?>/public/img/in-lazy.gif" data-src="<?= BASE_URL ?>/public/img/in-liquid-ticker-2.svg" alt="ticker-image" data-width data-height data-uk-img>
								<span class="uk-label uk-label-success uk-margin-left"><i class="fas fa-caret-up"></i>217.90</span>
							</li>
							<li>
								<img src="<?= BASE_URL ?>/public/img/in-lazy.gif" data-src="<?= BASE_URL ?>/public/img/in-liquid-ticker-3.svg" alt="ticker-image" data-width data-height data-uk-img>
								<span class="uk-label uk-label-danger uk-margin-left"><i class="fas fa-caret-down"></i>270.97</span>
							</li>
							<li>
								<img src="<?= BASE_URL ?>/public/img/in-lazy.gif" data-src="<?= BASE_URL ?>/public/img/in-liquid-ticker-4.svg" alt="ticker-image" data-width data-height data-uk-img>
								<span class="uk-label uk-label-success uk-margin-left"><i class="fas fa-caret-up"></i>3,218.51</span>
							</li>
							<li>
								<img src="<?= BASE_URL ?>/public/img/in-lazy.gif" data-src="<?= BASE_URL ?>/public/img/in-liquid-ticker-5.svg" alt="ticker-image" data-width data-height data-uk-img>
								<span class="uk-label uk-label-danger uk-margin-left"><i class="fas fa-caret-down"></i>735.11</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- slideshow content end -->
		<!-- section content begin -->
		<div class="uk-section uk-section-secondary in-liquid-1">
			<div class="uk-container uk-light">
				<div class="uk-grid uk-flex uk-flex-middle">
					<div class="uk-width-1-2@m">
						<h2>Save time. Get <span class="in-highlight">higher returns</span>.</h2>
					</div>
					<div class="uk-width-1-2@m" style='display:none;'>
						<a class="uk-button uk-button-default uk-border-rounded uk-align-right@m" href="#">Find out more<i class="fas fa-angle-right uk-margin-small-left"></i></a>
					</div>
				</div>
				<div class="uk-child-width-1-3@m" data-uk-grid>
					<div>
						<div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container">
							<div class="uk-card-media-top">
								<img src="<?= BASE_URL ?>/public/img/in-lazy.gif" data-src="<?= BASE_URL ?>/public/img/in-liquid-object-1.svg" alt="sample-image" data-width data-height data-uk-img>
							</div>
							<div class="uk-card-body">
								<h3>Great Pricing</h3>
								<p>Low brokerage charges on intraday orders (&#8377 20/per order)</p>
							</div>
						</div>
					</div>
					<div>
						<div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container">
							<div class="uk-card-media-top">
								<img src="<?= BASE_URL ?>/public/img/in-lazy.gif" data-src="<?= BASE_URL ?>/public/img/in-liquid-object-2.svg" alt="sample-image" data-width data-height data-uk-img>
							</div>
							<div class="uk-card-body">
								<h3>Free Credits</h3>
								<p>Get 30-days of brokerage* credit up to &#8377 1000</p>
							</div>
						</div>
					</div>
					<div>
						<div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container">
							<div class="uk-card-media-top">
								<img src="<?= BASE_URL ?>/public/img/in-lazy.gif" data-src="<?= BASE_URL ?>/public/img/in-liquid-object-3.svg" alt="sample-image" data-width data-height data-uk-img>
							</div>
							<div class="uk-card-body">
								<h3>Diversified Investment</h3>
								<p>Invest in direct mutual fund plans that charge 0% commisions</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section content end -->
		<!-- section content begin -->
		<div class="uk-section in-liquid-2">
			<div class="uk-container">
				<div class="uk-grid-large uk-child-width-1-2@m" data-uk-grid>
					<div class="uk-flex uk-flex-left">
						<div class="uk-margin-right">
							<img src="<?= BASE_URL ?>/public/img/in-lazy.gif" data-src="<?= BASE_URL ?>/public/img/in-liquid-icon-1.svg" alt="sample-icon" width="65" height="65" data-uk-img>
						</div>
						<div>
							<h3>IPOs</h3>
							<p>Apply for IPOs anytime, anywhere directly from your demat account.</p>
							<!-- <a class="uk-button uk-button-text" href="#">Learn more<i class="fas fa-long-arrow-alt-right uk-margin-small-left"></i></a> -->
						</div>
					</div>
					<div class="uk-flex uk-flex-left">
						<div class="uk-margin-right">
							<img src="<?= BASE_URL ?>/public/img/in-lazy.gif" data-src="<?= BASE_URL ?>/public/img/in-liquid-icon-2.svg" alt="sample-icon" width="65" height="65" data-uk-img>
						</div>
						<div>
							<h3>Whatsapp Integrated Services</h3>
							<p>Apply for IPOs directly from your Whatsapp.</p>
							<!-- <a class="uk-button uk-button-text" href="#">Learn more<i class="fas fa-long-arrow-alt-right uk-margin-small-left"></i></a> -->
						</div>
					</div>
					<div class="uk-flex uk-flex-left">
						<div class="uk-margin-right">
							<img src="<?= BASE_URL ?>/public/img/in-lazy.gif" data-src="<?= BASE_URL ?>/public/img/in-liquid-icon-3.svg" alt="sample-icon" width="65" height="65" data-uk-img>
						</div>
						<div>
							<h3>Variety of Options</h3>
							<p>Choose from 2,500+ Mutual Funds options.</p>
							<!-- <a class="uk-button uk-button-text" href="#">Learn more<i class="fas fa-long-arrow-alt-right uk-margin-small-left"></i></a> -->
						</div>
					</div>
					<div class="uk-flex uk-flex-left">
						<div class="uk-margin-right">
							<img src="<?= BASE_URL ?>/public/img/in-lazy.gif" data-src="<?= BASE_URL ?>/public/img/in-liquid-icon-4.svg" alt="sample-icon" width="65" height="65" data-uk-img>
						</div>
						<div>
							<h3>Zero Commission</h3>
							<p>Zero Commission on Investment in mutual funds.</p>
							<!-- <a class="uk-button uk-button-text" href="#">Learn more<i class="fas fa-long-arrow-alt-right uk-margin-small-left"></i></a> -->
						</div>
					</div>
				</div>
				<div class="uk-grid uk-flex uk-flex-center">
					<div class="uk-width-5-6@m uk-margin-medium-top">
						<div class="uk-card uk-card-default uk-card-body uk-background-contain uk-background-top-left" style="background-image: url(<?= BASE_URL ?>/public/img/in-liquid-card-bg.png);" data-uk-img>
							<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-3@m uk-text-center" data-uk-grid>
								<div class="uk-width-1-1">
									<h4><span>Simple steps to start trade.</span></h4>
								</div>
								<div>
									<span class="in-icon-wrap circle">1</span>
									<p>Register account with Upstox</p>
								</div>
								<div>
									<span class="in-icon-wrap circle">2</span>
									<p>Fund your account</p>
								</div>
								<div>
									<span class="in-icon-wrap circle">3</span>
									<p>Start your trade</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section content end -->
		<div class="uk-section in-liquid-7 in-offset-top-10">
			<div class="uk-container">
				<div class="uk-grid uk-flex uk-flex-center">
					<div class="uk-width-5-6@m uk-background-contain uk-background-center-center" style="background-image: url(<?= BASE_URL ?>/public/img/in-liquid-7-bg.png);" data-uk-img="">
						<div class="uk-text-center">
							<h2 class="uk-margin-remove">Upstox</h2>
							<p class="uk-text-lead uk-text-muted uk-margin-small-top">Improve your trading results with our industry-leading technology</p>
						</div>
						<img class="uk-align-center" src="<?= BASE_URL ?>/public/img/in-liquid-7-mockup.png" data-src="<?= BASE_URL ?>/public/img/in-liquid-7-mockup.png" alt="sample-images" width="691" height="420" data-uk-img="">
						<div class="uk-grid-divider uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center in-offset-top-10 uk-grid" data-uk-grid="">
							<div class="uk-first-column">
								<h2 class="uk-margin-small-bottom">~30ms</h2>
								<p class="uk-text-small uk-text-uppercase uk-margin-remove-top">blazing fast executions speed*</p>
							</div>
							<div>
								<h2 class="uk-margin-small-bottom">24/7</h2>
								<p class="uk-text-small uk-text-uppercase uk-margin-remove-top">help & support available</p>
							</div>
							<div>
								<h2 class="uk-margin-small-bottom">SSO</h2>
								<p class="uk-text-small uk-text-uppercase uk-margin-remove-top">all investment related services at one location</p>
							</div>
							<div>
								<h2 class="uk-margin-small-bottom">5000+</h2>
								<p class="uk-text-small uk-text-uppercase uk-margin-remove-top">collection of trading scripts</p>
							</div>
						</div>
						<div class="uk-text-center uk-margin-medium-top">
							<a class="uk-button uk-button-primary uk-border-rounded uk-margin-small-right" href="https://upstox.com/open-account/?f=JH3470">Create account<i class="fas fa-angle-right uk-margin-small-left"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section content begin -->
		<div class="uk-section in-liquid-4">
			<div class="uk-container">
				<div class="uk-grid uk-flex uk-flex-middle">
					<div class="uk-width-1-2@m">
						<h2>Stay ahead of the curved.</h2>
					</div>
				</div>
				<div class="uk-grid uk-child-width-1-2@s uk-child-width-1-3@m in-blog-4" data-uk-grid>
					<div class="uk-flex uk-flex-left">
						<div class="in-liquid-category">
							<p class="uk-text-small uk-text-uppercase"><span>Equity</span></p>
						</div>
						<div>
							<article class="uk-article">
								<h5 class="uk-margin-remove-bottom">
									<a href="#">Large Database</a>
								</h5>
								<p>Scan through 5000+ stocks by their sector, technical indicator, or fundamental data.</p>
								<a class="uk-button uk-button-text uk-margin-top" href="#">Ex: Top Gainers, Automobile Stocks, </br> 52-Week High Stocks etc.</a>
							</article>
						</div>
					</div>
					<div class="uk-flex uk-flex-left">
						<div class="in-liquid-category">
							<p class="uk-text-small uk-text-uppercase"><span>F&O</span></p>
						</div>
						<div>
							<article class="uk-article">
								<h5 class="uk-margin-remove-bottom">
									<a href="#">Option Chain Analyzer</a>
								</h5>
								<p>With Option Strategy builder, create an option strategy from Option Chain, up to 4 orders (legs)</p>
								<a class="uk-button uk-button-text uk-margin-top" href="#">Single Click multiple Order</a>
							</article>
						</div>
					</div>
					<div class="uk-flex uk-flex-left uk-visible@m">
						<div class="in-liquid-category">
							<p class="uk-text-small uk-text-uppercase"><span>Leverage</span></p>
						</div>
						<div>
							<article class="uk-article">
								<h5 class="uk-margin-remove-bottom">
									<a href="#">A+ Grade Trading Platform</a>
								</h5>
								<p>With our Margin Trading Facility get up to 2X leverage for Equity Delivery trading or buying certain stocks and holding them</p>
								<a class="uk-button uk-button-text uk-margin-top" href="#">(50% funds) from Upstox</a>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section content end -->
		<div class="uk-section in-liquid-15 in-offset-top-20 uk-background-contain uk-background-bottom-center" data-src="<?= BASE_URL ?>/public/img/in-liquid-15-bg.png" data-uk-img="" style="background-image: url(<?= BASE_URL ?>/public/img/in-liquid-15-bg.png);">
			<div class="uk-container">
				<div class="uk-grid uk-flex uk-flex-center">
					<div class="uk-width-5-6@m">
						<div class="uk-text-center">
							<h2 class="uk-margin-remove">Market analysis and trade.</h2>
							<p class="uk-text-lead uk-text-muted uk-margin-small-top">Clustering of top graded features and services, direct in your hands.</p>
						</div>
						<div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-medium-top uk-grid" data-uk-grid="">
							<div class="uk-grid-margin uk-first-column">
								<div class="uk-card uk-card-secondary uk-card-body uk-border-rounded">
									<div class="uk-flex uk-flex-middle">
										<div>
											<h6 class="uk-margin-remove">Smartlists</h6>
										</div>
									</div>
									<p>Quality stocks curated by experts based on different parameters.</p>
								</div>
							</div>
							<div class="uk-grid-margin uk-first-column">
								<div class="uk-card uk-card-secondary uk-card-body uk-border-rounded">
									<div class="uk-flex uk-flex-middle">
										<div>
											<h6 class="uk-margin-remove">Smart filters</h6>
										</div>
									</div>
									<p>Feature to generate a list of stocks that match your preferences.</p>
								</div>
							</div>
							<div class="uk-grid-margin">
								<div class="uk-card uk-card-secondary uk-card-body uk-border-rounded">
									<div class="uk-flex uk-flex-middle">
										<div>
											<h6 class="uk-margin-remove">Personalisation</h6>
										</div>
									</div>
									<p>Enjoy a personalised trading and investing experience.</p>
								</div>
							</div>
							<div class="uk-grid-margin">
								<div class="uk-card uk-card-secondary uk-card-body uk-border-rounded">
									<div class="uk-flex uk-flex-middle">
										<div>
											<h6 class="uk-margin-remove">Robust Charts</h6>
										</div>
									</div>
									<p>Backed by Tradingview and ChartIQ to track trends and analysis</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="uk-section in-liquid-13">
			<div class="uk-container">
				<div class="uk-grid uk-flex uk-flex-center">
					<div class="uk-width-5-6@m uk-margin-medium-top">
						<div class="uk-card uk-card-default uk-card-body uk-border-rounded in-app-style">
							<div class="uk-grid-collapse uk-flex uk-flex-middle uk-grid" data-uk-grid="">
								<div class="uk-width-expand@m uk-first-column">
									<h4 class="uk-margin-remove">Enhance your trading experience</h4>
									<p class="uk-text-muted uk-margin-remove">Join our Telegram Channel</p>
								</div>
								<div class="uk-width-1-1 uk-width-3-5@m uk-inline">
									<div class="uk-position-bottom">
										<img src="<?= BASE_URL ?>/public/img/in-liquid-13-mockup.png" data-src="<?= BASE_URL ?>/public/img/in-liquid-13-mockup.png" alt="sample-images" width="226" height="172" data-uk-img="">
									</div>
									<div class="uk-align-right@m" style="margin-right:50px;">
										<a href="https://t.me/IntradayEquityTrade" class="uk-button in-button-app">
											<i class="fab fa-telegram-plane bg-primary"></i>
											<span class="wrapper">Join<span>Telegram</span></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer>
		<!-- footer content begin -->
		<div class="uk-section uk-background-secondary uk-light">
			<div class="uk-container uk-text-small">
				<div class="uk-child-width-1-2@m" data-uk-grid>
					<div class="in-footer-logo">
						<img src="<?= BASE_URL ?>/public/img/new_logo.jpg" data-src="<?= BASE_URL ?>/public/img/new_logo.jpg" alt="logo" width="100" height="85" data-uk-img>
					</div>
					<div class="uk-flex uk-flex-right@m">
						<div class="in-footer-socials">
							<a href="#"><i class="fab fa-facebook-square"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-youtube"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
							<a href="#"><i class="fab fa-telegram-plane"></i></a>
						</div>
					</div>
				</div>
				<div class="uk-grid uk-margin-large-top">
					<div class="uk-width-1-1">
						<p class="uk-heading-line uk-margin-large-bottom"><span>Copyright ©2022 Intraday Equity Trade. All Rights Reserved.</span></p>
						<p class="in-trading-risk">Trading derivatives and leveraged products carries a high level of risk, including the risk of losing substantially more than your initial investment. It is not suitable for everyone. Before you make any decision in relation to a financial product you should obtain and consider our Product Disclosure Statement (PDS) and Financial Services Guide (FSG) available on our website and seek independent advice if necessary</p>
					</div>
				</div>
			</div>
		</div>
		<!-- footer content end -->
		<!-- totop begin -->
		<div class="uk-visible@m">
			<a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll></a>
		</div>
		<!-- totop end -->
	</footer>
	<!-- Javascript -->
	<script src="<?= BASE_URL ?>/public/js/vendors/uikit.min.js"></script>
	<script src="<?= BASE_URL ?>/public/js/vendors/blockit.min.js"></script>
	<script src="<?= BASE_URL ?>/public/js/config-theme.js"></script>
</body>

</html>