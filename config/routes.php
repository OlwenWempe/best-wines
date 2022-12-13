<?php


require_once 'core/Router.php';

use Core\Router;

//client

Router::register('/login', 'UserController::login');
Router::register('/logout', 'AdminController::logout');
Router::register('/register', 'UserController::register');

//admin

Router::register('/admin/', 'AdminController::homepage');
Router::register('/admin/login', 'AdminController::login');
Router::register('/admin/logout', 'AdminController::logout');
Router::register('/admin/register', 'AdminController::register');
Router::register('/admin/addwine', 'WineController::insert');
Router::register('/admin/addbox', 'BoxController::insert');
Router::register('/admin/indexwine', 'AdminController::indexWine');
Router::register('/admin/indexbox', 'AdminController::indexBox');
Router::register('/admin/editwine', 'WineController::edit');
Router::register('/admin/editbox', 'BoxController::edit');
Router::register('/admin/deletewine', 'WineController::edit');
Router::register('/admin/deletebox', 'BoxController::delete');
Router::register('/admin/addregion', 'WineController::addRegion');
Router::register('/admin/addtype', 'WineController::addType');
Router::register('/admin/addtaste', 'WineController::addTaste');
Router::register('/admin/addaccord', 'WineController::addAccord');
Router::register('/admin/addsupplier', 'AdminController::registerSupplier');
Router::register('/admin/deleteregion', 'WineController::deleteregion');
Router::register('/admin/deletetype', 'WineController::deletetype');
Router::register('/admin/deletetaste', 'WineController::deletetaste');
Router::register('/admin/deleteaccord', 'WineController::deleteaccord');

//supplier

Router::register('/supplier/login', 'SupplierController::login');
Router::register('/supplier/logout', 'SupplierController::logout');
Router::register('/supplier/register', 'SupplierController::register');

//coffrets

Router::register('/nos-coffrets/all', 'BoxController::index');
Router::register('/nos-coffrets/delete', 'BoxController::delete');
Router::register('/nos-coffrets/', 'BoxController::show');
Router::register('/nos-coffrets/add', 'BoxController::insert');
Router::register('/nos-coffrets/edit', 'BoxController::edit');

//nos vins

Router::register('/nos-vins/all', 'WineController::index');
Router::register('/nos-vins/', 'WineController::show');

//exemple

Router::register('/products/all', 'ProductController::index');
Router::register('/product/delete', 'ProductController::delete');
Router::register('/product/', 'ProductController::show');
Router::register('/product/add', 'ProductController::insert');
Router::register('/product/edit', 'ProductController::edit');
