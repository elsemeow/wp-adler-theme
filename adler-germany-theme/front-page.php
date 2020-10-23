<!DOCTYPE html>
<html lang="<? bloginfo('language'); ?>">

<head>
	<meta charset="<? bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="<? bloginfo('description'); ?>">
	<title><? bloginfo('name'); ?></title>

	<link rel="apple-touch-icon" sizes="180x180" href="<? echo get_template_directory_uri() ?>/assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<? echo get_template_directory_uri() ?>/assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<? echo get_template_directory_uri() ?>/assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="<? echo get_template_directory_uri() ?>/assets/favicon/site.webmanifest">

	<link rel="stylesheet" href="<? echo get_template_directory_uri() ?>/assets/uikit/uikit.min.css">
	<link rel="stylesheet" href="<? echo get_template_directory_uri() ?>/style.css">

	<script src="<? echo get_template_directory_uri() ?>/assets/uikit/uikit.min.js"></script>
	<script src="<? echo get_template_directory_uri() ?>/assets/uikit/uikit-icons.min.js"></script>
	<script src="<? echo get_template_directory_uri() ?>/assets/javascripts/script.js"></script>
</head>

<body onload="loader()">

	<section id="loader">
		<div></div>
	</section>

	<div id="main">

		<? $header = CFS()->get('menu_items'); ?>

		<header uk-sticky="show-on-up: true; animation: uk-animation-slide-top" id="header">
			<nav class="uk-navbar-container" uk-navbar>
				<div class="uk-navbar-left">
					<a class="uk-navbar-item uk-logo" href="/">
						<img src="<? echo CFS()->get('header_logo_image'); ?>" alt="Logo" width="48">
						<span class="uk-margin-left uk-visible@m"><? echo CFS()->get('header_logo_text'); ?></span>
					</a>
				</div>
				<div class="uk-navbar-right">
					<ul class="uk-navbar-nav uk-visible@m">
						<? foreach($header as $item) { ?>
						<li><a href="<? echo $item['menu_url']; ?>" uk-scroll><? echo $item['menu_text']; ?></a></li>
						<? } ?>
						<li>
							<a href="#"><span class="uk-icon language-icon-fix" uk-icon="icon: world"></span></a>
							<div class="uk-navbar-dropdown">
								<ul class="uk-nav uk-navbar-dropdown-nav">
									<li class="uk-nav-header"><? echo CFS()->get('header_language_hint'); ?></li>
									<li class="uk-nav-divider"></li>
									<li><a href="<? echo CFS()->get('header_language_de'); ?>">Deutsch</a></li>
									<li><a href="<? echo CFS()->get('header_language_en'); ?>">English</a></li>
								</ul>
							</div>
						</li>
					</ul>
					<a class="uk-navbar-toggle uk-hidden@m" uk-navbar-toggle-icon href="#aside" uk-toggle></a>
				</div>
			</nav>
		</header>

		<aside uk-offcanvas="mode: push; overlay: true" id="aside">
			<div class="uk-offcanvas-bar">
				<button class="uk-offcanvas-close" type="button" uk-close></button>
				<ul class="uk-nav uk-nav-primary">
					<? foreach($header as $item) { ?>
					<li><a href="<? echo $item['menu_url']; ?>" onclick="hideAside()" uk-scroll><? echo $item['menu_text']; ?></a></li>
					<? } ?>
					<li class="uk-nav-header"><? echo CFS()->get('header_language_hint'); ?></li>
					<li class="uk-nav-divider"></li>
					<li><a href="<? echo CFS()->get('header_language_de'); ?>">Deutsch</a></li>
					<li><a href="<? echo CFS()->get('header_language_en'); ?>">English</a></li>
				</ul>
			</div>
		</aside>

		<section 
			class="uk-background-cover" 
			uk-height-viewport="offset-top: true" 
			uk-parallax="bgy: -200px" 
			style="background-image: url(<? echo CFS()->get('banner_image'); ?>);" 
			id="hero"
		>
			<div class="mouse-icon">
				<div class="mouse-icon-wheel"></div>
				<div class="mouse-icon-scroll"></div>
			</div>
		</section>

		<section class="section uk-background-muted" id="about">
			<div class="container">
				<h1><? echo CFS()->get('about_heading'); ?></h1>
				<p><? echo CFS()->get('about_content'); ?></p>
			</div>
		</section>

		<? $history = CFS()->get('history_items'); ?>

		<section class="section uk-background-default" id="history">
			<div class="container">
				<h1><? echo CFS()->get('history_heading'); ?></h1>
				<div class="uk-grid-collapse uk-child-width-1-2@s" uk-grid>
					<? foreach($history as $item) { ?>
					<div class="history-item">
						<div class="uk-text-center">
							<img class="image-over-description" src="<? echo $item['history_image']; ?>" alt="" loading="lazy">
							<small><? echo $item['history_image_text']; ?></small>
						</div>
					</div>
					<div class="history-item uk-background-muted">
						<div>
							<h3><? echo $item['history_year']; ?></h3>
							<p><? echo $item['history_content']; ?></p>
						</div>
					</div>
					<? } ?>
				</div>
			</div>
		</section>

		<? $gallery = CFS()->get('gallery_items'); ?>

		<section class="section uk-background-muted" id="gallery">
			<div class="container">
				<h1><? echo CFS()->get('gallery_heading'); ?></h1>
				<div class="uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid="masonry: true" uk-lightbox="animation: slide">
					<? foreach($gallery as $item) { ?>
					<div class="uk-text-center">
						<a class="uk-link-toggle" href="<? echo $item['gallery_image']; ?>" data-alt="">
							<img class="image-over-description" src="<? echo $item['gallery_image']; ?>" alt="" loading="lazy">
						</a>
						<small><? echo $item['gallery_image_text']; ?></small>
					</div>
					<? } ?>
				</div>
			</div>
		</section>

		<section class="section uk-background-default" id="contacts">
			<div class="container">
				<h1><? echo CFS()->get('contacts_heading'); ?></h1>
				<div class="uk-child-width-1-2@s uk-flex-middle" uk-grid>
					<div>
						<ul class="uk-list contacts-list">
							<li class="uk-flex uk-flex-middle">
								<span uk-icon="icon: location; ratio: 1.3"></span>
								<p class="uk-margin-small-left"><? echo CFS()->get('contacts_adderss'); ?></p>
							</li>
							<li class="uk-flex uk-flex-middle">
								<span uk-icon="icon: receiver; ratio: 1.3"></span>
								<p class="uk-margin-small-left"><a href="tel:<? echo CFS()->get('contacts_phone'); ?>"><? echo CFS()->get('contacts_phone'); ?></a></p>
							</li>
							<li class="uk-flex uk-flex-middle">
								<span uk-icon="icon: mail; ratio: 1.3"></span>
								<p class="uk-margin-small-left"><a href="mailto:<? echo CFS()->get('contacts_email'); ?>"><? echo CFS()->get('contacts_email'); ?></a></p>
							</li>
						</ul>
					</div>
					<div class="uk-text-center uk-flex-first@s">
						<img class="image-over-description" src="<? echo CFS()->get('contacts_image'); ?>" alt="">
						<small><? echo CFS()->get('contacts_image_text'); ?></small>
					</div>
				</div>
			</div>
		</section>

		<footer class="section footer">
			<div class="container">
				<button class="uk-icon-button to-top-button" uk-icon="chevron-up" uk-scroll></button>
				<small>Copyright © <span id="current-year"></span> <? echo CFS()->get('footer_copy'); ?></small>
			</div>
		</footer>

	</div>

	<script>
		currentYear();
		zigzagResponsive();
	</script>

</body>

</html>
