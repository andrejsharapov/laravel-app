<?php

namespace App;

class View
{
//  $view_content – виды, отображающие контент страниц;
//  $layout — общий для всех страниц шаблон;
//  $data — массив, содержащий элементы контента страницы. Обычно заполняется в модели.

  function generate($view_content, $layout, $data = null)
  {
    include __DIR__ . '/../views/' . $layout;
  }
}