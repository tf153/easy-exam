<?php
  //Remote database connection
  $host = "freedb.tech";
  $db = "freedb_dabase";
  $user = "freedb_tf153";
  $pass = "bepositive";
  $charset = 'utf8mb4';

  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

  try{
    $pdo=new PDO($dsn,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e){
    echo "Connection Not Established";
    //throw new PDOException($e->getMessage());
  }
  require_once './crud.php';
  $crud = new crud($pdo);
 ?>
