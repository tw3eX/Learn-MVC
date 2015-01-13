<?php
namespace kernel;

/**
 * Main Application Class
 * @package kernel
 */
class Application
{

    /**
     * Url Dispatcher
     * @return string
     */
    public static function dispatch()
    {
        $uri = parse_url($_SERVER['QUERY_STRING'], PHP_URL_PATH);
        $uri = trim($uri, ' /');
        $parts = explode('/', $uri);

        $controller = $uri !== '' && isset($parts[0]) ? $parts[0] : null;
        $controller = ucfirst($controller);
        $method = $uri !== '' && isset($parts[1]) ? $parts[1] : null;
        $args = $uri !== '' && isset($parts[2]) ? $parts[2] : null;

        if (!file_exists('application/controllers/' . $controller . '.php')) {
            return 'Controller does not exists';
        }

        $controller = '\controllers\\' . $controller;
        $c = new $controller;

        if (method_exists($c, $method)) {
            return $c->$method($args);
        } else {
            return 'Method does not exists';
        }
    }
}