<?php

class Model_About extends Model
{
  /**
   * @return array
   */
  public function get_data(): array
  {
    return [
      'author' => 'Andrej Sharapov',
      'position' => 'I\'m Web Designer, Frontend Developer',
      'study' => 'i study PHP and Backend',
    ];
  }
}
