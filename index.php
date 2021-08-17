<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title class='title'>Главная страница</title>

 <meta name="viewport" content="width=device-width, inintial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

 <link rel="shortcut icon" href="img/apparatprezidenta2.ico" type="image/png">

<link rel="stylesheet" href="css/style.css" />

<meta charset="utf-8">
</head>
	<body>
		<div class="wrapper">
			<div class="content">
				<div class="page">
					<div class="box__menu">
						<div class="container">
							<header class="header">
								<div class="headear__container">
									<a href="http://localhost:80/" class="header__logo">
											<img class ="icon__image" src="img/R2jASgaT2Z4.jpg" alt="main foto"> 
									</a>
									<div class="header__menu menu">
										<div class="menu__icon">
											<span></span>
										</div>
										<nav class="menu__body">
											<ul class="menu__list">
												<li> <a data-goto=".page__section_1" href="#" class="menu__link">Service</a> </li>
												<li> <a data-goto=".page__section_2" href="#" class="menu__link">Clients</a> </li>
												<li> <a data-goto=".page__section_3" href="#" class="menu__link">Contact</a> </li>
												<li>
													<a href="" class="menu__link">Страница №1</a> 
													<span class="menu__arrow"></span>
													<ul class="menu__sub-list">
														<li>
															<a href="#" class="menu__sub-link">Services</a>
														</li>
														<li>
															<a href="#" class="menu__sub-link">Clients</a>
														</li>
														<li>
															<a href="#" class="menu__sub-link">Contact</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="target.html" class="menu__link tasks">Задания</a>
												</li>
												<?php

												 if (isset($_SESSION['login']) and isset($_SESSION['password'])) {
												 	echo '<li> <a href="account.php" class="menu__link account">Аккаунт</a> 
												 		<span class="menu__arrow"></span>
												 		<ul class="menu__sub-list">
															<li>
																<a href="#"class="menu__sub-link exit">Выйти.</a>
															</li>
														</ul>
												 		</li>';
												 }
												 	
												 else
													echo '<li><a href="vendor/signup.html" class="menu__link autor">Авторизация</a> </li>';
												?>
												<li>
													<select class="change__lang">
														<option value="en">EN</option>
														<option value="ru">RU</option>
													</select>
												</li>
												<li>
													<div class="menu__time">
														<div class="time__write"> </div>
														<div class="date__write"> </div>
														<div class="calendar">
															<div class="calendar__row">
																<div class="calendar__item"></div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</header>
						</div>
					</div>
					
					<div class="rezeme">
						<div class="container">
							<div class="rezeme__item">
								<div class="rezeme__text">
									<div class="hi__row">
										<div class="hi__body">
											<div class="hi__title">
												<h1 class="hi__title">Бабаков Степан Евгеньевич</h1>
											</div>
										</div>
									</div>
									<p class="title__version">Русская версия</p>
									<div class="rezeme__title">
										<div class="rezeme__row">
											<p class="rezeme__old">
												21 года (родился 29 декабря 1999), высшее образование
											</p>
											<p class="rezeme__city">
												Краснодар
											</p>
											<p class="rezeme__agency">
												Гражданство: Россия
											</p>
										</div>

										<div class="rezeme__photo">
											<img src="img/me__photo.jpeg" alt="">
										</div>
									
									</div>

									<div class="rezeme__body">
										<div class="rezeme__header _inline__block">
											<h1 class="post">
												Программист-бэкендер
											</h1>

											<span class="redirect _inline__block">
												Готов к командировкам
											</span>

											<span class="price _inline__block">
												Пока без денег.
											</span>
										</div>

										<div class="rezeme__main">
											<div class="rezeme__block__1">
												<div class="rezeme__item">
													<span class="exper _inline__block">
														Образование
													</span>
													<span class="exper__year _inline__block"> 3 год</span>
												</div>

												<div class="rezeme__row">
													<div class="date">
														<ul>
															<li>
																<div>
																	<span class="exper__hier">
																		Высшее образование
																	</span>
																</div>
															</li>

															<li>
																<div>
																	<span class="exper__now">
																		Сентябрь 2018 - учусь сейчас
																	</span>
																</div>
															</li>
														</ul>
													</div>
													
													<div class="rezeme__item">
														<p class="univer">Кубанский Государственный Университет</p>
														<p class="facultet">Факультет: Компьютерные Технологии и Прикладная Математика</p>
														<p class="way">Фундаментальная Информатика и Информационные Технологии</p>
													</div>
												</div>
											</div>

											<div class="rezeme__block__2">
												<div class="rezeme__item">
													<p class="rezeme__item__title"> Знания и навыки </p>
													<p class="rezeme__item__subtitle">Профессиональные навыки</p>
												</div>

												<div class="rezeme__row">
													<div class="rezeme__row__info">
														<p class="rezeme__item__1">Опыт написания парсеров на Python.</p>
														<p class="rezeme__item__2">Опыт написания небольших скритов на PHP.</p>
														<p class="rezeme__item__3">Опыт работы с Nginx.</p>
														<p class="rezeme__item__4">Знания модели OSI & TSP/IP.</p>
														<p class="rezeme__item__5">Базовые знания HTML&CSS&JS.</p>
														<p class="rezeme__item__6">Начальные знания Git & Linux.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box__news"> 
						<div class="container">
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
 				<div class="footer__row"> 
 					<div class="footer__text">Бабаков Степан Евгеньевич 2021</div>
 				</div>
		    </footer>
		    <script type="text/javascript" src="js/lang.js"></script>
			<script type="text/javascript" src="js/script.js"></script>
			<script type="text/javascript" src="js/calendar.js"></script>
			<script type="text/javascript" src="js/reseme_script.js"></script>
		</div>
	</body>
</html>