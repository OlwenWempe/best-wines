<?php

namespace App\Models;

use Core\Model;

class Article  extends Model
{
    private int $id;
    private string $title;
    private string $content;
    private string $picture_link;
    private string $created_at;
    private int $id_employee;
    protected string $table_name = "article";

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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return void
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getPictureLink(): string
    {
        return $this->picture_link;
    }

    /**
     * @param string $picture_link
     * @return void
     */
    public function setPictureLink(string $picture_link): void
    {
        $this->picture_link = $picture_link;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
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
    // public function insert() : int|false
    // {
    //     $stmt = $this->pdo->prepare("INSERT INTO task (name, to_do_at, is_done,id_user) VALUES (:name, :to_do_at, :is_done, :id_user)");

    //     $stmt->execute([
    //         'name' => $this->name,
    //         'to_do_at' => $this->to_do_at,
    //         'is_done' => $this->is_done,
    //         'id_user' => $this->id_user,
    //     ]);

    //     return $this->pdo->lastInsertId();
    // }
}