<?php

class ControllerMain extends Controller
{
  public function __construct()
  {
   $this->model = new ModelMain();
   $this->view = new View();
  }

  function action_index()
  {
    $data = $this->model->get_data();

    $this->view->generate('view_main.php', 'layout.php', $data);
  }
}
