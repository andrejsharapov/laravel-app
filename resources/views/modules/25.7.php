// 25.7. Работа с файлами

<div class="text-2xl mt-4 mb-2">Подключение файлов</div>

<p></p>

<div class="text-2xl mt-4 mb-2">include</div>

<p>Для подключения файла с кодом, используем выражение include. Если подключаемый файл находится в той же директории, то записываем только имя подключаемого файла.</p>

<pre><code class="language-php">
include 'config/lib.php';
</code></pre>

<div class="text-2xl mt-4 mb-2">require</div>

<p>Отличие от include в том, что если будет указано неверное наименование файла или переменной, произойдет не только вывод ошибки, но и возврат FATAL_ERROR, программа прекратит работу. </p>

<div class="text-2xl mt-4 mb-2">require_once</div>

<p>Выражение require_once используется если необходимо подключить файл только один раз. Оно аналогично require за исключением того, что PHP проверит, включался ли уже данный файл, и если да, не будет включать его еще раз. </p>

<p>Если необходимо подключить файл только один раз, используется выражение require_once. Выражение require_once аналогично require за исключением того, что PHP проверит, включался ли уже данный файл, и если да, не будет включать его еще раз. Например, в файле code.php вы создали функцию, и вызвали ее в index.php (test(); ), а в index.php несколько раз подключили code.php: include 'code.php';</p>

<pre><code class="language-php">
include 'code.php';
include 'code.php';
</code></pre>

<p>Появится ошибка, потому что помимо подключения файла, происходит и подключение функции, и снова подключение той же функции, происходит передекларирование функции. В случае с require_once произойдет проверка, подключался ли этот файл. Если он уже один раз подключался, то никакого дополнительного подключения не будет. Соответственно, и ошибки не возникнет.</p>

<div class="text-2xl mt-4 mb-2">include_once</div>

<p> include_once — может использоваться в тех случаях, когда один и тот же файл может быть включен и выполнен более одного раза во время выполнения скрипта, в данном случае это поможет избежать проблем с переопределением функций, переменных и так далее.</p>

<div class="text-2xl mt-4 mb-2">Запись в файл</div>

<pre><code class="language-php">
$comment_data = [
  'user' => $_POST['comment-user] ?? null,
  'date' => $_POST['comment-date] ?? null,
  'comment' => $_POST['send-comment] ?? null,
];

$file = file_put_contents(COMMENT_DIR . 'comments.txt', $comment_data . ";", FILE_APPEND);
</code></pre>

<div class="text-2xl mt-4 mb-2">Чтение файла</div>

<pre><code class="language-php">
file_put_contents();

$file = file_get_contents(COMMENT_DIR . 'comments.txt');
$file = preg_replace("/(;{2,}\s?)/", ";", $file);
</code></pre>

<div class="text-2xl mt-4 mb-2">Файл в виде строки</div>

<p>Функция <code>file_exists();</code> возвращает true или false и проверяет существование указанного файла в каталоге.</p>

<div class="text-2xl mt-4 mb-2">Копирование файла</div>

<p>Чтобы копировать файл из одной директории в другую, используется функция <code>copy();</code>.</p>

<pre><code class="language-php">
copy('copy_from.txt', 'copy_to.php');
</code></pre>

<div class="text-2xl mt-4 mb-2">Удаление файла</div>

<pre><code class="language-php">
$file = 'test1.php';

if (file_exists($file)) {
    unlink($file);
}
</code></pre>

<div class="text-2xl mt-4 mb-2">Массив файлов</div>

<p>Чтобы увидеть список (массив файлов), можно применить функцию <code>scandir();</code>.</p>

<pre><code class="language-php">
var_dump(scandir(__DIR__));
var_dump(scandir(dirname(__DIR__, 1)));
</code></pre>

<div class="text-2xl mt-4 mb-2">Загрузка файлов на сервер</div>

<pre><code class="language-php">
if (!empty($_FILES)) {
    if (!empty($_FILES['file'])) {
        $file = $_FILES['file'];
        $name = $file['name'] ?? null;
        $size = $file['size'] ?? null;
        $type = $file['type'] ?? null;
        $tmp = $file['tmp_name'] ?? null;
        $path = '/' . UPLOAD_DIR . $name;
        $errors = [];

        if (!move_uploaded_file($tmp, __DIR__ . $path)) {
            $errors[] = 'Файл не был загружен на сервер. Причина:';
        }

        if ($size > UPLOAD_MAX_SIZE) {
            $errors[] = 'Недопустимый размер файла ' . $name;
        }

        if (!in_array($type, ALLOWED_TYPES)) {
            $errors[] = 'Недопустимый формат файла ' . $name;
        }

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $db_link = getDatabase() or die(mysqli_error($db_link));

        mysqli_query($db_link, "SET NAMES 'utf8'");

        // set database table
        $db_table = 'images';

        // set query from database
        $query = "INSERT INTO " . $db_table . " (path) values ('$path')";
        $result = mysqli_query($db_link, $query) or die(mysqli_error($db_link));
        $q_rows = mysqli_query($db_link, "SELECT count(*) FROM " . $db_table);
        $row_cnt = mysqli_num_rows($q_rows);
    }
}
// html form https://github.com/andrejsharapov/php-app-25-9/blob/main/pages/profile.php#L55

// Get database info
$db_link = getDatabase() or die(mysqli_error($db_link));
$db_table = 'images';
$query = mysqli_query($db_link, "select * from $db_table");

// Show list images
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_array($query)) {
    < img class="w-48 rounded-md" src="< ?php echo $row['path']; ?>">
    }
}
</code></pre>
