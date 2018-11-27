<?php
namespace controller;

use Model\vehicle as M_Vehicle;
use Dao\vehicledb as D_Vehicle;

use Model\user as M_user;
use Dao\userdb as D_user;

use Controller\ControllerShop as Shop;

 class ControllerVehicle
 {
   private $daoVehicle;
   private $shop;

   function __construct()
   {
    $this->daoVehicle = D_Vehicle::getInstance();
    $this->shop = new Shop();
   }

   public function index()
   {
     include(ROOT."views/add-new-vehicle.php");
   }

   public function addVehicle($name,$desc,$year,$price,$image)
   {
     if(isset($_SESSION["user"]))
     {
       $user = $_SESSION["user"];
       $objVehicle = new M_Vehicle($name,$desc,$price,$year,$image,$user);
       $this->daoVehicle->add($objVehicle);
       $this->shop->index();
     }
   }
 }



 ?>
