<?php

namespace App\Models;

use Core\Model;

class Discount  extends Model
{
    private int $id;
    private string $start_date;
    private string $end_date;
    private int $pourcentage;
    private int $id_user;
    private int $id_product;
    protected string $table_name = "discount";

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
    public function getStartDate(): string
    {
        return $this->start_date;
    }

    /**
     * @param string $start_date
     * @return void
     */
    public function setStartDate(string $start_date): void
    {
        $this->start_date = $start_date;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->end_date;
    }

    /**
     * @param string $end_date
     * @return void
     */
    public function setEndDate(string $end_date): void
    {
        $this->end_date = $end_date;
    }

    /**
     * @return int
     */
    public function getPourcentage(): int
    {
        return $this->pourcentage;
    }

    /**
     * @param int $pourcentage
     * @return void
     */
    public function setPourcentage(int $pourcentage): void
    {
        $this->pourcentage = $pourcentage;
    }

    /**
     * @return int
     */
    public function getIdUser(): int
    {
        return $this->id_user;
    }

    /**
     * @param int $id_user
     * @return void
     */
    public function setIdUser(int $id_user): void
    {
        $this->id_user = $id_user;
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
    public function setIdProduct(int $id_product): void
    {
        $this->id_product = $id_product;
    }

}