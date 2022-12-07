<?php

namespace App\Controllers;

use App\Models\Wine;
use Core\Controller;

class ProductController extends Controller
{
    /**
     * afficher la liste des tâches
     * @return void
     */
    public function index(): void
    {
        $wine = new Wine();

        $wines = $wine->findAll();
        $message = "hello";
        $this->renderView('product/index', compact('wines', 'message'));
    }
    // ?id=10
    // task/show/10
    public function show(int $id)
    {
    }

    public function insert()
    {

        if (isset($_POST['submit'])) {

            $chemin = "http://www.site.ext/img.jpg"; // le chemin en absolu
            // vous pouvez travailler en url relative aussi: img.jpg
            $x = 500; # largeur a redimensionner
            $y = 500; # hauteur a redimensionner

            Header("Content-type: image/jpeg");
            $img_new = imagecreatefromjpeg($chemin);
            $size = getimagesize($chemin);
            $img_mini = imagecreatetruecolor($x, $y);
            imagecopyresampled($img_mini, $img_new, 0, 0, 0, 0, $x, $y, $size[0], $size[1]);
            imagejpeg($img_mini);

            $wine = new Wine();
            $wine->setName(strip_tags($_POST['name']));
            $wine->setDescription(strip_tags($_POST['description']));
            $wine->setLinkPictureMax(strip_tags($_POST['lien']));
            $wine->setLinkPictureMini($_POST['lien_mini']);
            $wine->setPrixDAchat(strip_tags($_POST['PA']));
            $wine->setPrixDeVente(strip_tags($_POST['PV']));
            $wine->setIdRegion(strip_tags($_POST['region']));
            $wine->setIdGrapeVariety(strip_tags($_POST['variety']));
            $wine->setIdTypeWine(strip_tags($_POST['type']));
            $wine->setIdTasteTag(strip_tags($_POST['taste']));
            $wine->setIdAccordTag(strip_tags($_POST['accord']));
            $wine->setIdSupplier(strip_tags($_POST['supplier']));


            $result = $wine->insert();

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