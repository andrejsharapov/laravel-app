<?php

namespace App\Controllers;

use App\Controller;
use App\View;
use App\Models\ModelAbout;

class ControllerAbout extends Controller
{
  public function __construct()
  {
   $this->model = new ModelAbout();
   $this->view = new View();
  }

  function action_index()
  {
    $data = $this->model->getData();

    $this->view->generate('view_about.php', 'layout.php', $data);
  }
}
