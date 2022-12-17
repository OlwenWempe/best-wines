<?php

namespace App\Models;

use Core\Model;

class Supplier extends Model
{
    private int $id;
    private string $logo;
    private string $opt_pic;
    private string $name;
    private string $created_at;
    private string $adress;
    private string $zipcode;
    private string $city;
    private int $id_pays;
    private string $phone_number;
    private string $email;
    private string $password;
    private string $siren;
    protected string $table_name = "supplier";

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
    public function getLogo(): string
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     * @return void
     */
    public function setLogo(string $logo): void
    {
        $this->logo = $logo;
    }

    /**
     * @return string
     */
    public function getOptPic(): string
    {
        return $this->opt_pic;
    }

    /**
     * @param string $opt_pic
     * @return void
     */
    public function setOptPic(string $opt_pic): void
    {
        $this->opt_pic = $opt_pic;
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
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
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
     * @return int
     */
    public function getIdPays(): int
    {
        return $this->id_pays;
    }

    /**
     * @param int $id_pays
     * @return void
     */
    public function setIdPays(int $id_pays): void
    {
        $this->id_pays = $id_pays;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    /**
     * @param string $phone_number
     * @return void
     */
    public function setPhoneNumber(string $phone_number): void
    {
        $this->phone_number = $phone_number;
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
    public function getSiren(): string
    {
        return $this->siren;
    }

    /**
     * @param string $siren
     * @return void
     */
    public function setSiren(string $siren): void
    {
        $this->siren = $siren;
    }

    /**
     * Insérer une tache dans la BDD
     * @return int|false l'id du dernier élément inséré ou false dans le cas d'échec
     */
    public function insert(): int|false
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO supplier (`logo`,`supplier_name`, `adress`, `zipcode`, `city` , `id_pays`, `phone_number`, `email`, `password`, `siren`) 
            VALUES (:logo, :name, :adress, :zipcode, :city, :id_pays, :phone_number, :email, :password, :siren)"
        );

        $stmt->execute([
            'logo' => $this->logo,
            'name' => $this->name,
            'adress' => $this->adress,
            'zipcode' => $this->zipcode,
            'city' => $this->city,
            'id_pays' => $this->id_pays,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'password' => $this->password,
            'siren' => $this->siren,
        ]);

        return $this->pdo->lastInsertId();
    }
}