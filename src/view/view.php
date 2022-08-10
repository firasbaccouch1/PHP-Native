<?php

namespace PHP\View;

class View
{


    public static function make($view, $params = [])
    {
        $BaseContent =  self::getBaseContent();
        $ViewContent = self::getViewContent($view, params: $params);

        return  str_replace('{{ content }}', $ViewContent, $BaseContent);
    }

    protected static function getBaseContent()
    {
        ob_start();
        include view_path() . 'Main/master.php';
        return ob_get_clean();
    }
    protected static function getViewContent($view, $isError = false, $params = [])
    {
        $path = $isError ? view_path() . 'Error/' : view_path();
        if (str_contains($view, '.')) {
            $views = explode('.', $view);
            foreach ($views as  $view) {
                if (is_dir($path . $view)) {
                    $path = $path . $view . '/';
                }
            }
            $view = $path . end($views) . '.php';
        } else {
            $view = $path . $view . '.php';
        }
        extract($params);
        if ($isError) {
            include $view;
        } else {
            ob_start();
            include $view;
            return    ob_get_clean();
        }
    }
    protected static function makeError($error)
    {
        self::getViewContent($error, true);
    }
}
