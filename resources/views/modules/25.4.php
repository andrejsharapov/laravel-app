// 25.4. SQL, знакомство с базами данными

<div class="text-2xl mt-4 mb-2">Типы переменных</div>

<p>В SQL довольно много типов переменных, но чаще всего приходится пользоваться следующими:</p>

<pre><code class="language-md">
- integer — целочисленный.
- text — большое текстовое поле.
- varchar — не очень большое текстовое поле, при этом мы должны задать его размер (он должен быть степенью двойки: 8, 16, 32, 64, 128, 256 и так далее).
- date — поле для хранения даты (дата хранится в SQL-формате: год-месяц-день, пример: 2013-06-24).
</code></pre>

<div class="text-2xl mt-4 mb-2">Как работать с mySQL через PHP</div>

<p>Работа с БД из PHP осуществляется всего лишь с помощью трёх функций:</p>

<pre><code class="language-md">
- `mysqli_connect` — соединение с сервером и базой данных.
- `mysqli_query` — универсальная функция отправки запросов к БД, с помощью нее можно сделать все.
- `mysqli_error` — вывод ошибок.
</code></pre>

<div class="text-2xl mt-4 mb-2">Устанавливаем соединение с БД</div>

<pre><code class="language-php">
- $host = 'localhost'; // имя хоста, на локальном компьютере это localhost
- $user = 'root'; // имя пользователя, по умолчанию это root
- $password = ''; // пароль, по умолчанию пустой
- $db_name = 'test'; // имя базы данных
- $link = mysqli_connect($host, $user, $password, $db_name);
</code></pre>

<pre><code class="language-php">
/**
 * DATABASE
 *
 * @return mysqli
 */
function getDatabase(): mysqli
{
 $db_host = 'localhost';
 $dp_port = '3306';
 $db_database = 'php_app_25_9';
 $db_username = 'root';
 $db_password = '';

 return new mysqli($db_host, $db_username, $db_password, $db_database);
}
</code></pre>

<div class="text-2xl mt-4 mb-2">Посылаем запросы к базе данных</div>

<pre><code class="language-php">
$link = mysqli_connect($host, $user, $password, $db_name);
        mysqli_query($link, "SET NAMES 'utf8'");

$table = 'table_name';
$query = "SELECT * FROM " . $table . " WHERE id > 0";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

var_dump($result);

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

var_dump($data);
</code></pre>

<div class="text-2xl mt-4 mb-2">Отлавливаем ошибки базы данных</div>

<pre><code class="language-php">
mysqli_query($link, $query) or die( mysqli_error($link) );
</code></pre>

<p>На рабочем сайте эти конструкции следует удалять, чтобы пользователи и тем более хакеры не видели ошибок БД.</p>
