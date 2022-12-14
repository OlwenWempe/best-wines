<?php

namespace App\Models;

use Core\Model;

class AccordTag  extends Model
{
    private int $id;
    private string $name;
    protected string $table_name = "accord_tag";

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
        $stmt = $this->pdo->prepare("INSERT INTO accord_tag (accord_name) VALUES (:name)");

        $stmt->execute([
            'name' => $this->name
        ]);

        return $this->pdo->lastInsertId();
    }

    public function findAccord(int $id, bool $is_array = false): array|object|false
    {

        $stmt = $this->pdo->prepare("SELECT * FROM accord_tag_wine INNER JOIN accord_tag on accord_tag.accord_id = accord_tag_wine.id_accord_tag WHERE accord_tag_wine.id_wine = :id ");
        $stmt->bindParam(':id', $id);


        if ($is_array)
            $stmt->setFetchMode(\PDO::FETCH_ASSOC);


        else
            $stmt->setFetchMode(\PDO::FETCH_CLASS, get_called_class());

        $stmt->execute();
        return $stmt->fetchAll();
    }
}