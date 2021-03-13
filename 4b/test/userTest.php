<?php
require_once __DIR__."/../Entity/User.php";
require_once __DIR__."/../Entity/UserBuilder.php";
require_once __DIR__."/../Repository/UserRepository.php";
require_once __DIR__."/../Service/UserService.php";
require_once __DIR__."/../Database.php";
use Entity\UserBuilder;
use Entity\User;
use Service\UserServiceImpl;
use Repository\UserRepositoryImpl;


$nama = $_POST['name'];
// $photo = $_POST['photo'];
$user = (new UserBuilder)
->setName($nama)
// ->setPhoto($photo)
->build();
function adduser(User $user){
$koneksi = Database::getKoneksi();
$userrepository = new UserRepositoryImpl($koneksi);
$userservice = new UserServiceImpl($userrepository);
return $userservice->adduser($user);
}
if(adduser($user)){
  header('Location: ../ridhoe.php');
}else{
  echo"gagal input";
}
// function showuser()
// {
//   $koneksi = Database::getKoneksi();
//   $userrepository = new UserRepositoryImpl($koneksi);
//   $userservice = new UserServiceImpl($userrepository);
//   return $userservice->showuser();
// }

 ?>
