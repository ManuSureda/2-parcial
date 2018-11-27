<?php namespace model;

class Vehicle extends Product
{
  private $year;

  function __construct($name,$desc,$price,$year,$image,$user,$id = "")
  {
    parent::__construct($name,$desc,$price,$image,$user,$id);
    $this->year = $year;
  }

  public function getYear()
  {
    return $this->year;
  }




}
