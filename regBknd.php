<?php
  session_start();

  $db = mysqli_connect("localhost", "root", "", "resmng");
  $createudb = "CREATE TABLE IF NOT EXISTS `resmng`.`users` (`username` VARCHAR(45), `email` VARCHAR(50), `dept` VARCHAR(10), `role` VARCHAR(50), `password` VARCHAR(100));";
  mysqli_query($db, $createudb);

  if(isset($_POST['userName'])){
    $uname=$_POST['userName'];
    $email=$_POST['userEmail'];
    $dept=$_POST['dept'];
    $role=$_POST['role'];
    $srn=$_POST['srn'];
    $pswd=$_POST['Password'];
    $roleDet = "$role $srn";
    $login_search = "SELECT username FROM resmng.users WHERE username = '$uname'";
    $insuser = "INSERT INTO resmng.users (userName, email, dept, role, password)
          			  VALUES('$uname', '$email', '$dept', '$roleDet', '$pswd')";
    $userexist = mysqli_query($db, $login_search);
    $user_check = mysqli_fetch_array($userexist);
    if (count($user_check) > 0){
      $_SESSION['error']="regError";
      header("Location: reg.php");
    }
    else{
      mysqli_query($db, $insuser);
      header("Location: loginPage.php");
    }

  }
?>
