<?php

namespace App\Controllers;

use App\View;
use App\Models\Model_Main;

class Controller_Main extends Controller
{
  public function __construct()
  {
    $this->view = new View();
    $this->model = new Model_Main();
  }

  function action_index()
  {
    $data = $this->model->getData();

    $this->view->generate('views/view_main.php', 'layout.php', $data);
  }
}
