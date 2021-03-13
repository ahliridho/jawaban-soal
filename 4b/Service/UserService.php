<?php
namespace Service;
use Entity\User;
use config\Database;
use Repository\UserRepository;
/**
 *
 */
interface UserService
{
  function adduser(User $user);
  // function removeuser(User $user);
  function updateuser(User $user,$id);
  function showuser();
}
/**
 *
 */
class UserServiceImpl implements UserService
{
  private UserRepository $userrepository;
  function __construct(UserRepository $userrepository)
  {
    $this->userrepository = $userrepository;
  }
  public function adduser(User $user){
    return $this->userrepository->insert($user);
  }

  public function updateuser(User $user,$id){
    return $this->userrepository->update($user,$id);
  }

  public function showuser(){
    return $this->userrepository->show();
  }

}

 ?>
