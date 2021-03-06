<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Регистрация</title>
	<link rel="stylesheet" href="css/signin.css">
	<link rel="shortcut icon" href="img/apparatprezidenta2.ico" type="image/png">
</head>
<body>
	<div class="wrapper">
		<div class="form">
			<form action="#" id="form" class="form__body">
				<div class="header">
					<div class="header__row">
						<div class="header__item">
							<h1 class="form__title form__title__main">Регистрация</h1>
							<div class="form__title form__title__main main__page">
								<a href="http://localhost:80/">
									Главная Страница.
								</a>
							</div>	
						</div>
					</div>
				</div>
				<div class="form__item">
					<label for="formName" class="form__label">Имя*:</label>
					<input type="text" id="formName" name="name" class="form__input _req">
				</div>
				<div class="form__item">
					<label for="formSurname" class="form__label">Фамилия*:</label>
					<input type="text" id="formSurname" name="surname" class="form__input _req">
				</div>
				<div class="form__item">
					<div class="form__title">Мужчина или Женщина?</div>
					<div class="options">
						<div class="options__item">
							<input type="radio" checked id="formMan" value="man"name="sex" class="options__input">
							<label for="formMan" class="options__label"><span>Мужчина</span></label>
						</div>
						<div class="options__item">
							<input type="radio" id="formWoman" name="sex" value="woman" class="options__input">
							<label for="formWoman" class="options__label"><span>Женщина</span></label>
						</div>
					</div>			
				</div>
				<div class="form__item">
					<label for="formLogin" class="form__label">Логин*:</label>
					<input type="text" id="formLogin" name="login" class="form__input _req">
					<div class="error__item">
					</div>
				</div>
				<div class="form__item">
					<label for="formPass" class="form__label">Пароль*:</label>
					<input type="password" id="formPass" name="password" class="form__input _req _pass">
					<div class="error__item">
						
					</div>
				</div>
				<div class="form__item">
					<label for="formRePass" class="form__label">Повторите пароль*:</label>
					<input type="password" id="formRePass" name="repassword" class="form__input _req _repass">
					<div class="error__item">
						
					</div>
				</div>
				<div class="form__item">
				    <label for="formPhone" class="form__label ">Номер телефона: </label>
				 	<input type="text" id="formPhone" name="phone" class="form__input _req" placeholder="+7 (999)-99-99-999">
				</div>
				<div class="form__item">
					<label for="formEmail" class="form__label">E-mail*:</label>
					<input type="text" id="formEmail" name="email" class="form__input _req _email">
				</div>
				<div class="form__item">
					<div class="form__label">Возраст: </div>
					<select name="age" class="select">
						<option value="от 0 до 18">Молой</option>
						<option value="от 18 до 25" selected="selected">Молодой</option>
						<option value="от 25 до 45">Старый</option>
						<option value="от 45 до 70">Супер стар</option>
						<option value="от 70">Мега стар</option>
					</select>
				</div>
				<div class="form__item">
					<div class="form__label">Прикрепить фото</div>
					<div class="file">
						<div class="file__item">
							<input id="formImage" accept=".jpg, .png, .gif" type="file" name="image" class="file__input">
							<div class="file__button">Выбрать</div>
						</div>
						<div id="formPreview" class="file__preview"></div>
					</div>
				</div>
				<div class="form__item">
					<div class="checkbox">
						<input id="formAgreement" type="checkbox" checked name="agreement" class="checkbox__input _req">
		                <label for="formAgreement" class="checkbox__label"><span>
		                	Я даю своё согласие на обработку персональных данных в соответствии с <a href="#">Условиями*</a>
		                </span>
		                </label>
					</div>
				</div>
				<button type="submit" class="form__button">Отправить</button>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="js/registration.js" > </script> 
</html>