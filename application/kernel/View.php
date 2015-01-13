<?php
namespace kernel;
/**
 * Class View
 * @package kernel
 */
class View
{

    /**
     * Simple template engine ;)
     * @param $file
     * @param $data
     * @return string
     */
    public static function render($file, $data)
    {
        $view = 'application/views/' . $file . '.php';
        if (!file_exists($view)) {
            return 'Не найдено отображение';
        }
        ob_start();
        require $view;
        return ob_get_clean();
    }
}