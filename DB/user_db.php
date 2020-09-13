<?php
  try{
    $pdo=new PDO($dsn,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="CREATE DATABASE $UserID;";
    $pdo->exec($sql);
  }
  catch(PDOException $e){
    echo "Connection Not Established for creating your repository in database";
    throw new PDOException($e->getMessage());
  }
  $pdo=null;
?>
