<?php
  require_once 'conn.php';
  if(isset($_POST['submit'])){
    $UserID=$_POST['UserID'];
    $Password=$_POST['Password'];
    try{
      $data=$crud->read($UserID,$Password);
      session_id($data['UserID']);
      session_start();
      $_SESSION['data']=$data;
      header("Location: ../users/dashboard.php");
    }
    catch(PDOException $e){
      echo $e->getMessage();
    }
  }
  else{
    echo "Some Error";
  }
?>
