<?php
declare(strict_types=1);

// Пространство имен
namespace MyProject\Classes;

// Регистрация автозагрузки классов
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/' . str_replace('\\', '/', substr($class, 9)) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

// Интерфейс SuperUserInterface
interface SuperUserInterface
{
    public function getInfo(): array;
}

// Класс User
class User implements SuperUserInterface
{
    protected string $name;
    protected string $login;
    protected string $password;

    // Статическая переменная для подсчета пользователей
    private static int $userCount = 0;

    public function __construct(string $name, string $login, string $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        self::$userCount++; // Увеличение счетчика при создании пользователя
    }

    // Изменили метод showInfo() для вывода столбиком
    public function showInfo(): void
    {
        echo "Имя: {$this->name}<br>Логин: {$this->login}<br><br>";
    }

    // Метод для получения информации о пользователе
    public function getInfo(): array
    {
        return [
            'имя пользователя' => $this->name,
            'логин' => $this->login,
            'пароль' => $this->password
        ];
    }

    // Метод для получения количества пользователей
    public static function getUserCount(): int
    {
        return self::$userCount;
    }
}

// Класс SuperUser
class SuperUser extends User implements SuperUserInterface
{
    protected string $role;

    // Статическая переменная для подсчета суперпользователей
    private static int $superUserCount = 0;

    public function __construct(string $name, string $login, string $password, string $role)
    {
        parent::__construct($name, $login, $password);
        $this->role = $role;
        self::$superUserCount++; // Увеличение счетчика суперпользователей
    }

    // Изменили метод showInfo() для вывода столбиком
    public function showInfo(): void
    {
        parent::showInfo();
        echo "Роль: {$this->role}<br><br>";
    }

    // Реализация метода getInfo(), специфичного для суперпользователя
    public function getInfo(): array
    {
        $info = parent::getInfo(); // Берем информацию от родительского класса
        $info['роль'] = $this->role; // Добавляем роль
        return $info;
    }

    // Метод для получения количества суперпользователей
    public static function getSuperUserCount(): int
    {
        return self::$superUserCount;
    }
}

// Создание нескольких пользователей
$user1 = new User('Polina', 'pol123', 'password1');
$user2 = new User('Julia', 'juli456', 'password2');
$user3 = new User('Anna', 'anna789', 'password3');

// Демонстрация информации о пользователях
$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

// Создание суперпользователя
$user = new SuperUser('Leo', 'leo525', 'password0', 'admin');
$user->showInfo();
print_r($user->getInfo()); // Здесь вызываем getInfo() без ошибок

// Использование публичных методов для получения количества пользователей
echo "<p>Всего обычных пользователей: " . User::getUserCount() . "</p>\n";
echo "<p>Всего cупер-пользователей: " . SuperUser::getSuperUserCount() . "</p>\n";
