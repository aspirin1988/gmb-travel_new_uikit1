<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>GMB Travel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slidenav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slider.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/search.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/app.css">
</head>
<body>
<div id="mobile" class="uk-offcanvas">
	<div class="uk-offcanvas-bar">
		<ul class="uk-nav mobile-nav-custom">
			<li class="uk-active"><a href="">Главная</a></li>
			<li><a href="#about" data-uk-smooth-scroll>Об Агенстве</a></li>
			<li><a href="#services" data-uk-smooth-scroll>Услуги</a></li>
			<li><a href="">Туры</a></li>
			<li><a href="">Новости</a></li>
			<li><a href="#reviews" data-uk-smooth-scroll>Отзывы клиентов</a></li>
			<li><a href="#questions" data-uk-smooth-scroll>Вопрос-ответ</a></li>
			<li><a href="#contacts" data-uk-smooth-scroll>Контакты</a></li>
		</ul>
	</div>
</div>

<header class="main-header">
	<nav data-uk-sticky="{clsactive: 'sticky-active-custom'}" class="uk-navbar offcanvas-link-menu uk-hidden-large">
		<ul class="uk-navbar-nav">
			<li><a href="#mobile" data-uk-offcanvas class="uk-navbar-toggle"></a></li>
		</ul>
	</nav>
	<div class="header-contacts">
		<div class="uk-container uk-container-center">
			<div class="uk-grid">
				<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-5 uk-text-center">
					<a href="" class="logo-link"><img src="public/img/logo.png" alt=""></a>
				</div>
				<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-4-5 uk-text-right uk-flex-center uk-flex uk-flex-right uk-flex-column">
					<a href="<?=get_field('phone-1')?>"><?=get_field('phone-1')?></a>
					<a href="<?=get_field('phone-2')?>"><?=get_field('phone-2')?></a>
					<a href="<?=get_field('email')?>"><?=get_field('email')?></a>
				</div>
			</div>
		</div>
	</div>
	<div class="menu-desktop uk-visible-large">
		<div class="uk-container uk-container-center">
			<nav class="uk-navbar">
				<ul class="uk-navbar-nav uk-flex uk-flex-center uk-flex-space-around">
					<li class="uk-active"><a href="">Главная</a></li>
					<li><a href="#about" data-uk-smooth-scroll>Об Агенстве</a></li>
					<li><a href="#services" data-uk-smooth-scroll>Услуги</a></li>
					<li><a href="">Туры</a></li>
					<li><a href="">Новости</a></li>
					<li><a href="#reviews" data-uk-smooth-scroll>Отзывы клиентов</a></li>
					<li><a href="#questions" data-uk-smooth-scroll>Вопрос-ответ</a></li>
					<li><a href="#contacts" data-uk-smooth-scroll>Контакты</a></li>
					<li>
						<?php get_search_form() ?>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>