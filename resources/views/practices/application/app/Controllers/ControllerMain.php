<?php

namespace App\Controllers;

use App\Controller;
use App\View;
use App\Models\ModelMain;

class ControllerMain extends Controller
{
  public function __construct()
  {
   $this->model = new ModelMain();
   $this->view = new View();
  }

  function action_index()
  {
    $data = $this->model->getData();

    $this->view->generate('view_main.php', 'layout.php', $data);
  }
}
