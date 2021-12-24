<?php
    require_once 'application/models/connect.php';
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
                <div class="container">
                    <?php $user = Controller_account::check_autorize_user(); ?>
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
                                                    <a href="target" class="menu__link tasks">Задания</a>
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
                              <div class="userinfo">
                                <div class="userinfo__row">
                                    <div class="userinfo__item">
                                        <span>Имя: </span>
                                        <p><?=$user['name']?></p>
                                        <span>Фамилия: </span>
                                        <p><?=$user['surname']?></p>
                                        <span>Пол: </span>
                                        <p><?php if($user['sex']== 'man') echo "Мужской"; else echo "Женский";?></p>
                                        <span>Возраст: </span>
                                        <p><?=$user['age']?></p>
                                        <span>Электроная почта: </span>
                                        <p><?=$user['email']?></p>
                                        <span>Телефон: </span>
                                        <p><?=$user['phone']?></p>
                                    </div>
                                    <div class="userinfo__photo">
                                        <?= "<img class ='image' src='$user[photo]' alt='Нет фото'>" ?>
                                    </div>  
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        <footer class="footer">
            <div class="footer__row"> 
                <div class="footer__text">Бабаков Степан Евгеньевич 2021</div>
            </div>
        </footer>
        <script type="text/javascript" src="js/account.js"></script>
        <script type="text/javascript" src="js/calendar.js"></script>
        <script type="text/javascript" src="js/get_to_time.js"></script>
    </div>
</html>