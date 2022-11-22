<?php

namespace App\Models;

class Model_About extends Model
{
  public function getData()
  {
    return [
      'author' => 'Me',
      'description' => 'Description',
      'age' => 'Age',
    ];
  }
}