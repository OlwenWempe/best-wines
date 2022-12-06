<?php

namespace App\Models;

use Core\Model;

class Note  extends Model
{
    private int $id;
    private string $created_at;
    private int $note;
    private int $id_customer;
    private int $id_product;
    protected string $table_name = "note";

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
    public function getIdCustomer(): int
    {
        return $this->id_customer;
    }

    /**
     * @param int $id_customer
     * @return void
     */
    public function setIdCustomer(int $id_customer): void
    {
        $this->id_customer = $id_customer;
    }

    /**
     * @return int
     */
    public function getIdProduct(): int
    {
        return $this->id_product;
    }

    /**
     * @param int $id_product
     * @return void
     */
    public function setFirstName(int $id_product): void
    {
        $this->id_product = $id_product;
    }
}