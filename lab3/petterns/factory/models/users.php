<?php
namespace Factory\Models;

class Users extends Collection
{
    private array $users;

    public function __construct(array $users = [])
    {
        $this->users = $users ?: [
            new User('dmitry.koterov@gmail.com', 'password', 'Дмитрий', 'Котеров'),
            new User('igorsimdyanov@gmail.com', 'password', 'Игорь', 'Симдянов'),
            new User('polina.kurkin@gmail.com', 'password123', 'Полина', 'Куркина'),
            new User('anna.zaugol@mail.ru', 'warandpeace', 'Анна', 'Заугольникова'),
            new User('petr.dosoev@yandex.ru', 'crimepunish', 'Пётр', 'Досоев')
        ];
        parent::__construct($this->users);
    }

    public function getUsers(): array
    {
        return $this->users;
    }
}
