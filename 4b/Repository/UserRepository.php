<?php
namespace Repository;
/**
 *
 */
use Entity\User;
use PDO;
use PDOException;
/**
 *
 */
interface UserRepository
{
  function insert(User $user);
  function update(User $user,int $id);
  function show();
  // function delete(int $number):bool;
}

class UserRepositoryImpl implements UserRepository
{
  public array $user = array();
  private PDO $connection;
  public function __construct(PDO $connection)
  {
    $this->connection = $connection;
  }

  public function insert(User $user)
  {
    $sql = "INSERT into user_tb (name,photo) values (:name,:photo)";
    $inputName = $user->getName();
    $inputPhoto = $user->getPhoto();
    $statement = $this->connection->prepare($sql);
    $statement->bindParam('name',$inputName);
    $statement->bindParam('photo',$inputPhoto);
    $statement->execute();
    return $statement->rowCount();
  }

  public function show(){
    $sql = "Select * from user_tb";
    $statement = $this->connection->prepare($sql);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  public function update(User $user,int $id){
    $sql = "SELECT id FROM user_id WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$id]);
    $sqlupdate = "UPDATE user_id set name=:name,photo=:photo
    where id=:id";
    $updatename = $user->getName();
    $updatephoto = $user->getPhoto();
    if($statement->fetch()){
      $data = $this->connection->prepare($sqlupdate);
      $data->bindParam('name',$updatename);
      $data->bindParam('photo',$updatephoto);
      $data->execute();
      return $data->rowCount();
    }
  }
  function delete(int $number): bool
  {

              $sql = "SELECT id FROM user_tb WHERE id = ?";
              $statement = $this->connection->prepare($sql);
              $statement->execute([$number]);

              if ($statement->fetch()) {
                  // todolist ada
                  $sql = "DELETE FROM user_id WHERE id = ?";
                  $statement = $this->connection->prepare($sql);
                  $statement->execute([$number]);
                  return true;
              } else {
                  // todolist tidak ada
                  return false;
              }
          }
}

 ?>
