<?php
  $title="Homepage";
  require_once 'header.php';
?>
<div class ="main">
  <div id="login-signup">
    <button id="login-btn" class="index-button">Login</button>
    <button id="signup-btn" class="index-button">SignUp</button>
  </div>

  <div id='login-box' class='pop-up'>
    <div class='pop-up-block'>
      <h3><center>Login</center></h3>
      <form action="#" method='post'>
        <label for='username'>Username</label>
        <input type='text' name='username' id='username' class='input' required placeholder="Username">
        <label for='password'>Password</label>
        <input type='password' name='password' id='password' class='input' required placeholder="Username">
      </form>
    </div>
  </div>

  <div id='login-box' class='pop--up'>
  </div>

</div>
<?php require_once 'footer.php';?>
<script src="script_index.js"></script>
