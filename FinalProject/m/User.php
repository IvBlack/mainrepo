<?php
	include_once 'DB.php';

	class User {

		public $user_id, $user_login, $user_name, $user_password;



		public function pass ($name, $password) {
			return strrev(md5($name)) . md5($password);
		}

		public function get ($id) {
			return DB::GetRow('SELECT * FROM users WHERE id = :id', ['id' => $id]);
		}

		public function newR ($name, $login, $password) {
			$user = DB::GetRow('SELECT * FROM users WHERE login = :login', ['login' => $login]);

			if (!$user) {
				DB::Insert('INSERT INTO users (`name`, `login`, `password`)  VALUES (:name, :login, :password)', ['name' => $name, 'login' => $login, 'password' => $this->pass($name, $password)]);
				return true;
			}
			return false;

		}

		public function login ($login, $password) {
			$user = DB::GetRow('SELECT * FROM users WHERE login = :login', ['login' => $login]);

			if ($user) {
				if ($user['password'] == $this->pass($user['name'], strip_tags($password))) {
    				$_SESSION['user_id'] = $user['id'];
    				return 'Добро пожаловать в систему, ' . $user['name'] . '!';
				} else {
					return 'Пароль не верный!';
				}
			} else {
				return 'Пользователь с таким логином не зарегистрирован!';
			}
		}

		public function logout () {
			if (isset($_SESSION["user_id"])) {
				$_SESSION["user_id"]=null;
				session_destroy();
				return true;
			} 
			return false;
			
		}
	}
?>