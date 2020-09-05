<?php
  session_start();
  echo "Successfully logged off<br>";
  echo "Session id before = ".session_id();
  unset($_SESSION['UserID']);
  session_destroy();
  echo "session id after destroy";
  echo session_id();
 ?>
