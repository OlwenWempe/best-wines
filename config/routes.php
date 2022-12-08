<?php


require_once 'core/Router.php';

use Core\Router;

//client

Router::register('/login', 'UserController::login');
Router::register('/logout', 'UserController::logout');
Router::register('/register', 'UserController::register');

//admin

Router::register('/admin/login', 'AdminController::login');
Router::register('/admin/logout', 'AdminController::logout');
Router::register('/admin/register', 'AdminController::register');

//supplier

Router::register('/supplier/login', 'SupplierController::login');
Router::register('/supplier/logout', 'SupplierController::logout');
Router::register('/supplier/register', 'SupplierController::register');

//coffrets

Router::register('/nos-coffrets/all', 'ProductController::index');
Router::register('/nos-coffrets/delete', 'ProductController::delete');
Router::register('/nos-coffrets/', 'ProductController::show');
Router::register('/nos-coffrets/add', 'ProductController::insert');
Router::register('/nos-coffrets/edit', 'ProductController::edit');

//nos vins

Router::register('/nos-vins/all', 'WineController::index');
Router::register('/nos-vins/delete', 'WineController::delete');
Router::register('/nos-vins/', 'WineController::show');
Router::register('/nos-vins/add', 'WineController::insert');
Router::register('/nos-vins/edit', 'WineController::edit');

//exemple

Router::register('/products/all', 'ProductController::index');
Router::register('/product/delete', 'ProductController::delete');
Router::register('/product/', 'ProductController::show');
Router::register('/product/add', 'ProductController::insert');
Router::register('/product/edit', 'ProductController::edit');