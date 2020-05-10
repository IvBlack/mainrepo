<?php

require_once __DIR__ . '/../config/config.php';

$sql = "SELECT * FROM goods";

//возвращает массив со всеми строками из бд
$shopItems = getAssocResult($sql);

//используяя данные массива строим страницу. 
$shop = showShop($shopItems);

echo render(TEMPLATES_DIR . 'index.tpl', [
	'title' => 'Магазиин',
	'h1' => 'Наши товары',
	'content' => $shop
]);