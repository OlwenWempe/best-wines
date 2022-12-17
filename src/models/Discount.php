<?php

namespace App\Models;

use Core\Model;

class Discount  extends Model
{
    private int $id;
    private string $start_date;
    private string $end_date;
    private int $pourcentage;
    private int $id_employee;
    private int $id_wine;
    protected string $table_name = "discount";
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
    public function getIdEmployee(): int
    {
        return $this->id_employee;
    }

    /**
     * @param int $id_employee
     * @return void
     */
    public function setIdEmployee(int $id_employee): void
    {
        $this->id_employee = $id_employee;
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
