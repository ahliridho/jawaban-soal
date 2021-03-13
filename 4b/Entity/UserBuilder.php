<?php
namespace Entity;
class UserBuilder
{
  private string $name ="";
  private string $photo ="";
  public function setName($name){
    $this->name = $name;
    return $this;
  }
  public function setPhoto($photo){
    $this->photo = $photo;
    return $this;
  }
  public function build():User{
    return new User(
      $this->name,
      $this->photo
    );
  }
}

 ?>
