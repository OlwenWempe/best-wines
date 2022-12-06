<?php

namespace App\Models;

use Core\Model;

class PurchaseOrder  extends Model
{
    private int $id;
    private string $comment;
    private string $created_at;
    private string $date_delivery;
    private string $date_last_update;
    private int $id_supplier;
    private string $currency_code;
    private int $send;
    protected string $table_name = "purchase_order";

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
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return void
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
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
     * @return string
     */
    public function getDateDelivery(): string
    {
        return $this->date_delivery;
    }

    /**
     * @param string $date_delivery
     * @return void
     */
    public function setDateDelivery(string $date_delivery): void
    {
        $this->date_delivery = $date_delivery;
    }

    /**
     * @return string
     */
    public function getDateLastUpdate(): string
    {
        return $this->date_last_update;
    }

    /**
     * @param string $date_last_update
     * @return void
     */
    public function setDateLastUpdate(string $date_last_update): void
    {
        $this->date_last_update = $date_last_update;
    }

    /**
     * @return int
     */
    public function getIdSupplier(): int
    {
        return $this->id_supplier;
    }

    /**
     * @param int $id_supplier
     * @return void
     */
    public function setIdSupplier(int $id_supplier): void
    {
        $this->id_supplier = $id_supplier;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currency_code;
    }

    /**
     * @param string $currency_code
     * @return void
     */
    public function setCurrencyCode(string $currency_code): void
    {
        $this->currency_code = $currency_code;
    }

    /**
     * @return int
     */
    public function getSend(): int
    {
        return $this->send;
    }

    /**
     * @param int $send
     * @return void
     */
    public function setSend(int $send): void
    {
        $this->send = $send;
    }

}