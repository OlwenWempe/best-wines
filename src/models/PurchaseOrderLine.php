<?php

namespace App\Models;

use Core\Model;

class PurchaseOrderLine  extends Model
{
    private int $id;
    private int $quantity;
    private int $id_product;
    protected string $table_name = "purchase_order_line";

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
    public function getIdProduct(): int
    {
        return $this->id_product;
    }

    /**
     * @param int $name
     * @return void
     */
    public function setIdProduct(int $id_product): void
    {
        $this->id_product = $id_product;
    }

}