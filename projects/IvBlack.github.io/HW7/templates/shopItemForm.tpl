<!doctype>
<html>
<head>
	<title>{{TITLE}}</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<ul>
			<li><a href="/gallery.php">Галерея</a></li>
			<li><a href="/reviews.php">Отзывы</a></li>
			<li><a href="/calc.php">Калькулятор</a></li>
			<li><a href="/contacts.php">Контакты</a></li>
			<li><a href="/cart.php">Корзина</a></li>
			<li><a href="/lcab.php">Личный кабинет</a></li>
		</ul>
	</header>
<div style="float: left; margin-right: 30px;">
	<form enctype="multipart/form-data" 
	action="shopItem.php?id={{ID}}" method="post">
		Название: <br>
		<input type="text" name="title" value="{{TITLE}}"> <br>
		Описание: <br>
		<textarea name="text" cols="30" rows="10">{{TEXT}}</textarea><br>
		Цена: <br>
		<input type="number" name="price" value="{{PRICE}}"><br>
		Фото: <br>
		<input name="image" type="file" accept="image/*,image/jpeg,image/png"> <br>
		<input type="submit" name="action" value="Изменить">
		<input type="submit" name="action" value="Удалить">
		<br>
		Добавить в корзину: <br>
		<input type="number" name='count' value="1" min="1">
		<input type="hidden" name="img" value="{{SRC}}">
		<input type="submit" name='action' value="В корзину">
	</form>	

</div>
<div style="float: left">
	<img src="{{SRC}}" alt="image" style="max-width: 600px; max-height: 600px"/></a>
</div>
</body>
</html>