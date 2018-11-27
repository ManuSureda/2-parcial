<?php
namespace dao;

use Model\user as M_user;

/**
 *
 */
class userDb extends SingletonDAO implements \interfaces\Idao
{

  private $connection;
  function __construct(){

  }
  public function add($obj){

    $sql ="INSERT INTO users (mail, pass, name) VALUES (:mail, :pass, :name)";

    $parameters['mail'] = $obj->getMail();
    $parameters['pass'] =$obj->getPass();
    $parameters['name'] = $obj->getName();

    try{
      $this->connection = Connection::getInstance();

      return $this->connection->executeNonQuery($sql, $parameters);
    }catch(\PDOException $ex){
      throw $ex;

    }

  }

  public function retrieveByName($name){

    $sql = "SELECT * FROM users where mail = :mail";

               $parameters['mail'] = $name;

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

    $sql = "SELECT * from users where id_user = :id_user";
    $parameters['id_user'] = $id;
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

    $sql = "SELECT * FROM users ORDER BY name";
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
        return new M_user($p['mail'], $p['pass'], $p['name'], $p['id_user']);}, $value);


       return count($resp) >= 1 ? $resp : $arrayResponse[] = $resp['0'];

  }

  public function update($obj){

  }

  public function delete($id){

  }


}


 ?>
