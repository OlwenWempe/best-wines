<?php

namespace App\Models;

use Core\Model;

class Client  extends Model
{
    private int $id;
    private string $first_name;
    private string $last_name;
    private string $email;
    private string $password;
    private string $adress;
    private string $zipcode;
    private string $city;
    private string $phone;
    private string $joined_at;
    private int $id_ticket_de_vente;
    protected string $table_name = "client";
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
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     * @return void
     */
    public function setFirstName(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     * @return void
     */
    public function setLastName(string $last_name): void
    {
        $this->last_name = $last_name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return void
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return void
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getAdress(): string
    {
        return $this->adress;
    }

    /**
     * @param string $adress
     * @return void
     */
    public function setAdress(string $adress): void
    {
        $this->adress = $adress;
    }

    /**
     * @return string
     */
    public function getZipcode(): string
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     * @return void
     */
    public function setZipcode(string $zipcode): void
    {
        $this->zipcode = $zipcode;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return void
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return void
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getJoinedAt(): string
    {
        return $this->joined_at;
    }

    /**
     * @return int
     */
    public function getIdTicketDeVente(): int
    {
        return $this->id_ticket_de_vente;
    }

    /**
     * @param int $id_ticket_de_vente
     * @return void
     */
    public function setIdTicketDeVente(int $id_ticket_de_vente): void
    {
        $this->id_ticket_de_vente = $id_ticket_de_vente;
    }

    /**
     * Insérer un client dans la BDD
     * @return int|false l'id du dernier élément inséré ou false dans le cas d'échec
     */
    public function register(): int|false
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO client (`first_name`, `last_name`, `email`, `password`, `adress`, `zipcode` , `city`, `phone`) 
            VALUES (:first_name, :last_name, :email, :password, :adress, :zipcode, :city, :phone)"
        );

        $stmt->execute([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'password' => $this->password,
            'adress' => $this->adress,
            'zipcode' => $this->zipcode,
            'city' => $this->city,
            'phone' => $this->phone,
        ]);

        return $this->pdo->lastInsertId();
    }
}
