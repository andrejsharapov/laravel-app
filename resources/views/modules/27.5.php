// 27.5. Логирование

<p>Логи — это просто запись того, что в такое-то время таким-то пользователем было сделано вот такое действие с вот таким результатом.</p>

<div class="text-2xl mt-4 mb-2">Monolog</div>

<pre><code class="language-php">
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Создаем логгер
$log = new Logger('AUTH_LOGGER');

// Хендлер, который будет писать логи в "mylog.log" и слушать все ошибки с уровнем "WARNING" и выше .
$log->pushHandler(new StreamHandler('mylog.log', Logger::WARNING));

// Хендлер, который будет писать логи в "troubles.log" и реагировать на ошибки с уровнем "ALERT" и выше.
$log->pushHandler(new StreamHandler(__DIR__ . '/../logs/auth.log', Logger::INFO));

// Добавляем записи
$log->warning('Предупреждение');
$log->info('auth errors:', array('user' => $name, 'datetime' => (new DateTime())->format('Y-m-d H:i:s'), 'password' => $password));

// more details:
        https://github.com/andrejsharapov/php-app-27-6/blob/main/forms/auth.php#L7
        https://github.com/andrejsharapov/php-app-27-6/blob/main/forms/auth.php#L47
        https://github.com/andrejsharapov/php-app-27-6/blob/main/forms/auth.php#L50
</code></pre>
