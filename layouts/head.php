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
		<meta name="author" content="Mojo MBA" />
		<meta name="keywords" content="{$_vkye_seo_keywords}" />
		<meta name="description" content="{$_vkye_seo_description}" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<link rel="stylesheet" href="{$path.css}valkyrie.css?v=1.0" type="text/css" media="all" />
		<link rel="stylesheet" href="{$path.css}styles.css?v=1.1" type="text/css" media="all" />
		{$dependencies.css}
	</head>
	<body>
		<header class="menu">
			<nav>
				<ul>
					<li><a href="/contact"><i class="fas fa-envelope"></i></a></li>
					<li><a href="https://facebook.com/<?php echo Configuration::$contact_facebook; ?>" target="_blank"><i class="fab fa-facebook"></i></a></li>
					<li><a href="https://instagram.com/<?php echo Configuration::$contact_instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
					<li><a href="https://api.whatsapp.com/send?phone=<?php echo Configuration::$contact_whatsapp; ?>" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
				</ul>
			</nav>
			<nav>
				<ul>
					<li><a href="/"><i class="fa-solid fa-house"></i> {$lang.home}</a></li>
					<li><a href="/products"><i class="fa-solid fa-store"></i> {$lang.online_shop}</a></li>
					<li><a href="/cart"><i class="fas fa-cart-plus"></i><?php echo (!empty(Session::get_value('cart')) ? Session::get_value('cart')['amount'] : '0'); ?> {$lang.products}</a></li>
					<li><a href="/cart"><i class="fas fa-credit-card"></i>$ <?php echo (!empty(Session::get_value('cart')) ? Session::get_value('cart')['total'] . ' ' . Session::get_value('cart')['currency'] : '0 ' . Functions::api(['get_unique_account'])['currency']); ?></a></li>
					<li><a href="?lang=es"><img src="{$path.images}es.png" alt="ES"></a></li>
					<li><a href="?lang=en"><img src="{$path.images}en.png" alt="EN"></a></li>
				</ul>
			</nav>
		</header>
		<header class="mobile">
			<a data-action="open_mobile"><i class="fa-solid fa-bars"></i></a>
			<nav>
				<a data-action="close_mobile"><i class="fa-solid fa-circle-xmark"></i></a>
				<ul>
					<li><a href="/contact"><i class="fas fa-envelope"></i></a></li>
					<li><a href="https://facebook.com/<?php echo Configuration::$contact_facebook; ?>" target="_blank"><i class="fab fa-facebook"></i></a></li>
					<li><a href="https://instagram.com/<?php echo Configuration::$contact_instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
					<li><a href="https://api.whatsapp.com/send?phone=<?php echo Configuration::$contact_whatsapp; ?>" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
					<li><a href="/">{$lang.home}</a></li>
					<li><a href="/products">{$lang.online_shop}</a></li>
					<li><a href="/cart"><?php echo (!empty(Session::get_value('cart')) ? Session::get_value('cart')['amount'] : '0'); ?> {$lang.products}</a></li>
					<li><a href="/cart">$ <?php echo (!empty(Session::get_value('cart')) ? Session::get_value('cart')['total'] . ' ' . Session::get_value('cart')['currency'] : '0 ' . Functions::api(['get_unique_account'])['currency']); ?></a></li>
					<li><a href="?lang=es"><img src="{$path.images}es.png" alt="ES"></a></li>
					<li><a href="?lang=en"><img src="{$path.images}en.png" alt="EN"></a></li>
				</ul>
			</nav>
		</header>
