<?php

namespace App;

class Route
{
 public static function start()
 {
  // контроллер и действие по умолчанию
  $controller_name = 'Main';
  $action_name = 'index';
  $routes = $_GET;

  if (count($_GET)) {
   $routes = $_GET['url'];
  }

  // получаем имя контроллера
  if (!empty($routes)) {
   $controller_name = $routes;
  }

  $controller_name = ucfirst($controller_name);

  // добавляем префиксы
  $model_name = 'Model' . $controller_name;
  $controller_name = 'Controller' . $controller_name;
  $action_name = 'action_' . $action_name;

  // подцепляем файл с классом модели (файла модели может и не быть)
  $model_file = $model_name . '.php';
  $model_path = "app/Models/" . $model_file;

  if (file_exists($model_path)) {
   include "app/Models/" . $model_file;
  }
  // подцепляем файл с классом контроллера
  $controller_file = $controller_name . '.php';
  $controller_path = "app/Controllers/" . $controller_file;

  if (file_exists($controller_path)) {
   include "app/Controllers/" . $controller_file;
  } else {
   (new Route)->ErrorPage404();
  }

  $full_class_name = sprintf('App\Controllers\%s', $controller_name);

  // создаем контроллер
  $controller = new $full_class_name;
  $action = $action_name;

  if (method_exists($controller, $action)) {
   // вызываем действие контроллера
   $controller->$action();
  } else {
   (new Route)->ErrorPage404();
  }
 }

 function ErrorPage404()
 {
  $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';

  header('HTTP/1.1 404 Not Found');
  header("Status: 404 Not Found");
  header('Location:' . $host . '404');
 }
}
