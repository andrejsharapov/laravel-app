<?php

class Controller_About extends Controller
{
  public function __construct()
  {
   $this->model = new Model_About();
   $this->view = new View();
  }

  function action_index()
  {
    $data = $this->model->get_data();

    $this->view->generate('about_view.php', 'layout.php', $data);
  }
}
