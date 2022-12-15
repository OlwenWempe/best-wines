<?php

namespace Core;

abstract class Controller
{

    public function renderView(string $view_name, array $params = []): void
    {

        // accès à une variable qui s'appelle $tasks
        /*if(!empty($params))
        {
            foreach ($params as $key => $value)
            {
                $$key = $value;
            }
        }*/

        extract($params);
        ob_start();
        require_once "src/views/$view_name.php";
        $content = ob_get_clean();
        require_once "src/views/layout.php";
    }

    public function renderAdminView(string $view_name, array $params = []): void
    {

        // accès à une variable qui s'appelle $tasks
        /*if(!empty($params))
        {
            foreach ($params as $key => $value)
            {
                $$key = $value;
            }
        }*/

        extract($params);
        ob_start();
        require_once "src/views/$view_name.php";
        $content = ob_get_clean();
        require_once "src/views/adminLayout.php";
    }

    public static function render404View(): void
    {
        require_once "src/views/404.php";
    }

    public static function renderArticleView(array $params = []): void
    {
        extract($params);
        ob_start();
        require_once "src/views/admin/addArticle.php";
        $content = ob_get_clean();
        require_once "src/views/articleLayout.php";
    }
}