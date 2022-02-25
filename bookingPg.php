<html>
  <head>
    <meta charset="utf-8">
    <title>Hall Boking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="resBook.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet"> -->
    <script src="funcs.js"></script>
    <?php include 'bookingBknd.php';?>

  </head>

  <body class="bg">
      <div>
          <ul class="navbar">
            <li><a href="index.php">Home</a></li>
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

      <form action='bookingBknd.php' method='post'>
        <h2 style="padding-left:15px; padding-top: 5px; text-align: center;">Hall Booking</h2>

        <!-- Side image -->
        <div>
              <img align="right" src="side.jpg" style="width: 550px; margin-right: 6.5%; margin-top: 2%;">
        </div>

        <div class="bookingfrm">
        <h3>Select booking date:</h3>
          <table class="dateTable">
            <tr>
              <?php
              $date = date_create();
              $nMon = date('F', strtotime('+1 months'));
              $days = date_format($date,"t");
              $nextMonth = date_create(date("Y")."-".date("m", strtotime('+1 months'))."-".date("m"));
              $nextMdays = date_format($nextMonth,"t");
              $count=0;
              $tdate = date("d");
              $tmonth = date("F")." ";
              $nextmonth = date("F", strtotime('+1 months'))." ";
              $tyear = date("Y");

              // $date_search = "SELECT * FROM `resmng`.`bookingdb` WHERE `date` = '$i-$tmonth-$tyear'";

              echo "<th colspan='3'>".$tmonth." ".$tyear." </th>";
              echo "<tr>";
                for ($i=1; $i <= 7; $i++) {
                  if ($i == $tdate) {
                    echo "<td class='date' style='background-color: #69cdff;'> $i <br> </td>";
                  }
                  elseif ($i < $tdate) {
                    echo "<td class='date' style='background-color: #dedede;'> $i <br> </td>";
                  }
                  else{
                    $date_search = "SELECT * FROM `resmng`.`bookingdb` WHERE `date` = '$i-$tmonth-$tyear'";
                    $bookingexist = mysqli_query($db, $date_search);
                    $booking_check = mysqli_fetch_array($bookingexist);
                    if ($booking_check!=NULL){
                      echo "<td class='date' style='background-color: #ff7066;'> $i <br> </td>";
                    }
                    else {
                      echo "<td class='date'> $i <br> <input type='radio' id='dsel' name='dsel' value='$i-$tmonth-$tyear'></td>";
                    }
                  }
                }
                echo "</tr><tr>";
                for ($i=8; $i <= 14; $i++) {
                  if ($i == $tdate) {
                    echo "<td class='date' style='background-color: #69cdff;'> $i <br> </td>";
                  }
                  elseif ($i < $tdate) {
                    echo "<td class='date' style='background-color: #dedede;'> $i <br> </td>";
                  }
                  else{
                    $date_search = "SELECT * FROM `resmng`.`bookingdb` WHERE `date` = '$i-$tmonth-$tyear'";
                    $bookingexist = mysqli_query($db, $date_search);
                    $booking_check = mysqli_fetch_array($bookingexist);
                    if ($booking_check!=NULL){
                      echo "<td class='date' style='background-color: #ff7066;'> $i <br> </td>";
                    }
                    else {
                      echo "<td class='date'> $i <br> <input type='radio' id='dsel' name='dsel' value='$i-$tmonth-$tyear'></td>";
                    }                  }
                }
                echo "</tr><tr>";
                for ($i=15; $i <= 21; $i++) {
                  if ($i == $tdate) {
                    echo "<td class='date' style='background-color: #69cdff;'> $i <br> </td>";
                  }
                  elseif ($i < $tdate) {
                    echo "<td class='date' style='background-color: #dedede;'> $i <br> </td>";
                  }
                  else{
                    $date_search = "SELECT * FROM `resmng`.`bookingdb` WHERE `date` = '$i-$tmonth-$tyear'";
                    $bookingexist = mysqli_query($db, $date_search);
                    $booking_check = mysqli_fetch_array($bookingexist);
                    if ($booking_check!=NULL){
                      echo "<td class='date' style='background-color: #ff7066;'> $i <br> </td>";
                    }
                    else {
                      echo "<td class='date'> $i <br> <input type='radio' id='dsel' name='dsel' value='$i-$tmonth-$tyear'></td>";
                    }                  }
                }
                echo "</tr><tr>";
                for ($i=22; $i <= 28; $i++) {
                  if ($i == $tdate) {
                    echo "<td class='date' style='background-color: #69cdff;'> $i <br> </td>";
                  }
                  elseif ($i < $tdate) {
                    echo "<td class='date' style='background-color: #dedede;'> $i <br> </td>";
                  }
                  else{
                    $date_search = "SELECT * FROM `resmng`.`bookingdb` WHERE `date` = '$i-$tmonth-$tyear'";
                    $bookingexist = mysqli_query($db, $date_search);
                    $booking_check = mysqli_fetch_array($bookingexist);
                    if ($booking_check!=NULL){
                      echo "<td class='date' style='background-color: #ff7066;'> $i <br> </td>";
                    }
                    else {
                      echo "<td class='date'> $i <br> <input type='radio' id='dsel' name='dsel' value='$i-$tmonth-$tyear'></td>";
                    }                  }
                }
                echo "</tr><tr>";
                for ($i=29; $i <= $days; $i++) {
                  if ($i == $tdate) {
                    echo "<td class='date' style='background-color: #69cdff;'> $i <br> </td>";
                  }
                  elseif ($i < $tdate) {
                    echo "<td class='date' style='background-color: #dedede;'> $i <br> </td>";
                  }
                  else{
                    $date_search = "SELECT * FROM `resmng`.`bookingdb` WHERE `date` = '$i-$tmonth-$tyear'";
                    $bookingexist = mysqli_query($db, $date_search);
                    $booking_check = mysqli_fetch_array($bookingexist);
                    if ($booking_check!=NULL){
                      echo "<td class='date' style='background-color: #ff7066;'> $i <br> </td>";
                    }
                    else {
                      echo "<td class='date'> $i <br> <input type='radio' id='dsel' name='dsel' value='$i-$tmonth-$tyear'></td>";
                    }                  }
                }
                echo "</tr>";
              ?>
            </tr>
          </table>
          <!-- Next month cal display -->
          <table class="dateTable">
              <?php
              echo "<th colspan='3'>".$nMon." ".$tyear." </th>";
              echo "<tr>";
                for ($i=1; $i <= 7; $i++) {
                  $date_search = "SELECT * FROM `resmng`.`bookingdb` WHERE `date` = '$i-$nMon-$tyear'";
                  $bookingexist = mysqli_query($db, $date_search);
                  $booking_check = mysqli_fetch_array($bookingexist);
                  if ($booking_check!=NULL){
                    echo "<td class='date' style='background-color: #ff7066;'> $i <br> </td>";
                  }
                  else {
                    echo "<td class='date'> $i <br> <input type='radio' id='dsel' name='dsel' value='$i-$nMon-$tyear'></td>";
                  }                }
                echo "</tr><tr>";

                for ($i=8; $i <= 14; $i++) {
                  $date_search = "SELECT * FROM `resmng`.`bookingdb` WHERE `date` = '$i-$nMon-$tyear'";
                  $bookingexist = mysqli_query($db, $date_search);
                  $booking_check = mysqli_fetch_array($bookingexist);
                  if ($booking_check!=NULL){
                    echo "<td class='date' style='background-color: #ff7066;'> $i <br> </td>";
                  }
                  else {
                    echo "<td class='date'> $i <br> <input type='radio' id='dsel' name='dsel' value='$i-$nMon-$tyear'></td>";
                  }                }
                echo "</tr><tr>";

               for ($i=15; $i <= 21; $i++) {
                 $date_search = "SELECT * FROM `resmng`.`bookingdb` WHERE `date` = '$i-$nMon-$tyear'";
                 $bookingexist = mysqli_query($db, $date_search);
                 $booking_check = mysqli_fetch_array($bookingexist);
                 if ($booking_check!=NULL){
                   echo "<td class='date' style='background-color: #ff7066;'> $i <br> </td>";
                 }
                 else {
                   echo "<td class='date'> $i <br> <input type='radio' id='dsel' name='dsel' value='$i-$nMon-$tyear'></td>";
                 }               }
               echo "</tr><tr>";

               for ($i=22; $i <= 28; $i++) {
                 $date_search = "SELECT * FROM `resmng`.`bookingdb` WHERE `date` = '$i-$nMon-$tyear'";
                 $bookingexist = mysqli_query($db, $date_search);
                 $booking_check = mysqli_fetch_array($bookingexist);
                 if ($booking_check!=NULL){
                   echo "<td class='date' style='background-color: #ff7066;'> $i <br> </td>";
                 }
                 else {
                   echo "<td class='date'> $i <br> <input type='radio' id='dsel' name='dsel' value='$i-$nMon-$tyear'></td>";
                 }               }
               echo "</tr><tr>";

               for ($i=29; $i <= $nextMdays; $i++) {
                 $date_search = "SELECT * FROM `resmng`.`bookingdb` WHERE `date` = '$i-$nMon-$tyear'";
                 $bookingexist = mysqli_query($db, $date_search);
                 $booking_check = mysqli_fetch_array($bookingexist);
                 if ($booking_check!=NULL){
                   echo "<td class='date' style='background-color: #ff7066;'> $i <br> </td>";
                 }
                 else {
                   echo "<td class='date'> $i <br> <input type='radio' id='dsel' name='dsel' value='$i-$nMon-$tyear'></td>";
                 }               }
               echo "</tr>";

              ?>
            </tr>
          </table>
        <br>
        <label>Select equipment needed:</label><br>
        <input type="checkbox" name="equipment[]" value="Hand mic">
        <label>Hand mic</label><br>
        <input type="checkbox" name="equipment[]" value="Audio console">
        <label>Audio console</label><br>
        <input type="checkbox" name="equipment[]" value="Speakers">
        <label>Speakers</label><br>
        <input type="checkbox" name="equipment[]" value="Projector">
        <label>Projector</label><br>

        <br>
        <!-- <label>Additional comments:</label><br>
        <textarea class="txtbx2" name="adsdCom" rows="5" cols="35"></textarea><br> -->

        <input type="submit" style="float: right; margin-top: 5px; margin-right: 250px" class="btn" value="Book Hall">

        </form>
      </div>

    </body>
</html>
