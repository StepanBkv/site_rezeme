<?php
  $name = trim(strip_tags($_POST["name"]));
  $sex = trim(strip_tags($_POST["sex"]));
  $email = trim(strip_tags($_POST["email"]));
  $password = trim(strip_tags($_POST["password"]));
  $password_rep =trim(strip_tags($_POST["password_repeat"]));
  $mobphone = trim(strip_tags($_POST["mobphone"]));
  $spec = trim(strip_tags($_POST["spec"]));
  $birthdate = trim(strip_tags($_POST["birthdate"]));
  $subject = "Регистрация на сайте https://mysite.com";
  $msg = "Ваши данные формы регистрации:\n" ."Имя: $name\n" ."Пол: $sex\n" ."Ваш email: $email\n" ."Страна: $country";
  $headers = "Content-type: text/plain; charset=UTF-8" . "\r\n";
  $headers .= "From: Kostya mr.blackmarch@mail.ru" . "\r\n";
  $headers .= "Bcc: mr.blackmarch@mail.ru". "\r\n";
  if ($password != $password_rep) {
    echo "Пароли не совпадают!";
  }
  else {
    if(!empty($name) && !empty($sex) && !empty($password_rep) && !empty($email) && !empty($password) && !empty($mobphone) && !empty($birthdate) && !empty($spec) && filter_var($email, FILTER_VALIDATE_EMAIL)){
      mail($email, $subject, $msg, $headers);
      echo "Спасибо! Вы успешно зарегистрировались.";
    }
  }
  
?>