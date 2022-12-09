<?php

namespace App\Models;

use Core\Model;

class Region  extends Model
{
    private int $id;
    private string $name;
    private int $id_pays;
    protected string $table_name = "region";

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
     * @return int
     */
    public function getIdPays(): int
    {
        return $this->id_pays;
    }

    /**
     * @param int $id_pays
     * @return void
     */
    public function setIdPays(int $id_pays): void
    {
        $this->id_pays = $id_pays;
    }
    public function insert(): int|false
    {
        $stmt = $this->pdo->prepare("INSERT INTO region (name, id_pays) VALUES (:name, :id_pays)");

        //sql
    }
}