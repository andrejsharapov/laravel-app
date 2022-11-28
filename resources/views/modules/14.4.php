<!--14.4. HTML-формы. Обработка GET- и POST-параметров -->

<div class="mt-4 mb-2 text-xl">Суперглобальные переменные</div>

<ul class="p-4 bg-amber-100 bg-opacity-25">
  <li><code>$GLOBALS</code> —</li>
  <li><code>$_SERVER</code> —</li>
  <li><code>$_GET</code> — ассоциативный массив с переменными HTTP GET-запроса</li>
  <li><code>$_POST</code> — ассоциативный массив данных, переданных скрипту через HTTP методом POST</li>
  <li><code>$_FILES</code> — суперглобальный массив для обработки файлов</li>
  <li><code>$_COOKIE</code> — обработка куки</li>
  <li><code>$_SESSION</code> — запись и чтение информации при использовании сессий</li>
  <li><code>$_REQUEST</code> — содержит данные переменных $_GET, $_POST и $_COOKIE</li>
  <li><code>$_ENV</code> —</li>
  <li></li>
</ul>

<p>
  <a href="#" class="underline">Auth form</a>
</p>

<pre><code class="language-php">
// var_dump($_POST);

// зададим книгу паролей
$users = [
	'andrejsharapov' => ['id' => '1', 'password' => '12345'],
];

$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

echo sha1("password");

if (null !== $username || null !== $password) {
	// Если пароль из базы совпадает с паролем из формы
	if ($password === $users['andrejsharapov']['password']) {

		// Стартуем сессию:
		session_start();

		// Пишем в сессию информацию о том, что мы авторизовались:
		$_SESSION['auth'] = true;

		// Пишем в сессию логин и id пользователя
		$_SESSION['id'] = $users['andrejsharapov']['id'];
		$_SESSION['login'] = $username;
	}

	$auth = $_SESSION['auth'] ?? null;

	// если успешная авторизация
	if ($auth) {
		echo 'Авторизация прошла успешно!' . PHP_EOL;
		echo 'Здравствуйте, ' . $_SESSION['login'] . '.';
	} else if (!$auth) {
		// иначе
		header("Location: " . $_SERVER["HTTP_REFERER"]);
		echo 'Данные введены не верно. Попробуйте снова.';
	}
}

</code></pre>
