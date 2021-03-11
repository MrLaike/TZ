<?php

namespace Kernel;

class Router
{

    /**
     * @var array [ 'route' => [ 'method' => 'get', 'action' => [ class => method ] ] ]
     */
    private static $routes = [];

    // Метод для добавления маршрутов в массив
    private static function add(string $route, array $params=[], string $method='get'): void
    {
        // Избавляемся от слеша
        $route = preg_replace('/\//', '\\/', $route);


        $route = '/^'.$route.'$/i';

        self::$routes[$route] = [
            'method' => $method,
            'action' => $params
        ];

    }

    public static function get(string $route, array $params=[]): void
    {
        self::add($route, $params, Method::GET);
    }

    public static function post(string $route, array $params=[]): void
    {
        self::add($route, $params, Method::POST);
    }

    public function match()
    {

    }

    public function dispatch($url)
    {

    }

}