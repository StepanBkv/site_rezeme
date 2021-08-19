<?php
    ob_start();
    session_start();
    $dblocation = 'localhost'; 
    $dbuser = 'root';          
    $dbpasswd = '';            
    $dbname = 'mydb';
    
    $login = trim(strip_tags($_POST["login"]));
    $pas = trim(strip_tags($_POST["password"]));;
    echo "логин" . $login;
    echo "Пароль" . $pas;
    

    $connection =  mysqli_connect($dblocation,$dbuser,$dbpasswd,$dbname);
    if(!$connection){
        echo "Ошибка: Невозможно установить соединение с MySQL.".PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno().PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error().PHP_EOL;
        exit;
    }
    else {
        echo "Соединение с MySQL установлено!".PHP_EOL;
        echo "Информация о сервере: ".mysqli_get_host_info($connection).PHP_EOL;
        $result = mysqli_query($connection,"SELECT * FROM users WHERE login = '$login' AND password = '$pas'");
        $Ar = array();
        while($row = mysqli_fetch_assoc($result))
        {
           $str = $row['name'] .' '. $row['surname'];
        }

        if($result2 = mysqli_query($connection, "SELECT * from books"))
        {
            while($row = mysqli_fetch_assoc($result2))
            {
                array_push($Ar,$row);
            }
        }
        
        
        $_SESSION['user'] = $str;
        

        $_SESSION['books'] = $Ar;

        header("Location: bdshow.php");
        $connection->close();
        exit();
    }
    
?>
<html>
        <head>
        <title>Вводи пароль</title>
        <meta charset="utf-8"/>
        </head>
            <body>
                <p> Вы ввели неверный логин/пароль! </p>
            </body>
    </html>