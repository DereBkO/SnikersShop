<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Snikers Shop</title>
	<link rel="stylesheet" href="css/style.min.css">
</head>
	<body>
		<header class="header">
	<div class="container">
		<div class="header__content">
			<div class="header__menu menu">
				<nav class="menu__body">
					<ul class="menu__list">
						<li class="menu__item"><a href="#about" class="menu__link">О нас</a></li>
						<li class="menu__item"><a href="#portfolio" class="menu__link">Сотрудничество</a></li>
						<li class="menu__item"><a href="#reviews" class="menu__link">Вакансии</a></li>
					</ul>
				</nav>
			</div>

			<a href="index.php" class="header__logo">Snikers Shop</a>
			
			<div class="header__users">
				<div class="header__search">Поиск</div>
				<div class="logreg">
					<?php
						if($_COOKIE['user'] == ''):
					?>
					<a href="login.php" class="login">Вход</a>
					<div class="slesh">/</div>
					<a href="register.php" class="reg">Регистрация</a>
					<?php else: ?>
						<P class="user"><?=$_COOKIE['user']?>. <a href="forms/exit.php" class="exit">Выйти</a></P>
					<?php endif;?>
				</div>
				<div class="header__avatar">
					<img src="img/icons/avatar.svg" alt="avatar">
				</div>
				<div class="header__like">
					<img src="img/icons/like.svg" alt="like">
				</div>
			</div>
		</div>
	</div>
</header>
		<main>
			<!-- Чтобы прокрутиться к определенному блоку, надо к section добавить id -->
			<section class="promo">
				<div class="container">
					<div class="promo__content">
						<div class="promo__text">Быстро, Качественно, Стильно!</div>

						<button class="promo__btn">Каталог</button>
					</div>
				</div>

				<div class="promo__line"></div>

				<div class="container">
					<div class="promo__image">
						<img src="img/icons/bape.png" alt="" class="promo__img">
						<img src="img/icons/nike.png" alt="" class="promo__img">
						<img src="img/icons/adidas.png" alt="" class="promo__img">
						<img src="img/icons/jordan.png" alt="" class="promo__img">
						<img src="img/icons/balance.png" alt="" class="promo__img">
						<img src="img/icons/converse.png" alt="" class="promo__img">
					</div>
				</div>
			</section>

			<section class="katalog">
				<div class="container">
					<div class="katalog__content">
						<div class="katalog__title">К каталогу</div>
						<div class="katalog__subtitle">Настоящий стиль сдесь!</div>

						<div class="katalog__image">
							<div class="katalog__image_img katalog__image_img_1">
								<div class="katalog__text">Jordan</div>
							</div>
							<div class="katalog__image_img katalog__image_img_2">
								<div class="katalog__text">Nike Air</div>
							</div>
							<div class="katalog__image_img katalog__image_img_3">
								<div class="katalog__text">Adidas og</div>
							</div>
						</div>
						<div class="katalog__image">
							<div class="katalog__image_img katalog__image_img_4">
								<div class="katalog__text">A Bathing Ape</div>
							</div>
							<div class="katalog__image_img katalog__image_img_5">
								<div class="katalog__text">Converse</div>
							</div>
							<div class="katalog__image_img katalog__image_img_6">
								<div class="katalog__text">New Balance</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		
		<script src="js/script.min.js"></script>
	</body>
</html>