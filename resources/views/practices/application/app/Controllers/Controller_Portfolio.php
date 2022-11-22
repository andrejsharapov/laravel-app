<?php

namespace App\Controllers;

use App\Models\Model_Portfolio;

class Controller_Portfolio extends Controller
{
  function action_portfolio()
  {
    $this->view->generate('views/portfolio.php', 'layout.php', 'getData');
  }
}
