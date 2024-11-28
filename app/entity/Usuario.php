<?php
namespace proyecto\app\entity;

use proyecto\core\database\QueryBuilder;
use proyecto\core\database\IEntity;

class Usuario extends QueryBuilder implements IEntity
{
    private int $id;
    private string $image;
    private string $username;
    private string $password;
    private string $role;

    public function __construct(string $image = "", string $username = "", string $password = "", string $role = "") {
        $this->image = $image;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getImage(): string {
        return $this->image;
    }

    public function getUsername(): string {
        return $this->username;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function getRole(): string {
        return $this->role;
    }

    public function setImage(string $image): void {
        $this->image = $image;
    }

    public function setUsername(string $username): void {
        $this->username = $username;
    }

    public function setPassword(string $password): void {
        $this->password = $password;
    }

    public function setRole(string $role): void {
        $this->role = $role;
    }
    
    public function toArray(): array {
        return [
            'image' => $this->username,
            'username' => $this->username,
            'password' => $this->password,
            'role' => $this->role,
        ];
    }
}
