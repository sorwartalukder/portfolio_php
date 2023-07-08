<?php
 session_start();
 require('./include/header.php');
?>
<section class="height_full">
  <div class="register-container">
    <h1 class="register-title">Login</h1>
    <p class="login_error">
         <?php
             if(isset( $_SESSION['error'])){
                 echo $_SESSION['error'];
                   session_destroy();
             }
         ?>
    </p>
    <form  action="./formpost/login_post.php" method="POST">
      <input name="username" type="text" class="register-input" placeholder="Username or Email">
      <input name="password" type="password" class="register-input" placeholder="Password" >
      <button type="submit" name="btn" class="register-button">Login</button>
    </form>
  </div>
</section>

<?php
 require('./include/footer.php');
?>