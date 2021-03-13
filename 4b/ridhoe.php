<!DOCTYPE html>
<?php
require_once __DIR__."/Entity/User.php";
require_once __DIR__."/Entity/UserBuilder.php";
require_once __DIR__."/Repository/UserRepository.php";
require_once __DIR__."/Service/UserService.php";
require_once __DIR__."/Database.php";
use Entity\UserBuilder;
use Entity\User;
use Service\UserServiceImpl;
use Repository\UserRepositoryImpl;
function showuser()
{
  $koneksi = Database::getKoneksi();
  $userrepository = new UserRepositoryImpl($koneksi);
  $userservice = new UserServiceImpl($userrepository);
  return $userservice->showuser();
}
$data = showuser();
// var_dump($data);
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <form action="test/userTest.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Input Name</label>
          <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Upload Foto</label>
          <input type="file" class="form-control">
        </div>
        <div class="form-group form-check">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <!-- Tabel -->
      <br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">NAMA</th>
            <th scope="col">Photo</th>
            <!-- <th scope="col">SKILL</th> -->
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $key => $value): ?>

          <tr>
            <th scope="row"><?=$value['name']?></th>
            <td><?=$value['photo']?></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
      <!-- Akhir Tabel -->
    </div>
</body>
</html>
