<?php

namespace App\Models;

use Core\Model;

class Region  extends Model
{
    private int $id;
    private string $name;
    private int $id_country;
    protected string $table_name = "region";

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

    /**
     * @return int
     */
    public function getIdCountry(): int
    {
        return $this->id_country;
    }

    /**
     * @param int $id_country
     * @return void
     */
    public function setIdCountry(int $id_country): void
    {
        $this->id_country = $id_country;
    }

}