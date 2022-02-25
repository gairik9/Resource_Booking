<html>
  <head>
    <link rel="stylesheet" type="text/css" href="resBook.css">
    <link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
    <title>Registration</title>
    <?php include 'regBknd.php';?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body class="bg">
    <div>
        <ul class="navbar">
          <li><a href="index.html">Home</a></li>
          <li><a href="loginPage.php">Login</a></li>
          <li><a href="reg.php">Sign-Up</a></li>
          <li><a href="bookingPg.php">Booking page</a></li>
          <li><a href="admin.php">Admin page</a></li>
          <?php
          if(isset($_SESSION['uname'])){
            echo '<li style="float: right;"><a href="logout.php">Logout</a></li>';
          }
          else{
            echo '<li style="float: right;"><a href="loginPage.php">Login</a></li>';
          }
          ?>
        </ul>
    </div>
    <div>
      <h1>Resource booking</h1>
      <div>
      <h2 ><center>Create new account :</center></h2>
    </div>
  </div>
    <div id="signupID">
      <form action="regBknd.php" method="post">
      <h3>Enter details :</h3>
        <label>Username : </label>
        <input class="txtbx" type="text" id="userName" name="userName" placeholder="   Required" required><br><br>

        <label>Email:</label>
        <input class="txtbx" type="email" id="userEmail" name="userEmail" placeholder="   Required" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"><br><br>

        <label >Choose your department:</label>
            <select class="txtbx2" id="dept" name="dept">
                  <option value="MCA">MCA</option>
                  <option value="BCA">BCA</option>
                  <option value="M.Com">M.Com</option>
                  <option value="B.Com">B.Com</option>
                  <option value="B.Tech">B.Tech</option>
                  <option value="B.Pharma">B.Pharma</option>
                  <option value="M.Tech">M.Tech</option>
                  <option value="BSC">BSc</option>
            </select><br><br>

        <label>Role in college : </label>
        <select onchange="visi()" class="txtbx2" name="role" id="role">
          <option value="Faculty">Faculty</option>
          <option value="Student">Student</option>
          <option value="Other">Other</option>
        </select><br>
        <label id="srnLabel" style="visibility:collapse">Enter SRN:</label>
        <input type="text" class="txtbx" id="srn" name="srn" value=" " style="visibility:collapse"><br><br>

        <label>Enter new password : </label>
        <input  class="txtbx" name="Password" type="password" id="txtPassword"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required
         placeholder="Enter Password" /><br><br>
         <!-- required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" -->

        <input class="btn" type="submit"/>

  </div>
  <script>
  function visi()
  {
    var role = document.getElementById("role").value;
    console.log(role);
    if (role == "Student"){
      document.getElementById("srnLabel").style.visibility = "visible";
      document.getElementById("srn").style.visibility = "visible";
    }
    if (role != "Student") {
      document.getElementById("srnLabel").style.visibility = "collapse";
      document.getElementById("srn").style.visibility = "collapse";
    }
    // if (role == "other"){
    //   document.getElementById("srnLabel").style.visibility = "visible";
    //   document.getElementById("srn").style.visibility = "visible";
    // }
  }

  function myFunction()
  {
    var x = document.getElementById("userName").value;
     alert(x+", You have registered successfully");
  }
  </script>
  <?php
    if(isset($_SESSION['error'])){
      echo '<script>swal("Error", "Username already taken", "error");</script>';
      session_unset();
    }
  ?>

 </body>
</html>
