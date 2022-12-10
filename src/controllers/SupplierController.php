<?php

namespace App\Models;

use Core\Model;

class Supplier
{
    private int $id;
    private string $name;
    private string $created_at;
    private string $adress;
    private int $zipcode;
    private string $city;
    private int $id_pays;
    private int $phone_number;
    private string $email;
    private string $password;
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
     * @return int
     */
    public function getZipcode(): int
    {
        return $this->zipcode;
    }

    /**
     * @param int $zipcode
     * @return void
     */
    public function setZipcode(int $zipcode): void
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
     * @return int
     */
    public function getPhoneNumber(): int
    {
        return $this->phone_number;
    }

    /**
     * @param int $phone_number
     * @return void
     */
    public function setPhoneNumber(int $phone_number): void
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

    public function checkLogged()
    {
        $s = new Session;
        $s->startSession();
        if (!isset($_SESSION['supplier']['auth']) || !$_SESSION['supplier']['auth']) {
            header('Location: user/login');
            exit;
        }
    }

    public function checkUnlogged(string $path): void
    {
        $s = new Session;
        $s->startSession();
        if (isset($_SESSION['supplier']['auth']) && $_SESSION['supplier']['auth']) {
            $this->path = $path;
            header('Location: ' . $this->path);
            //admin/login
            exit;
        }
    }
}