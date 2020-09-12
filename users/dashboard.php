<?php
  session_start();
  $title=$_SESSION['data']['Name'];
  $style="../styles/dashboard.css";
  require_once '../default/header.php';
?>

<div class='main'>
  <div id="toolbar">
    <div id="Name">
      <?php echo $_SESSION['data']['Name'] ?>
    </div>
    <div id="profile-options">
      &#9776;
    </div>
  </div>
  <a href="./create_questions.php">Create Paper</a>
</div>

<?php
  $script="../scripts/dashboard.js";
  require_once '../default/footer.php'
?>
