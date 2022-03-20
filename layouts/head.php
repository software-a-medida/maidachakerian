<?php defined('_EXEC') or die; ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{$vkye_lang}">
	<head>
		<meta charset="UTF-8" />
		<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
		{$dependencies.meta}
		<base href="{$vkye_base}">
		<title>{$vkye_title}</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="author" content="Gersón Aarón Gómez Macías" />
		<meta name="keywords" content="{$_vkye_seo_keywords}" />
		<meta name="description" content="{$_vkye_seo_description}" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<link rel="stylesheet" href="{$path.css}valkyrie.css?v=1.0" type="text/css" media="all" />
		<link rel="stylesheet" href="{$path.css}styles.css?v=1.0" type="text/css" media="all" />
		{$dependencies.css}
	</head>
	<body>
		<header class="menu">
			<nav>
				<ul>
					<li><a href="/contact"><i class="fas fa-envelope"></i></a></li>
					<li><a href="https://api.whatsapp.com/send?phone=+520123456789" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
					<li><a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-messenger"></i></a></li>
					<li><a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a></li>
					<li><a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
					<li><a href="tel:+520123456789" target="_blank"><i class="fas fa-phone"></i></a></li>
				</ul>
			</nav>
			<nav>
				<ul>
					<li><a href="/"><i class="fa-solid fa-house"></i></a></li>
					<li><a href="/products"><i class="fa-solid fa-list-ul"></i>	</a></li>
					<li><a href="/cart"><i class="fas fa-cart-plus"></i>3 {$lang.products}</a></li>
					<li><a href="/cart"><i class="fas fa-credit-card"></i>$ 1,500.00</a></li>
					<li><a href="/cart"><i class="fas fa-dollar-sign"></i>MXN</a></li>
					<li><a href="?lang=es"><img src="{$path.images}es.png" alt="ES"></a></li>
					<li><a href="?lang=en"><img src="{$path.images}en.png" alt="EN"></a></li>
				</ul>
			</nav>
		</header>
