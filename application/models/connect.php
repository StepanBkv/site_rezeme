<?php
	class Work_To_Database {
		public function database_connect($ajax = 0) {
			$host = 'localhost';
			$user =  'native';
			$password = 'native';
			$db_name = 'users';
			$link = mysqli_connect($host, $user, $password, $db_name);
			if($ajax == 1){
				if(mysqli_connect_errno()) {
					header('Content-type: application/json');
					echo json_encode('Ошибка в подключению к базе данных '.mysqli_connect_errno(). "  ".mysqli_connect_error());
				}
			}
			return $link;
		}

	}
?>