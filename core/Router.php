<?php

namespace Core;

use App\Controllers\AdminController;
use Core\Controller;

class Router
{

    private static array $routes = [];

    /**
     * permet d'enregistrer les routes exécutables sur l'application
     * @param string $request
     * @param string $action
     * @return void
     */
    public static function register(string $request, string $action): void
    {
        self::$routes[$request] = $action;
    }

    /**
     *  vérifier et exécuter la demande de l'utilisateur
     * @param string $request_uri
     * @return void
     * @throws Exception si la page n'existe pas
     */
    public static function resolve(string $request_uri): void
    {
        $request_uri = explode("?", $request_uri)[0];
        if (!isset(self::$routes[$request_uri])) {
            $redirect = new AdminController;
            $redirect->checkUnlogged(BASE_DIR . "/admin/");
            Controller::render404View();
        }

        [$controller_name, $action_name] = explode('::', self::$routes[$request_uri]);
        $controller_name = 'App\\Controllers\\' . $controller_name;
        $instance = new $controller_name();
        call_user_func_array([$instance, $action_name], []);
    }
}
