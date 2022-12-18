<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Coffret;
use App\Models\Wine;

class CartController extends Controller
{
    //affichage du shopping cart
    public function index()
    {
        $title = "Votre panier";
        $this->renderView('cart/index', compact('title'));
    }

    //Ajout d'un produit
    public function addProduct()
    {
        $title = "Votre panier";

        if (isset($_POST["qty"]) && !empty($_POST["qty"])) {
            if ($_POST['qty'] < 0) {
                $qty = 1;
            } else {
                $qty = $_POST["qty"];
            }

            $name = $_POST['name'];
            $_SESSION["cart_item"][$name]["quantity"] = $qty;
            $this->renderView('cart/index', compact('title'));
            die;
        }

        $qty = 1;
        $id = $_GET['id'];

        if ($_SERVER['REDIRECT_URL'] == '/best-wines/votre-panier/addwine') {
            $product = new Wine;
            $product = $product->find($id, $is_array = true);

            $itemArray = array(
                $product['wine_name'] => array(
                    'name' => $product['wine_name'],
                    'id' => $product['wine_id'],
                    'quantity' => $qty,
                    'price' => $product['prix_de_vente'],
                    'image' => BASE_DIR . '/uploadsIcon/' . $product['link_picture_max'],
                    'total_price' => $qty * $product['prix_de_vente']
                )
            );
            if (!empty($_SESSION["cart_item"])) {
                if (in_array($product['wine_name'], array_keys($_SESSION["cart_item"]))) {
                    foreach ($_SESSION["cart_item"] as $k => $v) {
                        if ($product['wine_name'] == $k) {
                            if (empty($_SESSION["cart_item"][$k]["quantity"])) {
                                $_SESSION["cart_item"][$k]["quantity"] = 0;
                            }
                            $_SESSION["cart_item"][$k]["quantity"] += $qty;
                        }
                    }
                } else {
                    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
                }
            } else {
                $_SESSION["cart_item"] = $itemArray;
            }
        }
        if ($_SERVER['REDIRECT_URL'] == '/best-wines/votre-panier/addbox') {
            $product = new Coffret;
            $product = $product->find($id, $is_array = true);

            $itemArray = array(
                $product->box_name => array(
                    'name' => $product->box_name,
                    'id' => $product->box_id,
                    'quantity' => $qty,
                    'price' => $product->prix_de_vente,
                    'image' => $product->link_picture_max,
                    'total_price' => $qty * $product->prix_de_vente
                )
            );

            if (!empty($_SESSION["cart_item"])) {
                if (in_array($product['box_name'], array_keys($_SESSION["cart_item"]))) {
                    foreach ($_SESSION["cart_item"] as $k => $v) {
                        if ($product['box_name'] == $k) {
                            if (empty($_SESSION["cart_item"][$k]["quantity"])) {
                                $_SESSION["cart_item"][$k]["quantity"] = 0;
                            }
                            $_SESSION["cart_item"][$k]["quantity"] += $_POST["qty"];
                        }
                    }
                } else {
                    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
                }
            } else {
                $_SESSION["cart_item"] = $itemArray;
            }
        }

        $this->renderView('cart/index', compact('title'));
    }

    //Suppression d'un produit
    public function removeProduct()
    {
        if (!empty($_SESSION["cart_item"])) {
            foreach ($_SESSION["cart_item"] as $k => $v) {
                if ($_GET["id"] == $v['id'])
                    unset($_SESSION["cart_item"][$k]);
                if (empty($_SESSION["cart_item"]))
                    unset($_SESSION["cart_item"]);
            }
        }
        header('Location: /best-wines/votre-panier/all');
        exit;
    }

    //Vider le panier
    public function emptyCart()
    {
        unset($_SESSION["cart_item"]);
        header('Location: /best-wines/votre-panier/all');
        exit;
    }
}