<?php
 require('./include/header.php');
?>
<section class="height_full">
  <div class="register-container">
    <h1 class="register-title">Register</h1>
    <form  action="./formpost/registration_post.php" method="POST">
      <input name="username" type="text" class="register-input" placeholder="Username" >
      <input name="email" type="email" class="register-input" placeholder="Email" >
      <input name="password" type="password" class="register-input" placeholder="Password" >
      <input name="confirm_password" type="password" class="register-input" placeholder="Confirm Password" >
      <button type="submit" name="btn" class="register-button">Register</button>
    </form>
  </div>
</section>

<?php
 require('./include/footer.php');
?>