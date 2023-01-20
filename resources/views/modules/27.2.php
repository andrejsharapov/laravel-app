// 27.2. Защищенная аутентификация пользователя

<div class="text-2xl mt-4 mb-2">Аутентификация пользователя</div>

<p>Аутентификация пользователя — это когда мы убеждаемся, что наш посетитель сайта —  тот, за кого себя выдает. То есть, когда мы запрашиваем у него логин и пароль.</p>

<p><code>Аутентификация</code> — это про то, чтобы узнать пользователя. Но одним узнаванием дело не ограничивается. У разных пользователей в системе могут быть разные права. Если администратор имеет право делать с сайтом практически все, то давать такой же функционал в руки обычного пользователя — явно не самая здоровая идея. Поэтому здесь на помощь нам приходит <code>авторизация</code> — то есть предоставление прав на выполнение тех или иных действий.</p>

<pre><code class="language-sql">
CREATE TABLE users(
   USER_ID INT NOT NULL AUTO_INCREMENT,
   LOGIN VARCHAR(100) NOT NULL,
   PASSWORD VARCHAR(100) NOT NULL,

   PRIMARY KEY (USER_ID)
);
</code></pre>

<pre><code class="language-html">
< form method="post" action="">
< input type="text" name="login" placeholder="Логин">
< input type="password" name="pass">
< input type="submit" value="Войти">
< /form>
</code></pre>

<pre><code class="language-php">
if((isset($_POST["login"]))&& (isset($_POST["pass"])))
{
	$link = mysqli_connect('localhost', 'my_user', 'my_password', 'my_db');
    $result = mysqli_query($link, "SELECT * FROM users WHERE LOGIN='". $_POST["login "]. "'AND PASSWORD='". $_POST["pass"]. "'");

    if(mysqli_num_rows($result) >0)
    {
        // логин и пароль нашли
        $_SESSION["isauth"] = true;
    }
    else
    {
        //Отображаем сообщение, что логин и пароль не найдены
    }

}
</code></pre>

<div class="text-2xl mt-4 mb-2">CSRF-токен</div>

<p>Для генерации токена можно использовать любую хэш-функцию от случайного числа. Можно использовать результат <code>random_int()</code>. Эта функция выдает нам случайное целое число.</p>

<p>Осталось выбрать саму функцию хэширования. При помощи <code>hash_algos()</code> мы можем узнать, какие алгоритмы хэширования установлены в системе, чтобы потом использовать их для генерации токена.</p>

<pre><code class="language-php">
dd(hash_algos());

$token = hash('gost-crypto', random_int(0,999999));
$_SESSION["CSRF"] = $token;
</code></pre>

<pre><code class="language-php">
// index.php
session_start();

if (!isset($_SESSION['token'])) {
    $token = hash('gost-crypto', random_int(0, 999999));
} else {
    $token = $_SESSION['token'];
}
        // application content
        // form
        < input type="hidden" name="token" value="< ? echo $token; ?>">
        // end form
        // end application content

$_SESSION["CSRF"] = $token;

// more https://github.com/andrejsharapov/php-app-27-6/blob/main/forms/auth.php
</code></pre>
