<?php

namespace App\Controllers;

use App\Controller;
use App\View;
use App\Models\ModelPortfolio;

class ControllerPortfolio extends Controller
{
  public function __construct()
  {
   $this->model = new ModelPortfolio();
   $this->view = new View();
  }

  function action_index()
  {
    $data = $this->model->getData();

    $this->view->generate('view_portfolio.php', 'layout.php', $data);
  }
}
