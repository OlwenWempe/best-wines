<?php

namespace App\Models;

use Core\Model;

class TasteTag  extends Model
{
    private int $id;
    private string $name;
    protected string $table_name = "taste_tag";

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
    public function insert(): int|false
    {
        $stmt = $this->pdo->prepare("INSERT INTO taste_tag (taste_name) VALUES (:name)");

        $stmt->execute([
            'name' => $this->name
        ]);

        return $this->pdo->lastInsertId();
    }

    public function findAccord(int $id, bool $is_array = false): array|object|false
    {

        $stmt = $this->pdo->prepare("SELECT * FROM taste_tag_wine INNER JOIN taste_tag on taste_tag.taste_id = taste_tag_wine.id_taste_tag WHERE taste_tag_wine.id_wine = :id ");
        $stmt->bindParam(':id', $id);


        if ($is_array)
            $stmt->setFetchMode(\PDO::FETCH_ASSOC);


        else
            $stmt->setFetchMode(\PDO::FETCH_CLASS, get_called_class());

        $stmt->execute();
        return $stmt->fetchAll();
    }
}