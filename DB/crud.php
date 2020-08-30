<?php
  class crud{
    private $db;
    function __construct($conn){
      $this->db = $conn;
    }
    public function insert($UserID,$Name,$MobNo,$EMail,$Password){
      try{
        $sql = "INSERT INTO `Users`(`UserID`, `Name`, `MobNo`, `EMail`, `Password`) VALUES (:UserID,:Name,:MobNo,:EMail,:Password)";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(':UserID',$UserID);
        $stmt->bindParam(':Name',$Name);
        $stmt->bindParam(':MobNo',$MobNo);
        $stmt->bindParam(':EMail',$EMail);
        $stmt->bindParam(':Password',$Password);

        $stmt->execute();
        return true;
      }
      catch(PDOException $e){
        echo $e->getMessage();
        return false;
      }
    }
  }
 ?>
