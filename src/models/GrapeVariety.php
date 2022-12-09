<?php

namespace App\Models;

use Core\Model;

class GrapeVariety  extends Model
{
    private int $id;
    private string $name;
    protected string $table_name = "grape_variety";

    // accesseurs (getters & setters)

    /**
     * Permet de récupérer l'identifiant de la tâche
     *
     * @return int
     */
    public function getId() : int
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
    public function insert() : int|false
    {
        $stmt = $this->pdo->prepare("INSERT INTO grape_variety (name) VALUES (:name)");

        $stmt->execute([
            'name' => $this->name
        ]);

        return $this->pdo->lastInsertId();
    }
}