<?php

namespace App\Controllers;

use App\View;
use App\Models\Model_About;

class Controller_About extends Controller
{
  public function __construct()
  {
    $this->view = new View();
    $this->model = new Model_About();
  }

  function action_index()
  {
    $data = $this->model->getData();

    $this->view->generate('views/view_about.php', 'layout.php', $data);
  }
}
