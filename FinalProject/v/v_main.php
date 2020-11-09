<?php
/**
 * ???? ???? * ===============
 * $title - ????? * $content - HTML ?????
 */
?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<meta content="text/html; charset=Windows-1251" http-equiv="content-type">	
	<link rel="stylesheet" type="text/css" media="screen" href="v/style.css" /> 
	<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap/bootstrap.min.css">	
</head>
<body>

	<div id="header">
		<h1><?=$title?></h1>
	</div>
	
	<div id="menu">
		<a href="index.php">На главную</a> | 
		<a href="index.php?c=good&act=view">Каталог Товаров</a> |
		<a href="index.php?c=basket&act=view">Корзина</a> |		
		<?php
			if ($user) {
				echo '<a href="index.php?c=user&act=info">Личный кабинет</a> | <a href="index.php?c=user&act=logout">Выйти('. $user .')</a>';
			} else {
				echo '<a href="index.php?c=user&act=login">Войти</a> | <a href="index.php?c=user&act=reg">Регистрация</a>';
			}
		?>
	</div>
	
	<div id="content">
		<?=$content?>
	</div>
	
	<div id="footer">
		МегаОйл. Все права защищены. 2020
	</div>
	<script src="js/jquery-3.5.0.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js "></script>
</body>
</html>
