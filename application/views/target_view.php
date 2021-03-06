<!DOCTYPE html>
<html>
<head>
<title>Вёрстка</title>
<meta name="viewport" content="width=device-width, inintial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link rel="stylesheet" href="css/target.css" />
<link rel="shortcut icon" href="img/apparatprezidenta2.ico" type="image/png">
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
										<nav class="menu__body">
											<ul class="menu__list">
												<li> <a data-goto=".page__section_1" href="bio" class="menu__link">Biography</a> </li>
												<li> <a data-goto=".page__section_2" href="#" class="menu__link">Service</a> </li>
												<li> <a data-goto=".page__section_3" href="#" class="menu__link">Clients</a> </li>
												<li> <a data-goto=".page__section_3" href="#" class="menu__link">Contact</a> </li>
												<li>
													<a href="" class="menu__link">Страница №1</a> 
													<span class="menu__arrow"></span>
													<ul class="menu__sub-list">
														<li>
															<a href="bio" class="menu__sub-link">Biography</a>
														</li>
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
													<a href="parallax" class="menu__link">Параллакс эффект</a>
												</li>
												<li>
												</li>
												<?php Controller_target::menu_body_list_account();?>
												<li>
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
					
					<div class="box__content"> 
						<div class="move__img__div">
							<div class="cards__row">

							</div>
						</div>

						<div class="container">
							<div data-spollers="" data-one-spoller class="block block_2">
								<div class="block__item">
									<button tabindex="-1" type="button" data-spoller class="block__title">Обычный спойлер №1</button>
									 <div class="block__text">
									 Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, hic adipisci maiores minus laudantium quaerat quia omnis eum obcaecati nesciunt ab pariatur, veniam a veritatis praesentium. Quam vero, placeat molestias?
									 </div>
								</div>

								<div class="block__item">
									<button tabindex="-1" type="button" data-spoller class="block__title">Обычный спойлер №2</button>
									<div class="block__text">
								 	Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui blanditiis modi assumenda accusamus voluptatibus?
									</div>
								</div>

								<div class="block__item">
									<button tabindex="-1" type="button" data-spoller class="block__title">Обычный спойлер №3</button>
									<div class="block__text">
								 	Lorem ipsum dolor sit amet consectetur adipisicing elit. A sit esse et ex in alias dignissimos sunt provident, eaque iure?
									</div>
								</div>

								<div class="block__item">
									<button tabindex="1" type="button" data-spoller class="block__title">Батарейки</button>
									<div class="block__text">
									 	<div class = "batarey_row">
											<div class = "batarey b1"></div>
											<div class = "batarey b2"></div>
											<div class = "batarey b3"></div>
										</div>
									</div>
								</div>

								<div class="block__item">
									<button tabindex="-1" type="button" data-spoller class="block__title">Спойлер с изменениями блока</button>
									<div class="block__text">
								 		<div class="block__row">
								 			<div class="block__color_1">Это блок 1</div>
								 			<div class="block__color_2">Это блок 2</div>
								 			<div class="block__color_3">Это блок 3</div>
								 			<div class="block__color_4">Это блок 4</div>
								 			<div class="block__color_5">Это блок 5</div>
								 		</div>
									</div>
								</div>

								<div class="block__item">
									<button tabindex="-1" type="button" data-spoller class="block__title">Спойлер с добавлением параграфов</button>
									<div class="block__text">
								 		<div class="append__text">
								 			<div class="append__item">
								 				<label for="itemInput" class="label__item">Введите новый параграф</label>
								 				<input type="text" id="itemInput" class="input__item">
								 				<button class="button__append">Добавить параграф</button>
								 			</div>
								 			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, earum!</p>
								 			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, earum!</p>
								 		</div>
									</div>
								</div>
							</div>

							<div class="cards">
								<div class="cards__row">

									<div class="cards__colomn">
										<div class="cards__item">
											<div class="cards__image">	
												<img src="img/sea_1.jpg" alt="sea_1">
												<div class="textCenter">
													<p>
														Красивое море
													</p>
												</div> 
											</div>
										</div>
									</div>

									<div class="cards__colomn">
										<div class="cards__item">
											<div class="cards__image">	
												<img src="img/sea_2.jpg" alt="sea_2">
												<div class="textCenter">
													<p>
														Очень красивое море
													</p>
												</div> 
											</div>
										</div>
									</div>

									<div class="cards__colomn">
										<div class="cards__item">
											<div class="cards__image">	
												<img src="img/sea_3.jpeg" alt="sea_3">
												<div class="textCenter">
													<p>
														Мега красивое море
													</p>
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
							<div class="section__row">
								<div class="section__column_1">
									<div class="section__item_flex">
										<div class="section__subtitle">Lorem, ipsum.</div>
										<div class="section__text">
										Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Atque vero nostrum nesciunt officia, aliquid perspiciatis provident dicta labore eaque illo nihil porro ipsum alias maxime unde? Id et, officia cupiditate?
										</div>
									</div>
								</div>

								<div class="section__column">
									<div class="section__item_flex">
										<div class="section__subtitle">Lorem, ipsum.</div>
										<div class="section__text">
										Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Atque vero nostrum nesciunt officia, aliquid perspiciatis provident dicta labore eaque illo nihil porro ipsum alias maxime unde? Id et, officia cupiditate?
										</div>
									</div>
								</div>

								<div class="section__column">
									<div class="section__item_flex">
										<div class="section__subtitle">Lorem, ipsum.</div>
										<div class="section__text">
										Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Atque vero nostrum nesciunt officia, aliquid perspiciatis provident dicta labore eaque illo nihil porro ipsum alias maxime unde? Id et, officia cupiditate?
										</div>
									</div>
							</div>
						</div>
					</div>
					
					<div data-spollers class="block block__1">
						<div class="block__container">
							<div class="block__item">
								<button type="button" data-spoller class="block__title">Здесь зачёты (нажми на меня!)</button>
								<div class="block__text">
									<p>Зачёт по трансляторам.</p>
					                <p>Зачёт по основам компьютерному моделированию.</p>
					                <p>Зачёт по компьютерной безопасности.</p>
								</div>
							</div>
						</div>
						<div class="text__after"><p>Зачётов нет!((</p></div>
					</div>	

				</div>
			</div>
			
			<footer class="footer">
 				<div class="footer__row"> 
 					<div class="footer__text">Бабаков Степан Евгеньевич 2021</div>
 				</div>
		    </footer>

			<script type="text/javascript" src="js/target.js"></script>
			<script type="text/javascript" src="js/reseme_script.js"></script>
		</div>
	</body>
</html>