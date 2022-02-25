<?php
  session_start();

  if(isset($_POST['userName'])){
    $db = mysqli_connect("localhost", "root", "", "resmng");
    $uname=$_POST['userName'];
    $upswd=$_POST['Password'];
    if($uname != 'admin'){
      $login_search = "SELECT username FROM users WHERE username = '$uname'";
      $pswd_match = "SELECT password FROM users WHERE username = '$uname'";
      $userexist = mysqli_query($db, $login_search);
      $user_check = mysqli_fetch_array($userexist);
      if ($user_check!=NULL){
        $userpswd = mysqli_query($db, $pswd_match);
        $pswd = mysqli_fetch_array($userpswd);
        $getEmail = "SELECT `email` FROM `resmng`.`users` WHERE username = '$uname'";
        $getDept = "SELECT `dept` FROM `resmng`.`users` WHERE username = '$uname'";
        $getRole = "SELECT `role` FROM `resmng`.`users` WHERE username = '$uname'";
        if ($upswd == $pswd[0]){
          $dbemail = mysqli_query($db, $getEmail);
          $uemail = mysqli_fetch_array($dbemail);

          $dbdept = mysqli_query($db, $getDept);
          $udept = mysqli_fetch_array($dbdept);

          $dbrole = mysqli_query($db, $getRole);
          $urole = mysqli_fetch_array($dbrole);

          $_SESSION['email'] = $uemail[0];
          $_SESSION['dept'] = $udept[0];
          $_SESSION['role'] = $urole[0];

          $_SESSION['uname']= $uname;
          echo "Login successful";
          header("Location: bookingPg.php");
        }
        else{
          // echo "Incorrect password";
          $_SESSION['error']="loginError";
          header("Location: loginPage.php");
        }
      }
      else{
        // echo "User does not exist";
        $_SESSION['error']="loginError";
        header("Location: loginPage.php");
      }
    }
    else if($upswd == 'admin123') {
      $_SESSION['admin']="adminLogin";
      header("Location: admin.php");
    }
    else{
      $_SESSION['error']="loginError";
      header("Location: loginPage.php");
    }
  }
?>

<script>
  function logout(){
    sessionStorage.clear();
  }
</script>
