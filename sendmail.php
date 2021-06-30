<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;


	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('ru', 'phpmailer/language/');
	$mail->IsHTML(true);

	//От кого письмо
	$mail->setFrom('stepanpf3@gmail.com', 'Степан Бабаков');
	//Кому отправить
	$mail->addAddress('stepan.babakov.1999@mail.ru');
	//Тема письма
	$mail->Subject = 'Привет! Это письмо с формой';
	//Тело письма 
	$body = '<h1>Встречайте супер письмо!</h1>';

	if(trim(!empty($_POST['name']))){
		$body.='<p><strong>Имя:</strong>'.$_POST['name'].'</p>';
	}
	if(trim(!empty($_POST['email']))){
		$body.='<p><strong>E-mail:</strong>'.$_POST['email'].'</p>';
	}
	if(trim(!empty($_POST['age']))){
		$body.='<p><strong>Возраст:</strong>'.$_POST['age'].'</p>';
	}
	if(trim(!empty($_POST['message']))){
		$body.='<p><strong>Сообщение:</strong>'.$_POST['message'].'</p>';
	}

	//Прикрепить файл
	if (!empty($_FILES['image']['tmp_name'])) {
		//путь загрузки файла
		$filePath = __DIR__ . "/img/" . $_FILES['image']['name'];
		//загрузим файл
		if (copy($_FILES['image']['tmp_name'], $filePath)){
			$fileAttach = $filePath;
			$body.='<p><strong>Фото в приложении</strong></p>';
			$mail->addAttachment($fileAttach);
		}
	}
	else {
		$body.='<p><strong>Нет фото</strong></p>';
	}

	$mail->Body = $body;

	//Отправление
	if ($mail->send()) {
		// $response = ['message' => $_POST['name']];
		// header('location: reseme.html');
		// echo json_encode($response);
	}
	else {
		echo "Ошибка";
	}

	$response = ['message' => $_POST['name']];

	header('Content-type: application/json');
	echo json_encode($response);
?>