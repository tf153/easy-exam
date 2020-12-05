<?php
  session_start();
  $title="Success";
  require_once "../default/header.php";

  $table_name=$_POST['qname'];
  $ques= $_POST['ques'];
  $optn= $_POST['optn'];
  $ans= $_POST['ans'];
  $count_optn=0;
  $count_ans=0;

  $host = '127.0.0.1';
  $db = $_SESSION['data']['UserID'];
  $user = 'root';
  $pass= '';

  $dsn = "mysql:host=$host;dbname=$db";

  try{
    $pdo=new PDO($dsn,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="CREATE TABLE `$table_name` ( qno INT NOT NULL AUTO_INCREMENT , question VARCHAR(5000) NOT NULL , option1 VARCHAR(500) NOT NULL , option2 VARCHAR(500) NOT NULL , option3 VARCHAR(500) NOT NULL , option4 VARCHAR(500) NOT NULL , answer VARCHAR(1) NOT NULL , PRIMARY KEY (qno))";
    $stmt= $pdo->query($sql);

    $sql="INSERT INTO `$table_name` (`qno`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES (NULL, :ques, :opt1, :opt2, :opt3, :opt4 ,:ans)";

    $stmt= $pdo->prepare($sql);

    foreach ($ques as $q) {

      $stmt->bindParam(':ques',$q);
      $stmt->bindParam(':opt1',$optn[$count_optn++]);
      $stmt->bindParam(':opt2',$optn[$count_optn++]);
      $stmt->bindParam(':opt3',$optn[$count_optn++]);
      $stmt->bindParam(':opt4',$optn[$count_optn++]);
      $stmt->bindParam(':ans',$ans[$count_ans++]);

      $stmt->execute();
    }

    if($stmt){
      echo "Question paper created";
    }
    else{
      echo "Some error occured to create yoour question paper";
    }
  }
  catch(PDOException $e){
    throw new PDOException($e->getMessage());
    exit();
  }


?>
