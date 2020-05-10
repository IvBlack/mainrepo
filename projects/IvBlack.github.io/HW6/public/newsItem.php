<?php

require_once __DIR__ . '/../config/config.php';

//var_dump($_GET['id']);

$id = isset($_GET['id']) ? $_GET['id'] : false;

if(!$id) {
	echo 'id не передан';
	exit();
}

$sql = "SELECT * FROM news WHERE id = $id";

$galleryItem = show($sql);

if(!$galleryItem) {
	echo "404";
	die;
}

echo render(TEMPLATES_DIR . 'index.tpl', [
	'title' => $galleryItem['title'],
	'content' => $galleryItem['content'],
	'h1' => $galleryItem['title']
]);