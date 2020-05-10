<?php

require_once __DIR__ . '/../config/config.php';
$action = 'Добавить товар';

//получаем id

$id = isset($_GET['id']) ? $_GET['id'] : 0;

//здесь нам не надо првоерять что в action ибо у страницы всего 1 функция
if (isset($_POST['action'])){

		if($_FILES['image']['name'] != '') {

		$image = getImage();

		} else {$image='/img/no-image.jpeg';}

		$title = $_POST['title'];
		$text = $_POST['text'];
		$price = $_POST['price'];
		itemAdd($title, $text, $image, $price);
		$action = "Товар добавлен, вы можете добавить новый товар или перейти на главную что бы посмотреть на дело рук своих";
}


	$shopItem['image']  = '/img/no-image.jpeg';
	$shopItem['title'] = '';
	$shopItem['description'] = '';
	$shopItem['price'] = '';

//из этого массива нам нужен только элемент с индексом 'url' а также потребовался другой шаблон -> вывод в полном размере + ссылка на галлерею при клике

echo render(TEMPLATES_DIR . 'shopItemCreate.tpl', [
	'id' => $id,
	'src' => $shopItem['image'],
	'title' => $shopItem['title'],
	'text' => $shopItem['description'],
	'price' => $shopItem['price'],
	'action' => $action
	]);