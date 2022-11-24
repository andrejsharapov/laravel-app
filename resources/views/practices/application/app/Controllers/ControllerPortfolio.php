<?php

class ControllerPortfolio extends Controller
{
  public function __construct()
  {
   $this->model = new ModelPortfolio();
   $this->view = new View();
  }

  function action_index()
  {
    $data = $this->model->get_data();

    $this->view->generate('view_portfolio.php', 'layout.php', $data);
  }
}
