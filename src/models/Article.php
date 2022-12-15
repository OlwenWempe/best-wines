<?php

namespace App\Models;

use Core\Model;

class Article  extends Model
{
    private int $id;
    private string $content;
    private string $created_at;
    private int $id_admin;
    protected string $table_name = "article";

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
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * @return int
     */
    public function getIdAdmin(): int
    {
        return $this->id_admin;
    }

    /**
     * @param int $id_admin
     * @return void
     */
    public function setIdAdmin(int $id_admin): void
    {
        $this->id_admin = $id_admin;
    }
    public function insert(): int|false
    {
        $stmt = $this->pdo->prepare("INSERT INTO article (`content`, `id_admin`) VALUES (:content, :id_admin)");

        $stmt->execute([
            'content' => $this->content,
            'id_admin' => $this->id_admin
        ]);

        return $this->pdo->lastInsertId();
    }
}