**Пакет реализует интерфейс для работы с подписками пользователя.**

Является пакетом для _Laravel 5.2_, использует _Twig 2_. Важно учесть, что _Twig 2_ (на момент написания данной инструкции) требует _PHP 7_.
 
Для установки пакета необходимо:
- добавить в файл _composer.json_ основного приложения в раздел _require_ запись `"termiyanc/moactiontest": "1.0.0"`, затем выполнить команду `composer update` либо выполнить команду `composer require termiyanc/moactiontest:1.0.0` в контексте основного приложения.
- для подключения пакета к основному приложению необходимо в файле конфигурации _app.php_ основного приложения в разделе _providers_ прописать значение `Termiyanc\Moactiontest\MoactiontestServiceProvider::class`.

После установки пакета необходимо выполнить команду `php artisan vendor:publish --provider=Termiyanc\Moactiontest\MoactiontestServiceProvider --force`,
затем выполнить миграции пакета при помощи команды `php artisan migrate --path=database/termiyanc/moactiontest/migrations`.
Миграции добавляют в базу данных три таблицы: 
- _termiyanc_moactiontest_users_ со значащим полем _name_ (пользователи), 
- _termiyanc_moactiontest_subscriptions_ со значащим полем _name_ (подписки), 
- _termiyanc_moactiontest_subscriptions_to_user_ (подписки пользователя).

Имеются начальные значения для заполнения таблиц. 
Чтобы заполнить таблицы начальными значениями, необходимо выполнить команду `php artisan db:seed --class=TermiyancMoactiontestDatabaseSeeder`.

Интерфейс, реализуемый пакетом, будет доступен по адресу _адрес_приложения/termiyanc/moactiontest/users_.

Для удаления пакета необходимо:
- в файле _composer.json_ основного приложения удалить запись `"termiyanc/moactiontest": "1.0.0"` в разделе _require_  либо в контексте основого приложения выполнить команду `composer remove termiyanc/moactiontest`, 
- удалить в контексте основного приложения директории  _database/termiyanc/moactiontest_ и _public/termiyanc/moactiontest_, 
- удалить значение `Termiyanc\Moactiontest\MoactiontestServiceProvider::class` из файла _app.php_ конфигурации основного приложения. 