<?php

namespace App\Models;

class Model_Portfolio extends Model
{
  public function getData()
  {
    return array(
      array(
        'Year' => '2012',
        'Site' => '#',
        'Description' => 'desc 1'
      ),
      array(
        'Year' => '2012',
        'Site' => '#',
        'Description' => 'desc 2'
      ),
    );
  }
}