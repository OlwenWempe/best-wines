<?php

namespace App\Models;

use Core\Model;

class Accord_tag  extends Model
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
    public function getId() : int
    {
        return $this->id;
    }