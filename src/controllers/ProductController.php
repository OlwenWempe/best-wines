<?php

namespace App\Controllers;

use Core\Controller;

class ProductController extends Controller
{
    /**
     * afficher la liste des tâches
     * @return void
     */
    public function index(): void
    {
        $product = new Product();

        $products = $product->findAll();
        $message = 'hello';
        $this->renderView('product/index', compact('products', 'message'));
    }
    // ?id=10
    // task/show/10
    public function show(int $id)
    {
    }

    public function insert()
    {

        if (isset($_POST['submit'])) {


            $product = new Product();
            $product->setIdUser(1);
            $product->setName(htmlentities($_POST['name']));
            $product->setToDoAt(htmlentities($_POST['to_do_at']));

            $result = $product->insert();

            if ($result) {
                $message =  "insertion bien effectuée";
            } else {
                $message =  "échec";
            }
            $this->renderView('product/insert', [
                'message' => $message
            ]);
        }
        $this->renderView('product/insert');
    }

    public function delete()
    {

        echo "Product controller " . __FUNCTION__;
    }

    public function edit()
    {
        echo "Product controller " . __FUNCTION__;
    }
}