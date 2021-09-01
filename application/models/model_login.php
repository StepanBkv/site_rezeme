<?php
class Model_login extends Model {
	function __construct()
    {
        parent::__construct();
    }

    public function check_autorize_user() {
        if (isset($_SESSION['login']) and isset($_SESSION['password'])) {
            return header('location: http://localhost:80/account');
        }
    }
}
