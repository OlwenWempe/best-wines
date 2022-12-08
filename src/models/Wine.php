<?php

namespace App\Models;

use Core\Model;

class Wine  extends Model
{
    private int $id;
    private string $created_at;
    private string $name;
    private string $description;
    private string $link_picture_mini;
    private string $link_picture_max;
    private int $prix_d_achat;
    private int $prix_de_vente;
    private int $stock;
    private int $id_note;
    private int $id_region;
    private int $id_grape_variety;
    private int $id_type_wine;
    private int $id_taste_tag;
    private int $id_accord_tag;
    private int $id_discount;
    private int $id_supplier;
    protected string $table_name = "wine";



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
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     * @return void
     */
    public function setCreatedAt(string $created_at): void
    {
        $this->created_at = $created_at;
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
    public function getIdNote(): int
    {
        return $this->id_note;
    }

    /**
     * @param int $id_note
     * @return void
     */
    public function setIdNote(int $id_note): void
    {
        $this->id_note = $id_note;
    }

    /**
     * @return int
     */
    public function getIdRegion(): int
    {
        return $this->id_region;
    }

    /**
     * @param int $id_region
     * @return void
     */
    public function setIdRegion(int $id_region): void
    {
        $this->id_region = $id_region;
    }

    /**
     * @return int
     */
    public function getIdGrapeVariety(): int
    {
        return $this->id_grape_variety;
    }

    /**
     * @param int $id_grape_variety
     * @return void
     */
    public function setIdGrapeVariety(int $id_grape_variety): void
    {
        $this->id_grape_variety = $id_grape_variety;
    }

    /**
     * @return int
     */
    public function getIdTypeWine(): int
    {
        return $this->id_type_wine;
    }

    /**
     * @param int $id_type_wine
     * @return void
     */
    public function setIdTypeWine(int $id_type_wine): void
    {
        $this->id_type_wine = $id_type_wine;
    }

    /**
     * @return int
     */
    public function getIdTasteTag(): int
    {
        return $this->id_taste_tag;
    }

    /**
     * @param int $id_taste_tag
     * @return void
     */
    public function setIdTasteTag(int $id_taste_tag): void
    {
        $this->id_taste_tag = $id_taste_tag;
    }

    /**
     * @return int
     */
    public function getIdAccordTag(): int
    {
        return $this->id_accord_tag;
    }

    /**
     * @param int $id_accord_tag
     * @return void
     */
    public function setIdAccordTag(int $id_accord_tag): void
    {
        $this->id_accord_tag = $id_accord_tag;
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
    public function getIdSupplier(): int
    {
        return $this->id_supplier;
    }

    /**
     * @param int $id_supplier
     * @return void
     */
    public function setIdSupplier(int $id_supplier): void
    {
        $this->id_supplier = $id_supplier;
    }

    /**
     * Insérer une tache dans la BDD
     * @return int|false l'id du dernier élément inséré ou false dans le cas d'échec
     */
    public function insert(): int|false
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO wine (`name`, `description`, `lien`, `lien_mini`, `PA` , `PV`, `region`, `variety`, `type`, `taste`, `accord`, `supplier`) 
            VALUES (:name, :description, :lien, :lien_mini, :PA, :PV, :region, :variety, :type, :taste, :accord, :supplier)"
        );

        $stmt->execute([
            'name' => $this->name,
            'description' => $this->description,
            'lien' => $this->link_picture_max,
            'lien_mini' => $this->link_picture_mini,
            'PA'=> $this->prix_d_achat,
            'PV' => $this->prix_de_vente,
            'region' => $this->id_region,
            'variety' => $this->id_grape_variety,
            'type' => $this->id_type_wine,
            'taste' => $this->id_taste_tag,
            'accord' => $this->id_accord_tag,
            'supplier' => $this->id_supplier
        ]);

        return $this->pdo->lastInsertId();
    }
}