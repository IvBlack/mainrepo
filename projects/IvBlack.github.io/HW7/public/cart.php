<?php

require_once __DIR__ . '/../config/config.php';

if (isset($_GET['update'])) {
	updateCart();
}

if (isset($_GET['delete'])) {
	deleteCart();
}

$content = showCart();


echo render(TEMPLATES_DIR . 'index.tpl', [
	'title' => 'Корзина',
	'h1' => 'Корзина',
	'content' => $content
]);
