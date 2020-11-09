<?php

require_once __DIR__ . '/../config/config.php';

//оборачиваем в try-catch на случай трабблов
try {
    //Выбираем шаблон
    $template = TemplateEngine::getInstance()->twig->load('index.twig');

    //Имитируем выборку из БД
    $images = [
        [
            'id' => 1,
            'url' => 'img/1.jpg',
            'title' => 'Image 1'
        ],
        [
            'id' => 2,
            'url' => 'img/2.jpg',
            'title' => 'Image 2'
        ],
        [
            'id' => 3,
            'url' => 'img/3.jpg',
            'title' => 'Image 3'
        ],
        [
            'id' => 4,
            'url' => 'img/4.jpg',
            'title' => 'Image 4'
        ],
        [
            'id' => 5,
            'url' => 'img/5.jpg',
            'title' => 'Image 5'
        ],
        [
            'id' => 6,
            'url' => 'img/6.jpg',
            'title' => 'Image 6'
        ],
        [
            'id' => 7,
            'url' => 'img/7.jpg',
            'title' => 'Image 7'
        ],
        [
            'id' => 8,
            'url' => 'img/8.jpg',
            'title' => 'Image 8'
        ],
    ];

    //Генерим шаблон, функция render, на вход - массив картин
    echo $template->render(
        [
            'title' => 'Gallery',
            'images' => $images
        ]
    );
} catch (Exception $e) {
    die('ERROR: ' . $e->getMessage());
}