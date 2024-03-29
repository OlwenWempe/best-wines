<?php

namespace App\Models;

use Core\Model;

class Wine  extends Model
{
    private int $id;
    private string $created_at;
    private string $name;
    private string $description;
    private string $grape_variety;
    private string $link_picture_mini;
    private string $link_picture_max;
    private float $prix_d_achat;
    private float $prix_de_vente;
    private int $stock;
    private int $id_note;
    private int $id_region;
    private int $id_type_wine;
    private array $id_taste_tag;
    private array $id_accord_tag;
    private int $id_discount;
    private int $id_supplier;
    protected string $table_name = "wine";
    protected string $id_name = "wine_id";



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
    public function getGrapeVariety(): string
    {
        return $this->grape_variety;
    }

    /**
     * @param string $grape_variety
     * @return void
     */
    public function setGrapeVariety(string $grape_variety): void
    {
        $this->grape_variety = $grape_variety;
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
     * @return float
     */
    public function getPrixDAchat(): float
    {
        return $this->prix_d_achat;
    }

    /**
     * @param float $prix_d_achat
     * @return void
     */
    public function setPrixDAchat(float $prix_d_achat): void
    {
        $this->prix_d_achat = $prix_d_achat;
    }

    /**
     * @return float
     */
    public function getPrixDeVente(): float
    {
        return $this->prix_de_vente;
    }

    /**
     * @param float $prix_de_vente
     * @return void
     */
    public function setPrixDeVente(float $prix_de_vente): void
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
     * @return array
     */
    public function getIdTasteTag(): array
    {
        return $this->id_taste_tag;
    }

    /**
     * @param array $id_taste_tag
     * @return void
     */
    public function setIdTasteTag(array $id_taste_tag): void
    {
        $this->id_taste_tag = $id_taste_tag;
    }

    /**
     * @return array
     */
    public function getIdAccordTag(): array
    {
        return $this->id_accord_tag;
    }

    /**
     * @param array $id_accord_tag
     * @return void
     */
    public function setIdAccordTag(array $id_accord_tag): void
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
            "INSERT INTO wine (`wine_name`, `description`, `grape_variety`, `link_picture_max`, `prix_d_achat`, `prix_de_vente`, `stock`, `id_region`, `id_type_wine`, `id_supplier`) 
            VALUES (:name, :description, :grape_variety, :link_picture_max, :prix_d_achat, :prix_de_vente, :stock, :id_region, :id_type_wine, :id_supplier)"
        );

        $stmt->execute([
            'name' => $this->name,
            'description' => $this->description,
            'grape_variety' => $this->grape_variety,
            'link_picture_max' => $this->link_picture_max,
            'prix_d_achat' => $this->prix_d_achat,
            'prix_de_vente' => $this->prix_de_vente,
            'stock' => $this->stock,
            'id_region' => $this->id_region,
            'id_type_wine' => $this->id_type_wine,
            'id_supplier' => $this->id_supplier
        ]);

        $id_wine = $this->pdo->lastInsertId();
        $count = count($_POST['id_taste_tag']);

        for ($i = 0; $i < $count; $i++) {
            $stmt1 = $this->pdo->prepare(
                "INSERT INTO taste_tag_wine (`id_taste_tag`, `id_wine`) 
                VALUES (:id_taste_tag, :id_wine)"
            );

            $stmt1->execute([
                'id_taste_tag' => $this->id_taste_tag[$i],
                'id_wine' => $id_wine
            ]);
        }

        $count = count($_POST['id_accord_tag']);
        for ($i = 0; $i < $count; $i++) {
            $stmt2 = $this->pdo->prepare(
                "INSERT INTO accord_tag_wine (`id_accord_tag`, `id_wine`) 
                VALUES (:id_accord_tag, :id_wine)"
            );

            $stmt2->execute([
                'id_accord_tag' => $this->id_accord_tag[$i],
                'id_wine' => $id_wine
            ]);
        }
        return $id_wine;
    }

    public function edit(): int|false
    {
        $stmt = $this->pdo->prepare(
            "UPDATE wine SET `name` = :new_name, `description` = :new_description, 'grape_variety' = :new_grape_variety, `prix_d_achat` = :new_prix_d_achat , `prix_de_vente` = :new_prix_de_vente, `stock = :new_stock, `id_region` = :new_id_region, `id_type_wine` = :new_id_type_wine, `id_taste_tag` = :new_id_taste_tag, `id_accord_tag` = :new_id_accord_tag, `id_supplier` = :new_id_supplier WHERE id = :id"
        );

        $stmt->execute([
            'new_name' => $this->name,
            'new_description' => $this->description,
            'new_grape_variety' => $this->grape_variety,
            'link_picture_max' => $this->link_picture_max,
            'link_picture_mini' => $this->link_picture_mini,
            'new_prix_d_achat' => $this->prix_d_achat,
            'new_prix_de_vente' => $this->prix_de_vente,
            'new_stock' => $this->stock,
            'new_id_region' => $this->id_region,
            'new_id_type_wine' => $this->id_type_wine,
            'new_id_taste_tag' => $this->id_taste_tag,
            'new_id_accord_tag' => $this->id_accord_tag,
            'new_id_supplier' => $this->id_supplier
        ]);

        return $this->pdo->lastInsertId();
    }

    public function findWine(int $id, bool $is_array = false): array|object|false
    {
        $stmt = $this->pdo->prepare("SELECT * FROM wine INNER JOIN region on wine.id_region = region.region_id INNER JOIN type_wine on wine.id_type_wine = type_wine.type_id INNER JOIN supplier on wine.id_supplier = supplier.supplier_id WHERE wine.wine_id = :id ");
        $stmt->bindParam(':id', $id);


        if ($is_array)
            $stmt->setFetchMode(\PDO::FETCH_ASSOC);


        else
            $stmt->setFetchMode(\PDO::FETCH_CLASS, get_called_class());

        $stmt->execute();
        return $stmt->fetch();
    }

    public function findAllWine(): array|false
    {
        $stmt = $this->pdo->prepare(
            // "SELECT * FROM {$this->table_name} JOIN {$this->region} JOIN {$this->accord_tag} JOIN {$this->type_wine} JOIN {$this->taste_tag} JOIN {$this->supplier}"
            "SELECT * FROM wine INNER JOIN region on wine.id_region = region.region_id INNER JOIN accord_tag on wine.id_accord_tag = accord_tag.id INNER JOIN type_wine on wine.id_type_wine = type_wine.id INNER JOIN taste_tag on wine.id_taste_tag = taste_tag.id INNER JOIN supplier on wine.id_supplier = supplier.id"
        );
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);


        $stmt->execute();
        return $stmt->fetchAll();
    }
}
