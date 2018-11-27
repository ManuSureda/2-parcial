<?php
namespace controller;

use model\RealState as M_realstate;
use Dao\RealStateDb as D_realstate;

use Model\user as M_user;
use Dao\userdb as D_user;

use Controller\ControllerShop as Shop;


 class Controllerrealstate
 {
   private $daoRealState;
   private $shop;

   function __construct()
   {
    $this->daoRealState = D_realstate::getInstance();
    $this->shop = new Shop();
   }

   public function index()
   {
     include(ROOT."views/add-new-real-estate.php");
   }

   public function addRealState($name,$desc,$bedrooms,$parking,$price,$image)
   {
     if(isset($_SESSION["user"]))
     {
       $user = $_SESSION["user"];
       if($parking == 1)
       {
         $pk = true;
       }
       else if($parking == 0)
       {
          $pk = false;
       }

       $objrealstate = new M_realstate($name,$desc,$bedrooms,$pk,$price,$image,$user);
       $this->daoRealState->add($objrealstate);
       $this->shop->index();
     }
   }
 }




 ?>
