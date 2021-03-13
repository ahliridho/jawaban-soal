<<?php
/**
 *
 */
class Database
{
  static function getKoneksi()
  {
    $host = 'localhost';
    $port ='3306';
    $user = 'root';
    $pass = '';
    $database = "programer";
    return new PDO("mysql:host=".$host.";dbname=".$database,$user,$pass);
  }

}

 ?>
