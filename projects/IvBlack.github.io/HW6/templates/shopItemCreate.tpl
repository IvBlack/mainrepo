<!doctype>
<html>
<head>
	<title>{{TITLE}}</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<ul>
			<li><a href="/">Главная</a></li>
			<li><a href="/gallery.php">Галерея</a></li>
			<li><a href="/reviews.php">Отзывы</a></li>
			<li><a href="/calc.php">Калькулятор</a></li>
			<li><a href="/contacts.php">Контакты</a></li>
		</ul>
	</header>
<div style="float: left; margin-right: 30px;">
	{{ACTION}}
	<form enctype="multipart/form-data" 
	action="create.php" method="post">
		Название: <br>
		<input type="text" name="title" value="{{TITLE}}"> <br>
		Описание: <br>
		<textarea name="text" cols="30" rows="10">{{TEXT}}</textarea><br>
		Цена: <br>
		<input type="number" name="price" value="{{PRICE}}"><br>
		Фото: <br>
		<input name="image" type="file" accept="image/*,image/jpeg,image/png"> <br>
		<input type="submit" name="action" value="Добавить">
	</form>	

</div>
<div style="float: left">
	<img src="{{SRC}}" alt="image" style="max-width: 600px; max-height: 600px"/></a>
</div>
</body>
</html>