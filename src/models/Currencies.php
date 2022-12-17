<?php

namespace App\Models;

use Core\Model;

class Currencies  extends Model
{
    private int $id;
    private string $country;
    private string $currency;
    private string $code;
    private int $minor_unit;
    protected string $table_name = "currencies";
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
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return void
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return void
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return void
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return int
     */
    public function getMinorUnit(): int
    {
        return $this->minor_unit;
    }

    /**
     * @param int $minor_unit
     * @return void
     */
    public function setMinorUnit(string $minor_unit): void
    {
        $this->minor_unit = $minor_unit;
    }
}
