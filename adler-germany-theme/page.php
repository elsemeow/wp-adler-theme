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
					<li class="uk-nav-header"><? echo CFS()->get('header_language_hint'); ?></li>
					<li class="uk-nav-divider"></li>
					<li><a href="<? echo CFS()->get('header_language_de'); ?>">Deutsch</a></li>
					<li><a href="<? echo CFS()->get('header_language_en'); ?>">English</a></li>
				</ul>
			</div>
		</aside>

		<section class="section uk-background-muted post">
			<div class="container">
				<a href="/" class="uk-icon-button" uk-icon="arrow-left"></a>
				<hr>
				<h1><? echo $post->post_title; ?></h1>
				<? echo $post->post_content; ?>
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
	</script>
</body>

</html>
