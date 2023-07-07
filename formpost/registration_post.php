<?php
require_once('../include/db.php');

if(isset($_POST['btn'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

 if(empty($username)){
        header("Location: ../registration.php");
        exit();
    }elseif(empty($email)){
        header("Location: ../registration.php");
        exit();
    }elseif(empty($password)){
        header("Location: ../registration.php");
        exit();
    }elseif($password !== $confirm_password){
        header("Location: ../registration.php");
        exit();
    }else{
        $find_query = "SELECT*FROM `users` WHERE username='$username' OR email='$email'";
        $result = mysqli_query($db_conn, $find_query);

          if($result->num_rows > 0){
            header("Location: ../login.php");
            exit();
        }else{
            $hash = md5($password);
            $insert_query = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$hash')";
            $result_two = mysqli_query($db_conn, $insert_query);

            header("Location: ../");
            exit();
        }
    }
















}else{
header("Location: ../registration.php");
exit();
};



