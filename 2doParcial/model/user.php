<?php namespace model;

/**
 *
 */
class User
{
  private $id;
  private $name;
  private $mail;
  private $pass;

  function __construct($mail,$pass,$name,$id = "")
  {
    $this->mail = $mail;
    $this->pass = $pass;
    $this->name = $name;
    $this->id = $id;
  }
  function getId()
  {
    return $this->id;
  }
  function getName()
  {
    return $this->name;
  }
  function getMail()
  {
    return $this->mail;
  }
  function getPass()
  {
    return $this->pass;
  }
}



 ?>
