// 25.3. PHP сессия и работа с cookie

<p>
    Сессия — это механизм PHP, который позволяет хранить данные для конкретного пользователя между запусками скрипта. Стандартные задачи, которые решают с помощью сессии, — это корзина интернет-магазина, форма для заполнения пользователем, разбитая на несколько страниц сайта (на первой мы спрашиваем имя, на второй email и так далее), авторизация пользователей на PHP.
</p>

<p>Авторизация — это проверка и определение полномочий на выполнение некоторых действий в соответствии с ранее выполненной аутентификацией.</p>

<div class="text-2xl mt-4 mb-2">Запись в сессию</div>

<pre><code class="language-php">
session_start();

$_SESSION['test'] = 'Тест!';
</code></pre>

<div class="text-2xl mt-4 mb-2">Выгрузка данных из сессий</div>

<pre><code class="language-php">
session_start();

echo $_SESSION['test'];
</code></pre>

<p>Пример</p>

<pre><code class="language-php">
// При каждом обновлении страницы он будет увеличиваться на единицу, а при закрытии браузера — обнуляться (после закрытия нужно подождать 15-25 минут):
session_start();

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter'] = $_SESSION['counter'] + 1;
}

echo 'Вы обновили эту страницу '.$_SESSION['counter'].' раз!';
</code></pre>

<div class="text-2xl mt-4 mb-2">Удаление переменных из сессии</div>

<pre><code class="language-php">
unset($_SESSION['var']);
</code></pre>

<div class="text-2xl mt-4 mb-2">Завершение сессии</div>

<pre><code class="language-php">
session_destroy();
</code></pre>


<div class="text-2xl mt-4 mb-2">Работа с cookie</div>

<p>Cookies (или просто «куки», в переводе означает «печенье») — это небольшие текстовые файлы с кодом со служебной информацией для браузера пользователя.</p>

<div class="text-2xl mt-4 mb-2">Запись в cookie</div>

<pre><code class="language-php">
setcookie('test', 'Тест!');
</code></pre>

<p>Однако такие куки долго не живут — только до закрытия браузера. Продлить время жизни куки можно с помощью третьего параметра, который принимает время окончания жизни куки.</p>

<pre><code class="language-php">
//Запишем куку на час (в часе 3600 секунд!):
setcookie("test","Тест!", time() + 3600);

//Запишем куку на день (в сутках 3600*24 секунд!):
setcookie("test","Тест!", time() + 3600*24);

//Запишем куку на месяц (в месяце 3600*24*30 секунд!):
setcookie("test","Тест!", time() + 3600*24*30);

//Запишем куку на год (в году 3600*24*30*365 секунд!):
setcookie("test","Тест!", time() + 3600*24*30*365);
</code></pre>

<div class="text-2xl mt-4 mb-2">Вывод данных из cookie</div>

<pre><code class="language-php">
echo $_COOKIE['test'];
</code></pre>

<div class="text-2xl mt-4 mb-2">Удаление cookie</div>

<pre><code class="language-php">
setcookie('test', '', time());
</code></pre>
