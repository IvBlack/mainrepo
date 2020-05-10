<?php

function createGallery($imgDir) {
	$result = '';

	$images = scandir(WWW_DIR . $imgDir);
	var_dump($images);

	foreach ($images as $image) {
		if(is_file(WWW_DIR . $imgDir . $image)) {
			$result .= render(TEMPLATES_DIR . 'galleryItem.tpl', [
				'src' => $imgDir . $image
			]);
		}
	}
	return $result;
}

function renderGallery($allImages)
{ 

	$galleryContent = '';
	foreach ($allImages as $galleryItem) {
		if (empty($galleryItem['image'])) {
			$galleryItem['image'] = 'img/no-image.jpeg';
		}
			//Делаю выборку нужных значений для шаблона и склеиваю все в одну строку, плюс вырезал из шаблона target blank возврат на страницу галереи по клику на картинку происходит
		$galleryContent .= render(TEMPLATES_DIR . 'galleryItem.tpl', [
				'id' => $galleryItem['id'],
				'src' => $galleryItem['url']
			]);
	}

	return $galleryContent;
}