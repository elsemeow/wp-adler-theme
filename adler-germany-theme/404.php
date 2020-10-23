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

		<? $currentLang = get_bloginfo('language'); ?>

		<div class="uk-flex uk-flex-center uk-flex-middle error-404-bg" uk-height-viewport>
			<div class="uk-text-center uk-light">
				<h1 class="uk-margin-remove uk-heading-large uk-text-bold">404</h1>
				<p class="uk-margin-bottom">
					<? if($currentLang === 'de-DE') { echo 'Seite Nicht Gefunden'; } else { echo 'Page Not Found'; } ?>
				</p>
				<a class="uk-button uk-button-primary" href="/">
					<? if($currentLang === 'de-DE') { echo 'Zur Startseite'; } else { echo 'To Home Page'; } ?>
				</a>
			</div>
		</div>

	</div>

</body>

</html>
