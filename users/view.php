<?php
  $ques=$_POST['ques'];
  $optn=$_POST['optn'];
  $ans=$_POST['ans'];
  $count=0;
  $count2=0;
  foreach ($ques as $q) {
    echo "<br><br>".$q;
    echo "<br>".$optn[$count++];

    echo "<br>".$optn[$count++];
    echo "<br>".$optn[$count++];
    echo "<br>".$optn[$count++];
    echo "<br>".$ans[$count2++];
  }
 ?>
