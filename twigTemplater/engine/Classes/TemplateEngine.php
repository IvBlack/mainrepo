<?php

/**
 * Class TemplateEngine
 *
 * Класс для управления шаблонами
 */
class TemplateEngine
{
    use SingletonTrait;

    public $twig;
    //передаем конструктору класса объекты внутреннего окружения twig
    protected function __construct()
    {
        $loader = new Twig\Loader\FilesystemLoader(TPL_DIR);
        $this->twig = new Twig\Environment($loader);
    }
}