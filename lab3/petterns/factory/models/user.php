<?php
namespace Factory\Models;

class User
{
    private string $email;
    private string $password;
    private string $firstName;
    private string $lastName;

    public function __construct(
        string $email,
        string $password,
        string $firstName,
        string $lastName
    ) {
        $this->email = $email;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getMaskedPassword(): string
    {
        return str_repeat('*', strlen($this->password));
    }
}
