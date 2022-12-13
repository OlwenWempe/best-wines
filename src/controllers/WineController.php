<?php

namespace App\Controllers;

use App\Models\Wine;
use App\Models\AccordTag;
use App\Models\TasteTag;
use App\Models\TypeWine;
use App\Models\Region;
use App\Models\Pays;
use App\Models\Supplier;
use Core\Controller;

class WineController extends Controller
{
    /**
     * afficher la liste des tâches
     * @return void
     */
    public function index(): void
    {
        $title = "Nos-vins";
        $wine = new Wine();

        $wines = $wine->findAll();
        $this->renderView('wines/index', compact('wines', 'title'));
    }

    public function indexColor(): void
    {
        if ($_SERVER['REQUEST_URI'] == BASE_DIR . "/nos-rouges/all") {
            $id = 1;
            $name = "rouges";
        }
        if ($_SERVER['REQUEST_URI'] == BASE_DIR . "/nos-blancs/all") {
            $id = 2;
            $name = "blancs";
        }
        if ($_SERVER['REQUEST_URI'] == BASE_DIR . "/nos-roses/all") {
            $id = 3;
            $name = "roses";
        }
        if ($_SERVER['REQUEST_URI'] == BASE_DIR . "/nos-champagnes/all") {
            $id = 4;
            $name = "champagnes";
        }

        $title = "Nos-" . $name;
        $wine = new Wine();

        $wines = $wine->findAllBy(['id_type_wine' => $id], $is_array = true);
        $this->renderView('wines/index', compact('wines', 'title'));
    }

    // public function indexRed(): void
    // {
    //     $title = "Nos-rouges";
    //     $wine = new Wine();

    //     $wines = $wine->findAllBy(['id_type_wine' => 1], $is_array = true);
    //     $this->renderView('wines/index', compact('wines', 'title'));
    // }

    // public function indexWhite(): void
    // {
    //     $title = "Nos-blancs";
    //     $wine = new Wine();

    //     $wines = $wine->findAllBy(['id_type_wine' => 2], $is_array = true);
    //     $this->renderView('wines/index', compact('wines', 'title'));
    // }

    // public function indexRose(): void
    // {
    //     $title = "Nos-roses";
    //     $wine = new Wine();

    //     $wines = $wine->findAllBy(['id_type_wine' => 3], $is_array = true);
    //     $this->renderView('wines/index', compact('wines', 'title'));
    // }

    // public function indexChampagne(): void
    // {
    //     $title = "Nos-champagnes";
    //     $wine = new Wine();

    //     $wines = $wine->findAllBy(['id_type_wine' => 4], $is_array = true);
    //     $this->renderView('wines/index', compact('wines', 'title'));
    // }
    // ?id=10
    // task/show/10
    public function show(): void
    {
        $title = "Nos-vins detail";
        if (isset($_GET['id']) && $_GET['id'] != '' && is_numeric($_GET['id'])) {
            $id = $_GET['id'];
            try {
                $wine = new Wine();

                $wine = $wine->findWine($id, $is_array = true);
                if ($_SESSION['admin']['auth']) {
                    $pays = new Pays();
                    $payss = $pays->findAll();
                    $this->renderAdminView('wines/showWine', compact('wine', 'payss', 'title'));
                } else {
                    $this->renderView('wines/showWine', compact('wine', 'title'));
                }
            } catch (\Exception $th) {
                $error = "Désolé nous ne connaissons pas ce produit.";
                $this->renderView('wines/showWine', compact('title', 'error'));
            }
        }
    }

