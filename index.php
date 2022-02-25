<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <link rel="stylesheet" href="index.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet"> -->
  </head>
  <body class="bg">
    <div >
        <ul class="navbar">
          <li><a href="index.html">Home</a></li>
          <li><a href="loginPage.php">Login</a></li>
          <li><a href="reg.php">Sign-Up</a></li>
          <li><a href="bookingPg.php">Booking page</a></li>
          <li><a href="admin.php">Admin Page</a></li>
          <?php
          if(isset($_SESSION['uname'])){
            echo '<li style="float: right;"><a href="logout.php">Logout</a></li>';
          }
          else{
            echo '<li style="float: right;"><a href="index.html">Login</a></li>';
          }
          ?>
        </ul>
    </div>

    <div class="row">
      <div class="column">
        <img src="index1.jpg" alt="Snow" style="width:100%;height: 380px;">
      </div>
      <div class="column">
        <img src="index2.jpg" alt="Forest" style="width:100%;height: 380px;">
      </div>
      <div class="column">
        <img src="index3.jpg" alt="Mountains" style="width:100%;height: 380px;">
      </div>
    </div>

    <center>
    <h1>About The Project</h2>
    <p style="width: 55%">
      <h3>
        The aim is to create an interface which can be put to use in order to facilitate anybody who needs to utilize the department seminar hall at available timings with available equipment which may be needed for the event.    </p></center>
      </h3>
    <center style="padding-top: 2%">
      <h3>Facilities and available equipment:</h3>
    <div class="box">
      <h2>About</h2>
      <p style="text-align: left">
        MCA department has a seminar hall with projectors, mike and sound equipment.
        Faculties from any other department or from our department can book the facility for the entire day for conducting any event.
        Not more than one event can be booked in a day and the reserved days need to be greyed-out as unavailable.
        The data needs to be taken from the database where the user input data would be stored.
      </p>
    </div>
    <div class="box">
      <h2>Facilities provided</h2>
      <p style="text-align: left">
        The project will contain functionalities for registration, user session login,
        facilities and equipment details page including the dates when the hall could be booked and a page where the seminar hall could be booked with the finalized dates.
        The user would also be able to edit the booking details such as rescheduling, opting the equipment required and cancellation of booking.
      </p>
    </div>
    <div class="box">
      <h2>Available equipment:</h2>
        <ul>
          <li>Hand mic</li><br>
          <li>Audio console</li><br>
          <li>Speakers</li><br>
          <li>Stage lights</li><br>
          <li>Projector</li>
        </ul><br>
        <!-- <input type="button" class="btnAtIndex" value="&#x2192Go to Hall Booking Page" onclick="location.href='bookingPg.php';"> -->
    </div>
    </center>
    
          
    </body>
</html>
