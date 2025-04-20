<?php
declare(strict_types=1);

namespace MyProject\Classes;

require_once 'User.php'; // Подключение класса User
require_once 'SuperUserInterface.php'; // Подключение интерфейса SuperUserInterface

class SuperUser extends User implements SuperUserInterface {
    private static int $superUserCount = 0; // Статическое свойство для подсчета экземпляров
    public string $role;

    public function __construct(string $name, string $login, string $password, string $role) {
        parent::__construct($name, $login, $password); // Вызов родительского конструктора
        $this->role = $role; // Установка значения для свойства role
        self::$superUserCount++; // Инкремент счетчика при создании нового экземпляра
    }
    
    public static function getSuperUserCount(): int {
        return self::$superUserCount; // Метод для получения количества экземпляров
    }

    public function showInfo(): void {
        parent::showInfo(); // Вызов метода showInfo() родительского класса
        echo "Роль: {$this->role}\n"; // Вывод информации о роли
    }
    
    public function getInfo(): array {
        return [
            'имя пользователя' => $this->name, // Используем унаследованное свойство $name
            'логин' => $this->login, // Используем унаследованное свойство $login
            'роль' => $this->role // Собственное свойство role
        ];
    }
}

