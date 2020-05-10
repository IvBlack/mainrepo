<?php

require_once __DIR__ . '/../config/config.php';

//Сделал вывод галереи через БД для этого написал новую функцию renderGallery, для нее требуются результаты sql запроса :

$sql = "SELECT * FROM images";

//возвращает массив со всеми строками из бд
$galleryItems = getAssocResult($sql);

//используяя данные массива строим галерею. 
$gallery = renderGallery($galleryItems);

echo render(TEMPLATES_DIR . 'index.tpl', [
	'title' => 'Галерея',
	'h1' => 'Японские красотки',
	'content' => $gallery
]);