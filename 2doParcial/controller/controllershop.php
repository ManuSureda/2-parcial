<?php
namespace controller;

use Model\vehicle as M_Vehicle;
use Dao\vehicledb as D_Vehicle;


use Model\realstate as M_RealState;
use Dao\realstatedb as D_RealState;

use Model\user as M_user;
use Dao\userdb as D_user;


 class ControllerShop
 {
   private $daoVehicle;
   function __construct()
   {
  $this->daoVehicle = D_Vehicle::getInstance();
   $this->daoRealState = D_RealState::getInstance();
   }

   public function index()
   {
     $vehicles = $this->daoVehicle->getAll();
     $realstates = $this->daoRealState->getAll();
     include(ROOT."views/shop.php");
   }
 }



 ?>
