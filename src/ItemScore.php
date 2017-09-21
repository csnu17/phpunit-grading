<?php namespace Grading;

class ItemScore {

  private $data;

  private $supportedFields = array('score', 'fullscore', 'weight');

  public function __get($name) {
    if (array_key_exists($name, $this->data)):
      return $this->data[$name];
    endif;
  }

  public function __set($name, $value) {
    if (in_array($name, $supportedFields):
      $this->data[$name] = $value;
    endif;
  }
}
