<?php


require_once 'core/Router.php';

use Core\Router;

Router::register('/products/all', 'ProductController::index');
Router::register('/login', 'UserController::login');
Router::register('/logout', 'UserController::logout');
Router::register('/register', 'UserController::register');
Router::register('/product/delete', 'ProductController::delete');
Router::register('/product/', 'ProductController::show');
Router::register('/product/add', 'ProductController::insert');
Router::register('/product/edit', 'ProductController::edit');