    public function insert()
    {
        $title = "Ajout d'un vin";
        AdminController::checkLogged();
        $tag = new AccordTag();
        $accordTags = $tag->findAll();

        $region = new Region();
        $regions = $region->findAll();

        $pays = new Pays();
        $payss = $pays->findAll();

        $type = new TypeWine();
        $types = $type->findAll();

        $tastetag = new TasteTag();
        $tasteTags = $tastetag->findAll();

        $supplier = new Supplier();
        $suppliers = $supplier->findAll();

        if (isset($_POST['submit'])) {

            // $chemin = $_FILES['link_picture_max']['name']; // le chemin en absolu
            // // vous pouvez travailler en url relative aussi: img.jpg
            // $x = 250; # largeur a redimensionner
            // $y = 250; # hauteur a redimensionner

            // Header("Content-type: image/jpeg");
            // $img_new = imagecreatefromjpeg($chemin);
            // dd($img_new);
            // $size = getimagesize($chemin);
            // $img_mini = imagecreatetruecolor($x, $y);
            // imagecopyresampled($img_mini, $img_new, 0, 0, 0, 0, $x, $y, $size[0], $size[1]);
            // $img_mini = imagejpeg($img_mini);



            if (count($_FILES) == 1) {
                $allowed[] = "image/jpeg";
                $allowed[] = "image/png";
                if ($_FILES['link_picture_max']['error'] == 0 && in_array($_FILES['link_picture_max']['type'], $allowed)) {

                    $folder = "uploads/";
                    if (!file_exists($folder)) {
                        mkdir($folder, 0777, true);
                    }
                    $folderMini = "uploadsMini/";
                    if (!file_exists($folderMini)) {
                        mkdir($folderMini, 0777, true);
                    }
                    $folderIcon = "uploadsIcon/";
                    if (!file_exists($folderIcon)) {
                        mkdir($folderIcon, 0777, true);
                    }
                    if ($_FILES['link_picture_max']['type'] == "image/jpeg") {
                        $nameFile = uniqid() . ".jpeg";
                    } else {
                        $nameFile = uniqid() . ".png";
                    }

                    $destination = $folder . $nameFile;
                    $destination2 = $folderMini . $nameFile;
                    $destination3 = $folderIcon . $nameFile;
                    move_uploaded_file($_FILES['link_picture_max']['tmp_name'], $destination);
                    $_POST['link_picture_max'] = $destination;

                    //resize function

                    $img_mini = new \Gumlet\ImageResize($destination);
                    $img_mini->crop(250, 250);
                    $img_mini->save($destination2);
                    $img_mini->crop(80, 80);
                    $img_mini->save($destination3);

                    $_POST['link_picture_mini'] = $destination2;
                }
            }



            $wine = new Wine();
            $wine->setName(strip_tags($_POST['name']));
            $wine->setDescription(strip_tags($_POST['description']));
            $wine->setGrapeVariety(strip_tags($_POST['grape_variety']));
            $wine->setLinkPictureMax($_POST['link_picture_max']);
            $wine->setLinkPictureMini($_POST['link_picture_mini']);
            $wine->setPrixDAchat(strip_tags($_POST['prix_d_achat']));
            $wine->setPrixDeVente(strip_tags($_POST['prix_de_vente']));
            $wine->setStock(strip_tags($_POST['stock']));
            $wine->setIdRegion(strip_tags($_POST['id_region']));
            $wine->setIdTypeWine(strip_tags($_POST['id_type_wine']));
            $wine->setIdTasteTag(strip_tags($_POST['id_taste_tag']));
            $wine->setIdAccordTag(strip_tags($_POST['id_accord_tag']));
            $wine->setIdSupplier(strip_tags($_POST['id_supplier']));



            $result = $wine->insert();

            if ($result) {
                $message =  "insertion bien effectuée";
            } else {
                $message =  "échec";
            }
            $this->renderAdminView('wines/insert', compact('message', 'accordTags', 'regions', 'payss', 'types', 'tasteTags', 'suppliers', 'title'));
        }
        $this->renderAdminView('wines/insert', compact('title', 'accordTags', 'regions', 'payss', 'types', 'tasteTags', 'suppliers'));
    }

    public function delete()
    {

        echo "Wine controller " . __FUNCTION__;
    }

