<?php

class ControllerAbout extends Controller
{
  public function __construct()
  {
   $this->model = new ModelAbout();
   $this->view = new View();
  }

  function action_index()
  {
    $data = $this->model->get_data();

    $this->view->generate('view_about.php', 'layout.php', $data);
  }
}
