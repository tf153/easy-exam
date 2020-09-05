<html>
<body>
<?php
  if(isset($_SESSION['UserID'])){
    echo "Dashboard <br> Hello";
  }
  else{
    echo 'You are not logged in';
  }
?>
<form action='./logout.php' method='post'>
  <button type='submit' name='submit'> Log Out</button>
</form>
</body>
</html>