    public function edit()
    {
        $pays = new Pays();
        $payss = $pays->findAll($is_array = true);

        $title = "Modification d'un vin";

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

            $wine = new Wine();
            $wine->setName(strip_tags($_POST['name']));
            $wine->setDescription(strip_tags($_POST['description']));
            $wine->setGrapeVariety(strip_tags($_POST['grape_variety']));
            // $wine->setLinkPictureMax(strip_tags($_POST['lien']));
            // $wine->setLinkPictureMini($img_mini);
            $wine->setPrixDAchat(strip_tags($_POST['prix_d_achat']));
            $wine->setPrixDeVente(strip_tags($_POST['prix_de_vente']));
            $wine->setStock(strip_tags($_POST['stock']));
            $wine->setIdRegion(strip_tags($_POST['id_region']));
            $wine->setIdTypeWine(strip_tags($_POST['id_type_wine']));
            $wine->setIdTasteTag(strip_tags($_POST['id_taste_tag']));
            $wine->setIdAccordTag(strip_tags($_POST['id_accord_tag']));
            $wine->setIdSupplier(strip_tags($_POST['id_supplier']));


            $result = $wine->edit();

            if ($result) {
                $message =  "Modification bien effectuée";
            } else {
                $message =  "échec";
            }
            $this->renderAdminView('wines/insert', compact('message', 'title', 'payss'));
        }
        $this->renderAdminView('wines/insert', compact('title', 'payss'));
    }

    //permets d'ajouter une region dans le menu select
    public function addRegion()
    {
        $title = "Ajout d'une région";

        $pays = new Pays();
        $payss = $pays->findAll($is_array = true);

        $region = new Region();
        $regions = $region->findAll($is_array = true);


        if (isset($_POST['soumettre'])) {

            $region = new Region();
            $region->setName(strip_tags($_POST["name"]));
            $region->setIdPays(strip_tags($_POST["id_pays"]));
            $result = $region->insert();

            if ($result) {
                $message =  "insertion bien effectuée";
            } else {
                $message =  "échec";
            }
            $this->renderAdminView('tags/addRegion', compact('regions', 'message', 'title', 'payss'));
        }
        $this->renderAdminView('tags/addRegion', compact('regions', 'title', 'payss'));
    }

    //permets d'ajouter le type de vin dans le menu select
    public function addType()
    {
        $title = "Ajout d'un type";

        $pays = new Pays();
        $payss = $pays->findAll($is_array = true);

        $type = new TypeWine();
        $types = $type->findAll($is_array = true);

        if (isset($_POST['soumettre'])) {
            $type = new TypeWine();
            $type->setName(strip_tags($_POST["name"]));
            $result = $type->insert();

            if ($result) {
                $message =  "insertion bien effectuée";
            } else {
                $message =  "échec";
            }
            $this->renderAdminView('tags/addType', compact('types', 'title','message', 'payss'));
        }
        $this->renderAdminView('tags/addType', compact('types', 'title', 'payss'));
    }

    //permets d'ajouter les goûts des vins dans le menu select.
    public function addTaste()
    {
        $title = "Ajout d'un goût";

        $pays = new Pays();
        $payss = $pays->findAll($is_array = true);

        $taste = new TasteTag();
        $tastes = $taste->findAll($is_array = true);

        if (isset($_POST['soumettre'])) {
            $taste = new TasteTag();
            $taste->setName(strip_tags($_POST["name"]));
            $result = $taste->insert();

            if ($result) {
                $message =  "insertion bien effectuée";
            } else {
                $message =  "échec";
            }
            $this->renderAdminView('tags/addTaste', compact('tastes', 'title','message', 'payss'));
        }
        $this->renderAdminView('tags/addTaste', compact('tastes', 'title', 'payss'));
    }

    //permets d'ajouter avec quoi accorder les vins dans le menu select.
    public function addAccord()
    {
        $title = "Ajout d'un accord";

        $pays = new Pays();
        $payss = $pays->findAll($is_array = true);

        $accord = new AccordTag();
        $accords = $accord->findAll($is_array = true);

        if (isset($_POST['soumettre'])) {

            $accord = new AccordTag();
            $accord->setName(strip_tags($_POST["name"]));
            $result = $accord->insert();

            if ($result) {
                $message =  "insertion bien effectuée";
            } else {
                $message =  "échec";
            }
            $this->renderAdminView('tags/addAccord', compact('accords', 'title', 'message', 'payss'));
        }
        $this->renderAdminView('tags/addAccord', compact('accords', 'title', 'payss'));
    }

    public function deleteRegion()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function deleteType()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function deleteTaste()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function deleteAccord()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }
}