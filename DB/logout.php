<?php
  session_start();
  echo "Successfully logged off<br>";
  echo "Session id before = ".session_id();
  session_destroy();
 ?>
