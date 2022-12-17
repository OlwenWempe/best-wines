<?php

namespace App\Models;

use Core\Model;

class Pays  extends Model
{
    private int $id;
    private string $alpha3;
    private string $nom_en_gb;
    private string $nom_fr_fr;
    private int $id_currencies;
    protected string $table_name = "pays";
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
    public function getAlpha3(): string
    {
        return $this->alpha3;
    }

    /**
     * @param string $alpha
     * @return void
     */
    public function setAlpha3(string $alpha3): void
    {
        $this->alpha3 = $alpha3;
    }

    /**
     * @return string
     */
    public function getNomEnGb(): string
    {
        return $this->nom_en_gb;
    }

    /**
     * @param string $nom_en_gb
     * @return void
     */
    public function setNomEnGb(string $nom_en_gb): void
    {
        $this->nom_en_gb = $nom_en_gb;
    }

    /**
     * @return string
     */
    public function getNomFr(): string
    {
        return $this->nom_fr_fr;
    }

    /**
     * @param string $nom_fr_fr
     * @return void
     */
    public function setNomFr(string $nom_fr_fr): void
    {
        $this->nom_fr_fr = $nom_fr_fr;
    }

    /**
     * @return int
     */
    public function getIdCurrencies(): int
    {
        return $this->id_currencies;
    }

    /**
     * @param int $id_currencies
     * @return void
     */
    public function setIdCurrencies(int $id_currencies): void
    {
        $this->id_currencies = $id_currencies;
    }

    public static function countrySearch()
    {
        $pays = new Pays();
        $payss = $pays->findAll();
    }
}