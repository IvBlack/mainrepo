<?php

require_once __DIR__ . '/../config/config.php';

//var_dump($_GET['id']);
//получаем id

$id = isset($_GET['id']) ? $_GET['id'] : false;

if(!$id) {
	echo 'id не передан';
	exit();
}

//show конектится к бд с запросом $sql и возвращает массив всех полеей для элемента с указаным id
$sql = "SELECT * FROM images WHERE id = $id";

$galleryItem = show($sql);

if(!$galleryItem) {
	echo "404";
	die;
}

//из этого массива нам нужен только элемент с индексом 'url' а также потребовался другой шаблон -> вывод в полном размере + ссылка на галлерею при клике

echo render(TEMPLATES_DIR . 'galleryItemSolo.tpl', [
	'id' => $id,
	'src' => $galleryItem['url']
	]);