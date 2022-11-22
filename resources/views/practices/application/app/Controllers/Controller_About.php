<?php

namespace App\Controllers;

use App\Models\Model_About;

class Controller_About extends Controller
{
  function action_about()
  {
    $this->view->generate('views/about.php', 'layout.php');
  }
}
