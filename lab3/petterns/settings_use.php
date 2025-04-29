<?php
// Файл settings_use.php
spl_autoload_register(); // Регистрация автозагрузчика классов

use Singleton\Settings;

// Сохранение разных типов данных в объекте Settings
$settings = Settings::get();
$settings->items_per_page = 20;          // Числовой тип
$settings->string_value   = 'Привет мир!'; // Строковый тип
$settings->numeric_value  = 3.14;       // Число с плавающей точкой
$settings->boolean_value  = true;       // Логический тип

// Вывод всех значений на экран
echo "<h3>Настройки:</h3>";
echo '<p>Количество элементов на странице: ', $settings->items_per_page, '</p>';
echo '<p>Строковая переменная: ', $settings->string_value, '</p>';
echo '<p>Численная переменная: ', $settings->numeric_value, '</p>';
echo '<p>Логическая переменная: ', ($settings->boolean_value ? 'true' : 'false'), '</p>';


