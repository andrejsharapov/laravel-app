<?php

class View
{
 //  $content_view – виды, отображающие контент страниц;
 //  $layout — общий для всех страниц шаблон;
 //  $data — массив, содержащий элементы контента страницы. Обычно заполняется в модели.

 function generate($content_view, $layout, $data = null)
 {
  include 'application/views/' . $layout;
 }
}
