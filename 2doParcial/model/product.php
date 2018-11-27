<?php namespace model;

class Product
{
  private $id;
  private $name;
  private $desc;
  private $price;
  private $image;
  private $user;

  function __construct($name,$desc,$price,$image,$user,$id = "")
  {
    $this->name = $name;
    $this->desc = $desc;
    $this->price = $price;
    $this->image = $image;
    $this->user = $user;
    $this->id = $id;
  }

  public function getID()
  {
    return $this->id;
  }
  public function getName()
  {
    return $this->name;
  }
  public function getDesc()
  {
    return $this->desc;
  }
  public function getPrice()
  {
    return $this->price;
  }
  public function getUser()
  {
    return $this->user;
  }

  public function getImage()
  {
    return $this->image;
  }


}




 ?>
