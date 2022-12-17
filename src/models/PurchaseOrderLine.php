<?php

namespace App\Models;

use Core\Model;

class PurchaseOrderLine  extends Model
{
    private int $id;
    private int $quantity;
    private int $id_wine;
    protected string $table_name = "purchase_order_line";
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
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return void
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
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
