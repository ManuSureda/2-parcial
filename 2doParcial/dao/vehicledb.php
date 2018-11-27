<?php
namespace dao;

use Model\vehicle as M_Vehicle;
use Model\user as M_user;
use Dao\userdb as D_user;

/**
 *
 */
class vehicleDb extends SingletonDAO implements \interfaces\Idao
{

  private $connection;
  private $daoUser;
  function __construct(){
    $this->daoUser = D_User::getInstance();
  }
  public function add($obj){

    $sql ="INSERT INTO vehicles (name,description,price,year,image,id_user) VALUES (:name, :description, :price, :year, :image, :id_user)";

    $parameters['name'] = $obj->getName();
    $parameters['description'] =$obj->getDesc();
    $parameters['price'] = $obj->getPrice();
    $parameters['year'] = $obj->getYear();
    $parameters['image'] = $obj->getImage();
    $parameters['id_user'] = $obj->getUser()->getId();

    try{
      $this->connection = Connection::getInstance();

      return $this->connection->executeNonQuery($sql, $parameters);
    }catch(\PDOException $ex){
      throw $ex;

    }

  }

  public function retrieveByName($name){

    $sql = "SELECT * FROM vehicles where name = :name";

               $parameters['name'] = $name;

               try {
                    $this->connection = Connection::getInstance();
                    $response = $this->connection->execute($sql, $parameters);
               } catch(Exception $ex) {
                   throw $ex;
               }


               if(!empty($response)){

                 $result = $this->map($response);
                 return array_shift($result);

               }

               else
                    return null;

  }


  public function retrieveById($id){

    $sql = "SELECT * from vehicles where id_vehicle = :id_vehicles";
    $parameters['id_vehicle'] = $id;
    try{
       $this->connection = Connection::getInstance();
       $response = $this->connection->execute($sql, $parameters);

    }catch(Exception $ex){
      throw $ex;

    }

    if(!empty($response)){

       $result = $this->map($response);
       return array_shift($result);
    }


     else
          return null;



  }


  public function getAll(){

    $sql = "SELECT * FROM vehicles";
    try{
      $this->connection = Connection::getInstance();
      $response = $this->connection->execute($sql);

    }catch(Exception $ex){
      throw $ex;
    }

    if(!empty($response))
      return $this->map($response);
    else
      return null;

  }
  protected function map($value) {

      $value = is_array($value) ? $value : [];

      $resp = array_map(function($p){
        $user = $this->daoUser->retrieveById($p['id_user']);
        return new M_Vehicle($p['name'], $p['description'], $p['price'], $p['year'], $p['image'],$user, $p['id_vehicle']);
      }, $value);


       return count($resp) >= 1 ? $resp : $arrayResponse[] = $resp['0'];

  }

  public function update($obj){

  }

  public function delete($id){

    $sql = "DELETE from vehicles where id_vehicle = :id_vehicle";
    $parameters['id_vehicle'] = $id;

    try{
      $this->connection = Connection::getInstance();
      $response = $this->connection->executeNonQuery($sql, $parameters);
    }catch(Exception $ex){
      throw $ex;
    }



  }


}
