<?php

require_once __DIR__ . '/../config/config.php';
$action = 'Изменить';

//получаем id

$id = isset($_GET['id']) ? $_GET['id'] : 0;

if (isset($_POST['action'])){

	if ($_POST['action'] == 'Удалить') {

		itemDelete($id);
	} 

	if ($_POST['action'] == 'Изменить') {

		if($_FILES['image']['name'] != '') {

			$image = getImage();

		} else {$image='/img/no-image.jpeg';}

		$title = $_POST['title'];
		$text = $_POST['text'];
		$price = $_POST['price'];
		itemUpdate($title, $text, $price, $id, $image);

	}

}

//show конектится к бд с запросом $sql и возвращает массив всех полей для элемента с указаным id
$sql = "SELECT * FROM goods WHERE id = $id";

$shopItem = show($sql);

if(!$shopItem) {
	echo "Товар не найден";
	$shopItem['image']  = '/img/no-image.jpeg';
	$shopItem['title'] = '';
	$shopItem['description'] = '';
	$shopItem['price'] = '';
} 

//из этого массива нам нужен только элемент с индексом 'url' а также потребовался другой шаблон -> вывод в полном размере + ссылка на галлерею при клике

echo render(TEMPLATES_DIR . 'shopItemForm.tpl', [
	'id' => $id,
	'src' => $shopItem['image'],
	'title' => $shopItem['title'],
	'text' => $shopItem['description'],
	'price' => $shopItem['price'],
	'action' => $action
	]);