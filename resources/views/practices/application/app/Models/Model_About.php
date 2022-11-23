<?php

namespace App\Models;

class Model_About extends Model
{
  public function getData(): array
  {
    return [
      'author' => 'Andrej Sharapov',
      'position' => 'I\'m Web Designer, Frontend Developer',
      'study' => 'i study PHP and Backend',
    ];
  }
}
