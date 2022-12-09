<?php

namespace App\Controllers;

use App\Models\Coffret;
use Core\Controller;

class BoxController extends Controller
{
    /**
     * afficher la liste des tâches
     * @return void
     */
    public function index(): void
    {
        $params['title'] = "Nos-coffrets";
        $title = "Nos-coffrets";
        $coffret = new Coffret();

        $coffrets = $coffret->findAll();
        $message = 'hello';
        $this->renderView('box/index', compact('coffrets', 'message', 'title'));
    }
    // ?id=10
    // task/show/10
    public function show(int $id)
    {
    }

    public function insert()
    {

        if (isset($_POST['submit'])) {

            // $chemin = $_POST['lien']; // le chemin en absolu
            // // vous pouvez travailler en url relative aussi: img.jpg
            // $x = 500; # largeur a redimensionner
            // $y = 500; # hauteur a redimensionner

            // Header("Content-type: image/jpeg");
            // $img_new = imagecreatefromjpeg($chemin);
            // $size = getimagesize($chemin);
            // $img_mini = imagecreatetruecolor($x, $y);
            // imagecopyresampled($img_mini, $img_new, 0, 0, 0, 0, $x, $y, $size[0], $size[1]);
            // $img_mini = imagejpeg($img_mini);

            $coffret = new Coffret();
            $coffret->setName(strip_tags($_POST['name']));
            $coffret->setDescription(strip_tags($_POST['description']));
            // $coffret->setLinkPictureMax(strip_tags($_POST['link_picture_max']));
            // $coffret->setLinkPictureMini($img_mini);
            $coffret->setPrixDAchat(strip_tags($_POST['prix_d_achat']));
            $coffret->setPrixDeVente(strip_tags($_POST['prix_de_vente']));
            $coffret->setStock(strip_tags($_POST['stock']));
            $coffret->setIdCoffretDetail(strip_tags($_POST['id_coffret_detail']));

            $result = $coffret->insert();

            if ($result) {
                $message =  "insertion bien effectuée";
            } else {
                $message =  "échec";
            }
            $this->renderView('box/insert', [
                'message' => $message
            ]);
        }
        $this->renderView('box/insert');
    }

    public function delete()
    {

        echo "Product controller " . __FUNCTION__;
    }

    public function edit()
    {
        $title = "Modification d'un coffret";

        if (isset($_POST['submit'])) {

            // $chemin = $_POST['lien']; // le chemin en absolu
            // // vous pouvez travailler en url relative aussi: img.jpg
            // $x = 500; # largeur a redimensionner
            // $y = 500; # hauteur a redimensionner

            // Header("Content-type: image/jpeg");
            // $img_new = imagecreatefromjpeg($chemin);
            // $size = getimagesize($chemin);
            // $img_mini = imagecreatetruecolor($x, $y);
            // imagecopyresampled($img_mini, $img_new, 0, 0, 0, 0, $x, $y, $size[0], $size[1]);
            // $img_mini = imagejpeg($img_mini);

            $wine = new Coffret();
            $wine->setName(strip_tags($_POST['name']));
            $wine->setDescription(strip_tags($_POST['description']));
            // $wine->setLinkPictureMax(strip_tags($_POST['lien']));
            // $wine->setLinkPictureMini($img_mini);
            $wine->setPrixDAchat(strip_tags($_POST['prix_d_achat']));
            $wine->setPrixDeVente(strip_tags($_POST['prix_de_vente']));
            $wine->setStock(strip_tags($_POST['stock']));
            $wine->setIdDiscount(strip_tags($_POST['id_discount']));
            $wine->setIdCoffretDetail(strip_tags($_POST['id_coffret_detail']));


            $result = $wine->edit();

            if ($result) {
                $message =  "Modification bien effectuée";
            } else {
                $message =  "échec";
            }
            $this->renderAdminView('wines/insert', compact('message', 'title'));
        }
        $this->renderAdminView('wines/insert', compact('title'));
    }
}