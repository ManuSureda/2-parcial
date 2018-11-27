<?php
namespace dao;

use model\RealState as M_RealState;
use model\user as M_user;
use Dao\userdb as D_user;

/**
 *
 */
class realstateDb extends SingletonDAO implements \interfaces\Idao
{

  private $connection;
  private $daoUser;
  function __construct(){
    $this->daoUser = D_User::getInstance();
  }
  public function add($obj){

    $sql ="INSERT INTO real_states (name,description,bedrooms,parking,price,image,id_user) VALUES (:name, :description,:bedrooms, :parkings, :price,  :image, :id_user)";

    $parameters['name'] = $obj->getName();
    $parameters['description'] =$obj->getDesc();
    $parameters['price'] = $obj->getPrice();
    $parameters['bedrooms'] = $obj->getBedrooms();
    $parameters['parkings'] = $obj->getParkings();
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

    $sql = "SELECT * FROM real_states where name = :name";

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

    $sql = "SELECT * from real_states where id_real_state = :id_real_state";
    $parameters['id_real_state'] = $id;
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

    $sql = "SELECT * FROM real_states";
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
        return new M_RealState($p['name'], $p['description'], $p['bedrooms'],$p['parking'],$p['price'], $p['image'],$user, $p['id_real_state']);
      }, $value);


       return count($resp) >= 1 ? $resp : $arrayResponse[] = $resp['0'];

  }

  public function update($obj){

  }

  public function delete($id){

    $sql = "DELETE from real_states where id_real_state = :id_real_state";
    $parameters['id_real_state'] = $id;

    try{
      $this->connection = Connection::getInstance();
      $response = $this->connection->executeNonQuery($sql, $parameters);
    }catch(Exception $ex){
      throw $ex;
    }



  }


}
