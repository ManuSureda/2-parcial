<?php namespace model;

class RealState extends Product
{
  private $bedrooms;
  private $parkings;

  function __construct($name,$desc,$bedrooms,$parkings,$price,$image,$user,$id = "")
  {
    parent::__construct($name,$desc,$price,$image,$user,$id);
    $this->bedrooms = $bedrooms;
    $this->parkings = $parkings;
  }

  public function getBedrooms()
  {
    return $this->bedrooms;
  }
  public function getParkings()
  {
    return $this->parkings;
  }




}
