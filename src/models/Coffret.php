<?php

namespace App\Models;

use Core\Model;

class Coffret  extends Model
{
    private int $id;
    private string $name;
    private string $description;
    private string $link_picture_mini;
    private string $link_picture_max;
    private int $prix_d_achat;
    private int $prix_de_vente;
    private int $stock;
    private int $id_discount;
    private int $id_coffret_detail;
    protected string $table_name = "coffret";



    // accesseurs (getters & setters)

    /**
     * Permet de récupérer l'identifiant de la tâche
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getLinkPictureMini(): string
    {
        return $this->link_picture_mini;
    }

    /**
     * @param string $link_picture_mini
     * @return void
     */
    public function setLinkPictureMini(string $link_picture_mini): void
    {
        $this->link_picture_mini = $link_picture_mini;
    }

    /**
     * @return string
     */
    public function getLinkPictureMax(): string
    {
        return $this->link_picture_max;
    }

    /**
     * @param string $link_picture_max
     * @return void
     */
    public function setLinkPictureMax(string $link_picture_max): void
    {
        $this->link_picture_max = $link_picture_max;
    }

    /**
     * @return int
     */
    public function getPrixDAchat(): int
    {
        return $this->prix_d_achat;
    }

    /**
     * @param int $prix_d_achat
     * @return void
     */
    public function setPrixDAchat(int $prix_d_achat): void
    {
        $this->prix_d_achat = $prix_d_achat;
    }

    /**
     * @return int
     */
    public function getPrixDeVente(): int
    {
        return $this->prix_de_vente;
    }

    /**
     * @param int $prix_de_vente
     * @return void
     */
    public function setPrixDeVente(int $prix_de_vente): void
    {
        $this->prix_de_vente = $prix_de_vente;
    }

    /**
     * @return int
     */
    public function getStock(): int
    {
        return $this->stock;
    }

    /**
     * @param int $stock
     * @return void
     */
    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }

    /**
     * @return int
     */
    public function getIdDiscount(): int
    {
        return $this->id_discount;
    }

    /**
     * @param int $id_discount
     * @return void
     */
    public function setIdDiscount(int $id_discount): void
    {
        $this->id_discount = $id_discount;
    }

    /**
     * @return int
     */
    public function getIdCoffretDetail(): int
    {
        return $this->id_coffret_detail;
    }

    /**
     * @param int $id_coffret_detail
     * @return void
     */
    public function setIdCoffretDetail(int $id_coffret_detail): void
    {
        $this->id_coffret_detail = $id_coffret_detail;
    }

    /**
     * Insérer une tache dans la BDD
     * @return int|false l'id du dernier élément inséré ou false dans le cas d'échec
     */
    public function insert(): int|false
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO coffret (`name`, `description`, `link_picture_max`, `link_picture_mini`, `prix_d_achat` , `prix_de_vente`, `stock`, `id_coffret_detail`) 
            VALUES (:name, :description, :link_picture_max, :link_picture_mini, :prix_d_achat, :prix_de_vente, :stock, :id_coffret_detail)"
        );

        $stmt->execute([
            'name' => $this->name,
            'description' => $this->description,
            'link_picture_max' => $this->link_picture_max,
            'link_picture_mini' => $this->link_picture_mini,
            'prix_d_achat' => $this->prix_d_achat,
            'prix_de_vente' => $this->prix_de_vente,
            'stock' => $this->stock,
            'id_coffret_detail' => $this->id_coffret_detail
        ]);

        return $this->pdo->lastInsertId();
    }

    public function edit(): int|false
    {
        $stmt = $this->pdo->prepare(
            "UPDATE coffret SET `name` = :new_name, `description` = :new_description, `prix_d_achat` = :new_prix_d_achat , `prix_de_vente` = :new_prix_de_vente, `stock = :new_stock, `id_discount` = :new_id_discount, `id_coffret_detail` = :new_id_coffret_detail WHERE id = :id"
        );

        $stmt->execute([
            'new_name' => $this->name,
            'new_description' => $this->description,
            // 'link_picture_max' => $this->link_picture_max,
            // 'link_picture_mini' => $this->link_picture_mini,
            'new_prix_d_achat' => $this->prix_d_achat,
            'new_prix_de_vente' => $this->prix_de_vente,
            'new_stock' => $this->stock,
            'new_id_discount' => $this->id_discount,
            'new_id_coffre_detail' => $this->id_coffret_detail
        ]);

        return $this->pdo->lastInsertId();
    }
}