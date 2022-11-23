<?php

namespace App\Controllers;

use App\View;
use App\Models\Model_Portfolio;

class Controller_Portfolio extends Controller
{
  public function __construct()
  {
    $this->view = new View();
    $this->model = new Model_Portfolio();
  }

  function action_index()
  {
    $data = $this->model->getData();

    $this->view->generate('views/view_portfolio.php', 'layout.php', $data);
  }
}
