<?php

namespace App;

class View
{
 //  $view_content – виды, отображающие контент страниц;
 //  $layout — общий для всех страниц шаблон;
 //  $data — контент содержащий элементы контента страницы. Обычно заполняется в модели.

 function generate($view_content, $layout, $data = null)
 {
  include 'views/' . $layout;
 }
}
