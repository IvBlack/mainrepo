<?php

require_once __DIR__ . '/../config/config.php';

try {
    // Получаем id
    if (!isset($_GET['id'])) {
        throw new Exception('id не передан');
    }

    //приводим id  к числу на всякий случай
    $id = (int)$_GET['id'];

    //Выбираем шаблон
    $template = TemplateEngine::getInstance()->twig->load('single-img.twig');

    //Имитируем выборку из БД
    $image = [
        'id' => $id,
        'url' => "img/$id.jpg",
        'title' => "Image $id"
    ];

    //Генерим шаблон
    echo $template->render(
        [
            'title' => 'Gallery',
            'image' => $image
        ]
    );
} catch (Exception $e) {
    die('ERROR: ' . $e->getMessage());
}