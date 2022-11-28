<?php
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
