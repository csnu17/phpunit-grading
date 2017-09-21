<?php namespace Grading;

class Student {

  private $data = array();


  public __get($varname) {
    if ( array_key_exists($varname, $this->data)):
      return $this->data[$varname];
    endif;
  }

  public __set($name, $value) {
    $this->data[$varname] = $value;
  }

}
