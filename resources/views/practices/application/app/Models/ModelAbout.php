<?php

namespace App\Models;

use App\Model;

class ModelAbout extends Model
{
  /**
   * @return array
   */
  public function getData(): array
  {
    return [
      'author' => 'Andrej Sharapov',
      'position' => 'I\'m Web Designer, Frontend Developer',
      'study' => 'i study PHP and Backend',
    ];
  }
}
