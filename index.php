<?php
  $title="Homepage";
  require_once 'header.php';
?>
<div class ="main">
  <div id="login-signup">
    <button id="login-btn" class="index-button">Login</button>
    <button id="signup-btn" class="index-button">SignUp</button>
  </div>

  <div id='login-box'>
    <div id='pop-up-login'>
      <span class="close"> &#10060;</span>
      <h2><center>Login</center></h2>
      <form action="#" method='post'>
        <label for='username'>Username</label><br>
        <input class='input-box' type='text' name='username' id='username' required placeholder="Username"><br>
        <label for='password'>Password</label><br>
        <input class='input-box' type='password' name='password' id='password' required placeholder="Password"><br>
        <center><button id="submit-login" class="submit-button" type='submit'>Login</button></center>
      </form>
    </div>
  </div>

  <div id='signup-box'>
    <div id='pop-up-signup'>
      <span class="close"> &#10060;</span>
      <h2><center>Signup</center></h2>
      <form action="./DB/Success_register.php" method='post'>
        <label for='name'>Name</label><br>
        <input class='input-box' type='text'name='Name'id='name' required placeholder="Full Name"><br>
        <label for="mobile">Mob No.</label><br>
        <input class='input-box' type='number' name="MobNo" id='mobile' required placeholder="10 digit Mobile Number"><br>
        <label for='clg_id'>Email</label><br>
        <input class='input-box' type='email' name='EMail' id='clg_id' required placeholder="Email Id"><br>
        <label for='username'>Username</label><br>
        <input class='input-box' type='text' name='UserID' id='username' required placeholder="Username"><br>
        <label for='password'>Password</label><br>
        <input class='input-box' type='password' name='Password' id='password' required placeholder="Password"><br>
        <center><button id="submit-signup" class="submit-button" type='submit' name='submit'>Signup</button></center>
      </form>
    </div>
  </div>

</div>
<?php require_once 'footer.php';?>
<script src="./scripts/script_index.js"></script>
