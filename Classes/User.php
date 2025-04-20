<?php
// User.php
namespace MyProject\Classes;

class User {
    // Публичные свойства
    public $name;
    public $login;
    
    // Приватное свойство
    private $password;

    // Конструктор для инициализации свойств
    public function __construct($name, $login, $password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    // Метод для вывода информации о пользователе
    public function showInfo() {
        echo "Имя: {$this->name}, Логин: {$this->login}<br>";
    }
}
