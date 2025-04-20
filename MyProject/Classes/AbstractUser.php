<?php
declare(strict_types=1);

namespace MyProject\Classes;

abstract class AbstractUser {
    protected string $username;
    protected string $password;

    public function __construct(string $username, string $password) {
        $this->username = $username;
        $this->password = $password;
    }

    abstract public function showInfo();
}

