<?php
namespace Entity;
class User{
  private string $name;
  private string $photo;
  public function __construct(
    string $name = "",
    string $photo =""
    )
  {
    $this->name = $name;
    $this->photo = $photo;
  }

  public function setName(string $name):void
  {
    $this->name = $name;
  }
  public function setPhoto(string $photo):void
  {
    $this->photo = $photo;
  }

  public function getName()
  {
    return $this->name;
  }


    public function getPhoto()
    {
      return $this->photo;
    }
}
 ?>
