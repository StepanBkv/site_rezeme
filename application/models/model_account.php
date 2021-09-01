<?php 

 	class Model_account extends Model
	{
    function __construct()
    {
        parent::__construct();
    }

    function get_data()
	{

	}
    public function check_autorize_user(){
        if (isset($_SESSION['login']) and isset($_SESSION['password'])) {
            require_once 'connect.php';
            $link = Work_To_Database::database_connect();
            $login = $_SESSION['login'];
            $password = $_SESSION['password'];
            $user = mysqli_query($link, "SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
            $user = mysqli_fetch_assoc($user);
            return $user;
        }
        else return header('location: http://localhost:80/login');
    }
}

?>