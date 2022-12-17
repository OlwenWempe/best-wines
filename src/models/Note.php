<?php

namespace App\Models;

use Core\Model;

class Note  extends Model
{
    private int $id;
    private string $created_at;
    private int $note;
    private int $id_client;
    private int $id_wine;
    protected string $table_name = "note";
    protected string $id_name = "id";

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
     * @return int
     */
    public function getNote(): int
    {
        return $this->note;
    }

    /**
     * @param int $first_name
     * @return void
     */
    public function setNote(int $note): void
    {
        $this->note = $note;
    }

    /**
     * @return int
     */
    public function getIdClient(): int
    {
        return $this->id_client;
    }

    /**
     * @param int $id_client
     * @return void
     */
    public function setIdClient(int $id_client): void
    {
        $this->id_client = $id_client;
    }

    /**
     * @return int
     */
    public function getIdWine(): int
    {
        return $this->id_wine;
    }

    /**
     * @param int $id_wine
     * @return void
     */
    public function setIdWine(int $id_wine): void
    {
        $this->id_wine = $id_wine;
    }
}
