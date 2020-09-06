<?php
  session_start();
  $title=$_SESSION['data']['Name'];
  $style="../styles/dashboard.css";
  require_once '../default/header.php';


  if(session_id()){
    echo "Hello<br>".$_SESSION['data']['Password'];
  }
  else{
    echo 'You are not logged in';
  }
?>
<div class='main'>
  <br><br>
  <form action='../DB/logout.php' method='post'>
    <button type='submit' name='submit'> Log Out</button>
  </form>
</div>

<?php
  $script="../scripts/dashboard.js";
  require_once '../default/footer.php'
?>
