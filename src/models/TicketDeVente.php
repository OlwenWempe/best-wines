<?php

namespace App\Models;

use Core\Model;

class TicketDeVente  extends Model
{
    private int $id;
    private string $created_at;
    private int $id_ligne_de_vente;
    protected string $table_name = "ticket_de_vente";

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
     * @param string $created_at
     * @return void
     */
    public function setCreatedAt(string $created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return int
     */
    public function getIdLigneDeVente(): int
    {
        return $this->id_ligne_de_vente;
    }

    /**
     * @param int $id_ligne_de_vente
     * @return void
     */
    public function setIdLigneDeVente(int $id_ligne_de_vente): void
    {
        $this->id_ligne_de_vente = $id_ligne_de_vente;
    }

}