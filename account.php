<?php
    session_start();
    require_once 'vendor/connect.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Вёрстка</title>

 <meta name="viewport" content="width=device-width, inintial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

 <link rel="shortcut icon" href="img/apparatprezidenta2.ico" type="image/png">

<link rel="stylesheet" href="css/account.css" />

<meta charset="utf-8">
</head>
<body>
    <div class="wrapper">
        <div class="content">
            <div class="page">
                <?php 
                if (isset($_SESSION['login']) and isset($_SESSION['password'])) {
                    $login = $_SESSION['login'];
                    $password = $_SESSION['password'];
                    $user = mysqli_query($link, "SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
                    $user = mysqli_fetch_assoc($user);
                    echo($user[name]. " ");
                    echo($user['surname'].PHP_EOL);
                    echo($user['email']);
                    echo($user['phone']);
                    echo($user['age']);
                    // printf('<img class ="icon__image" src="%s" alt="main foto">',$user["photo"]);
                    echo "<img class = 'icon__image' src='$user[photo]' alt='main foto'>";
                }
                else header('location: http://localhost:80/vendor/signup.html')
                ?>
            </div>
        </div>
    </div>
</body>
<footer class="footer">
    <div class="footer__row"> 
        <div class="footer__text">Бабаков Степан Евгеньевич 2021</div>
    </div>
</footer>