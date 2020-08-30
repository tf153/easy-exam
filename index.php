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
      <h2><center>Signup</center></h2>
      <form action="#" method='post'>
        <label for='name'>Name</label><br>
        <input class='input-box' type='text'name='name'id='name' required placeholder="Full Name"><br>
        <label for='clg_id'>College ID</label><br>
        <input class='input-box' type='text' name='clg_id' id='clg_id' required placeholder="Enter The College Referral Id"><br>
        <label for='username'>Username</label><br>
        <input class='input-box' type='text' name='username' id='username' required placeholder="Username"><br>
        <label for='password'>Password</label><br>
        <input class='input-box' type='password' name='password' id='password' required placeholder="Password"><br>
        <center><button id="submit-signup" class="submit-button" type='submit'>Signup</button></center>
      </form>
    </div>
  </div>

</div>
<?php require_once 'footer.php';?>
<script >
var login=document.getElemetById('login-btn');
var signup=document.getElementByID('signup-btn');
var login_popup=document.getElementById('login-box');
var signup_popup=document .getElementById('signup-box');
login.onclick=function(){
  login_popup.style.display="block";
}
signup.onclick=function(){
  signup_popup.style.display="block";
}
</script>
