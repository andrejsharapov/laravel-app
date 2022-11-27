<?php

$users = require 'users.php';

/**
 * возвращает массив всех пользователей и
 * хэш их паролей
 *
 * @return Array
 *
 */
function getUsersList(): array
{
  $users = $GLOBALS['users'];
  $new_arr = [];

  foreach ($users as $k => $v) {
    // $new_pass = sha1($new_arr['password']); // broken
    $new_pass = openssl_digest($v['password'], "sha512", false);
    $new_arr[$k] = $new_pass;
  }

  return $new_arr;
}

/**
 * проверяет, существует ли в базе пользователь с указанным логином
 *
 * @param string $login
 * @return bool
 */
function existsUser(string $login): bool
{
  $new_arr = getUsersList();
  $key = array_key_exists($login, $new_arr);

  if (!$key) {
    echo 'Пользователь не найден';
  } else {
    return true;
  }

  return false;
}

/**
 * возвращает true если:
 * пользователь с указанным логином существует и
 * введенный им пароль прошел проверку,
 * иначе — false
 *
 * @param string $login
 * @param string $password
 * @return bool
 */
function checkPassword(string $login, string $password): ?bool
{
  $users = $GLOBALS['users'];

  foreach ($users as $k => $v) {
    // проверка, совпадает ли логин
    if ($k === $login) {
      $pass = $v['password'];

      // проверка, совпадает ли пароль
      if ($password === $pass) {
        setcookie('login', $login, 0, '/');
        setcookie('password', openssl_digest($pass, "sha512", false), 0, '/');

        return true;
      } else {
        echo 'Неправильное имя пользователя или пароль';
        return false;
      }
    } else {
      // если возникла ошибка
      return existsUser($login);
    }
  }
}

/**
 * при попытке авторизации
 * возвращает либо имя вошедшего на сайт пользователя,
 * либо null
 *
 * @return void
 */
function getCurrentUser()
{
  $username = $_POST['login'] ?? null;
  $password = $_POST['password'] ?? null;

  if (null !== $username || null !== $password) {
    if (checkPassword($username, $password)) {

      session_start();

      $users = $GLOBALS['users'];

      if (array_key_exists($username, $users)) {
        $user_id = $users[$username]['id'];
      }

      $_SESSION['auth'] = true;
      $_SESSION['id'] = $user_id ?? 'Id not found';
      $_SESSION['login'] = $username;
    }

    $auth = $_SESSION['auth'] ?? null;

    // если успешная авторизация
    if ($auth) {
      // возвращает имя вошедшего на сайт пользователя
      echo $_SESSION['login'];

      $new_url = 'index.php';
    } else {
      // иначе
      // header("location: " . $_SERVER["HTTP_REFERER"]);
      $new_url = 'login.php';
    }

    header("location: $new_url");
  }
}

getCurrentUser();
