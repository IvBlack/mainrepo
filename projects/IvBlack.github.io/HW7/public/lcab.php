<?php

require_once __DIR__ . '/../config/config.php';

session_start();

if (isset($_POST['action'])) {
	
	if ($_POST['action'] == 'Перейти к регистрации') {

		$content = render(TEMPLATES_DIR . 'register.tpl');
	} else

	if ($_POST['action'] == 'Войти')  {
		$name = logIn ($_POST['login'], $_POST['pass']);
		if (isset($name)) {

			$content = $name[0]['Name']. ", здравствуйте, вы вошли как " . $_POST['login'];
			$user = $name[0]['Name'];
			$rights = $name[0]['role'];
			
			if (!isset($_SESSION['name'])) $_SESSION['name']= $user;
			if (!isset($_SESSION['role'])) $_SESSION['role']= $rights;

		} else {
			$content = "Неверное имя пользователя или пароль";
			$content .= render(TEMPLATES_DIR . 'login.tpl');
		}
	} 

	else
	if ($_POST['action'] == 'Зарегистрироваться') {
		$content = registration($_POST['login'], $_POST['pass'], $_POST['name']);
		$content .= render(TEMPLATES_DIR . 'login.tpl');
	} 

} else 
	if (isset($_SESSION['name'])) {
			$content = $_SESSION['name']. ", ваша сессия продлится 24 минуты <a href=\"/index.php?logout=yes\">Выйти</a>";
	} else { 
	$content = render(TEMPLATES_DIR . 'login.tpl');
}

echo render(TEMPLATES_DIR . 'index.tpl', [
	'title' => 'Личный кабинет',
	'h1' => 'Личный кабинет',
	'content' => $content
]);