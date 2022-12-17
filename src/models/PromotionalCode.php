<?php

namespace App\Models;

use Core\Model;

class PromotionalCode  extends Model
{
    private int $id;
    private string $start;
    private string $end;
    private string $name; //A vérifier
    private int $percentage;
    private int $id_employee;
    protected string $table_name = "promotional_code";
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
    public function getStart(): string
    {
        return $this->start;
    }

    /**
     * @param string $start
     * @return void
     */
    public function setStart(string $start): void
    {
        $this->start = $start;
    }

    /**
     * @return string
     */
    public function getEnd(): string
    {
        return $this->end;
    }

    /**
     * @param string $end
     * @return void
     */
    public function setEnd(string $end): void
    {
        $this->end = $end;
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
    public function getPercentage(): int
    {
        return $this->percentage;
    }

    /**
     * @param int $percentage
     * @return void
     */
    public function setPercentage(int $percentage): void
    {
        $this->percentage = $percentage;
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
}
