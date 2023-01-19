// 24.3 MVC: Модель, Представление и Контроллер

<?php
$caption = 'MVC: Модель, Представление и Контроллер';
?>

<pre><code class="language-md">
- Первый элемент — это модель. Модель представляет собой совокупность процедур и алгоритмов обработки данных. Сама по себе модель не содержит данных, но, как правило, черпает их из базы данных и обрабатывает по заранее прописанным алгоритмам. Если говорить о Web-разработке, то модель будет содержать набор классов и функций, например на языке PHP.
- Второй элемент — это представление View. Позволяет отобразить информацию. Если это сайт, то информация отображается в браузере. Представление при разработке сайтов содержит HTML код, в который подставляются переменные, которые берутся, не из модели, а из контроллера.
- Третий элемент — это контроллер. Его главная функция это обеспечение связи с пользователем и моделью. Также может содержать PHP код.
</code></pre>

Пример:

<pre><code class="language-md">
- Модель: кухня, на которой повар делает сэндвич.
- Представление: готовый бутерброд, который вы с удовольствием едите.
- Контроллер: официант, который принимает заказ и передаёт его на кухню.
</code></pre>

<div class="text-2xl mt-4 mb-2">Единая точка входа</div>

<pre><code class="language-php">
// index.php

define("ROOT_DIR",dirname(__FILE__).'/');
require_once "vendor/autoload.php";

$application = new Application();
$application->run();
</code></pre>

Единая точка входа с Apache

<pre><code class="language-php">
// Включаем перенаправление
RewriteEngine On
// Не применять к существующим файлам файлам
RewriteCond %{REQUEST_FILENAME} !-f
// Не применять к существующим директориям
RewriteCond %{REQUEST_FILENAME} !-d
// Редирект всех запросов на index.php
// L означает Last, нужен чтобы на этом этапе mod_rewrite сразу остановил работу.
// Короче, небольшое увеличение производительности.
RewriteRule .* index.php [L]
// RewriteRule ^(.*)$ index.php?url_param=$1 [L,QSA]
</code></pre>

Чтобы перенаправление срабатывало для существующих директорий, удаляем строку с !-d в конце, вот так:

<pre><code class="language-php">
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule .* index.php [L]
</code></pre>

Получить URL адрес текущей страницы можно из переменной $_SERVER['REQUEST_URI'].

<div class="text-2xl mt-4 mb-2">MVC каркас</div>

<pre><code class="language-php">
application/
        → controllers/
        → core/
        → models/
        → views/
        → bootstrap.php

public/
        → css
        → js
        → src
.htaccess
index.php
page1.html
page2.html
...
</code></pre>

<a href="https://github.com/andrejsharapov/php-app-24-5" title="Итоговый проект" target="_blank">Итоговый проект</a>.
