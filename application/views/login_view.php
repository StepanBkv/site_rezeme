<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Авторизация</title>
	<link rel="stylesheet" href="css/signup.css">
	<link rel="shortcut icon" href="img/apparatprezidenta2.ico" type="image/png">
</head>
<body>
	<div class="wrapper">
		<?php $request = Controller_login::check_autorize_user(); ?>
		<div class="message">
			<div class="message__row">
				
			</div>
		</div>
		<div class="form">
			<form action="#" id="form" class="form__body">
				<h1 class="form__title form__title__main">Авторизация</h1>
				<div class="form__item">
					<label for="formLogin" class="form__label">Логин:</label>
					<input type="text" id="formLogin" name="login" class="form__input _req">
				</div>
				<div class="form__item">
					<label for="formPass" class="form__label">Пароль:</label>
					<input type="password" id="formPass" name="password" class="form__input _req _pass">
					<div class="error__item">
						
					</div>
				</div>
				<button type="submit" class="form__button">Отправить</button>
				<div class="form__aftertext">
					<p>
						У вас нет аккаунта? - <a href="<?php Controller_login::redirect("registration");?>">Зарегистрируйтесь!</a>
					</p>
				</div>
				<div class="main_page">
					<a href="http://localhost:80/">
						Главная Страница.
					</a>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="js/login.js" > </script> 
</html>