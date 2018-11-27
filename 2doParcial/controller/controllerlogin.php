<?php namespace controller;

use Model\User as M_User;
use DAO\UserDB as D_User;
use Controller\ControllerShop as Shop;

class ControllerLogin
{
  private $daoUser;
  private $shop;

  function __construct()
  {
    $this->daoUser = D_User::getInstance();
    $this->shop = new Shop();
  }

  public function index()
  {
    if($this->isLogged()){
      $this->shop->index();
      }
    else{
      include(ROOT."views/login.php");
    }
  }

  public function login($u,$p)
  {
    $user = $this->daoUser->retrieveByName($u);
    if(isset($user))
    {
      if($user->getPass() == $p)
      {
        $_SESSION["user"] = $user;
      }
    }
    $this->index();

  }

  public function isLogged()
  {
    if(isset($_SESSION["user"])){
        return true;
    }
    else {
      return false;
    }
  }

}
 ?>
