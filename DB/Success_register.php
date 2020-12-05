<?php
  require_once 'conn.php';
  if(isset($_POST['submit'])){
    $UserID = $_POST['UserID'];
    $Name = $_POST['Name'];
    $MobNo = $_POST['MobNo'];
    $EMail = $_POST['EMail'];
    $Password = $_POST['Password'];

    $isSuccess=$crud->insert($UserID,$Name,$MobNo,$EMail,$Password);
  }
  if($isSuccess){
    echo "Successfully created your database";
    require_once "./user_db_creation.php";
  }
 ?>
