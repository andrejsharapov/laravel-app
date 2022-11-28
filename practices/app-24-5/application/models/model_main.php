<?php

class Model_Main extends Model
{
  public $page = 'I\'m main page';
  public $description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis cum cumque cupiditate eos, est placeat porro. Architecto deserunt dicta dolores doloribus dolorum, id in laborum odio sapiente, veniam veritatis voluptate!';
  public $created_at = '23.11.2022';

  /**
   * @return array
   */
  public function get_data(): array
  {
    return [
      'title' => $this->page,
      'description' => $this->description,
      'created_at' => $this->created_at,
      'image' => '/public/src/autumn.jpg',
    ];
  }
}
