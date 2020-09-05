<?php
  $title="Logged In";
  require_once '../header.php';
?>
<div class ='main'>
  <?php
    echo '<br>';
    require_once 'conn.php';
    if(isset($_POST['submit'])){
      $UserID=$_POST['UserID'];
      $Password=$_POST['Password'];
      try{
        $isSuccess=$crud->read($UserID,$Password);
        $name=$isSuccess[0]['Name'];
        session_id($isSuccess[0]['UserID']);
        session_start();
        echo 'Session id= '.session_id().'<br>';
        if($name){
          echo 'Welcome '. $name .' You have Successfulluy Logged in';
          require_once '../users/dashboard.php';

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
</div>
<?php require_once '../footer.php';?>
