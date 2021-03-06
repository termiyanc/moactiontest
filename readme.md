**Пакет реализует интерфейс для работы с подписками пользователя.**

Является пакетом для _Laravel 5.2_, использует _Twig 2_. Важно учесть, что _Twig 2_ (на момент написания данной инструкции) требует _PHP 7_.
 
Для установки пакета необходимо в контексте основного приложения:
- добавить в файл _composer.json_ в раздел _require_ запись `"termiyanc/moactiontest": "^1.0"` и выполнить команду `composer update` либо выполнить команду `composer require termiyanc/moactiontest`,
- в файле конфигурации _app.php_ в разделе _providers_ прописать значение `Termiyanc\Moactiontest\MoactiontestServiceProvider::class`.

После установки пакета необходимо в контексте основного приложения: 
- выполнить команду `php artisan vendor:publish --provider=Termiyanc\Moactiontest\MoactiontestServiceProvider --force`,
- выполнить команду `composer dumpautoload`,
- выполнить миграции пакета при помощи команды `php artisan migrate --path=database/termiyanc/moactiontest/migrations`.

Миграции добавляют в базу данных три таблицы:
- _termiyanc_moactiontest_users_ со значащим полем _name_ (пользователи), 
- _termiyanc_moactiontest_subscriptions_ со значащим полем _name_ (подписки), 
- _termiyanc_moactiontest_subscriptions_to_user_ (подписки пользователя).

Имеются начальные значения для заполнения таблиц. 
Чтобы заполнить таблицы начальными значениями, необходимо выполнить команду `php artisan db:seed --class=TermiyancMoactiontestDatabaseSeeder` в контексте основного приложения.

Интерфейс, реализуемый пакетом, будет доступен по адресу _адрес_приложения/termiyanc/moactiontest/users_. 