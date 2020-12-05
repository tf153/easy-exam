<?php
  require_once 'conn.php';
  if(isset($_POST['submit'])){
    $UserID=$_POST['UserID'];
    $Password=$_POST['Password'];
    try{
      $data=$crud->read($UserID,$Password);
      if($data){
        session_id($data['UserID']);
        session_start();
        $_SESSION['data']=$data;
        header("Location: ../users/dashboard.php");
      }
      else{
        echo "Usename and Password are not correct";
        exit();
      }
    }
    catch(PDOException $e){
      echo $e->getMessage();
    }
  }
  else{
    echo "Some Error";
  }
?>
