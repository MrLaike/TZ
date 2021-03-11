<?php

namespace Kernel;

interface ViewInterface
{
    public static function render(string $view, array $params);
}


class View implements ViewInterface
{

    // расширение шаблона
    protected $extension = 'php';

    public static function render(string $view, array $result=[])
    {
        $file = dirname(__DIR__) . "/App/Views/$view.".(new self)->getExtension();

        extract($result, EXTR_SKIP);

        // Подключаем шаблон
        if(file_exists($file)) {
            require_once $file;
        } else {
//            throw new \Exception('Файл не существует');
        }
    }


    public function getExtension()
    {
        return $this->extension;
    }

    public function setExtension($extension)
    {
        return $this->extension = $extension;
    }

}