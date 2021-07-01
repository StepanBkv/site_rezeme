<<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/form_valid_phone.css">
</head>
<body>
	<div class="wrapper">
		<div class="form">
			<form action="valid_phone.php" method="POST" id="form" class="form__body">
				<h1 class="form__title">Проверка номера телефона</h1>
				<div class="form__item">
					<label for="formName" class="form__label">Имя: </label>
					<input type="text" id="formName" name="name" class="form__input">
				</div>
				<div class="form__item">
				    <label for="formPass" class="form__label ">Фамилия: </label>
				 	<input type="text" id="formPass" name="surname" class="form__input">
				</div>
				<div class="form__item">
				    <label for="formPhone" class="form__label ">Номер телефона: </label>
				 	<input type="text" id="formPhone" name="phone" class="form__input" placeholder="+7 (999)-99-99-999">
				</div>
				<button type="submit" class="form__button">Отправить</button>
			</form>
		</div>
	</div>
</body>
</html>