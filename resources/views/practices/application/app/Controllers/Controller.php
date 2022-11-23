<?php

namespace App\Controllers;

use App\View;

class Controller
{
  public $model;
  public View $view;

  function __construct()
  {
    $this->view = new View();
  }
}
