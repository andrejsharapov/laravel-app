<?php

namespace App\Controllers;

class Controller_Main extends Controller
{
  /**
   * @return string[]
   */
  public function appLinks(): array
  {
    return [
      ['name' => 'main', 'path' => '?url=main'],
      ['name' => 'about', 'path' => '?url=about'],
      ['name' => 'portfolio', 'path' => '?url=portfolio'],
    ];
  }

  /**
   * @return void
   */
  function action_index()
  {
    $links = $this->appLinks();

    echo '<ul class="list-none grid grid-cols-3 gap-4 p-6">';
    foreach ($links as $name => $link) {

      $l_name = $link['name'];
      $l_path = $link['path'];

      echo "<li><a class='bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded' href='$l_path' title='$l_name'>$l_name</a></li>";
    }
    echo '</ul>';

    $this->view->generate('views/main.php', 'layout.php');
  }
}
