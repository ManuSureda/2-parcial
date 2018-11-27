<?php
namespace controller;

use Model\User as M_User;
use DAO\UserDB as D_User;

class ControllerSignUp{
  private $daoUser;


  public function __construct()
  {

    $this->daoUser = D_User::getInstance();


  }
  public function index()
  {
    include(ROOT."views/signup.php");
  }

  public function addUser($mail, $name, $pass)
  {
    $objUser = new M_User($mail, $pass, $name);
    $this->daoUser->add($objUser);
    include(ROOT."views/login.php");
  }
}



 ?>
