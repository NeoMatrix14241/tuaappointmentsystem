<?php
require_once "server/server.php";
require_once "server/auth_check.php";
$_SESSION['username'];
$_SESSION['success'];
?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="PT-AppointDental.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.css" rel="stylesheet" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <title></title>
<body>
  <?php
    checkAccountRole();
  ?>

  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>


    <h2>Appointment Booking Form for Dental</h2>

    <form action="#" method="POST" id="appointmentForm">
        <div class="form-group">
            <label for="id_number">ID Number:</label>
            <input type="text" id="id_number" name="id_number" required>
        </div>
    
        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>
    
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>
    
        <div class="form-group">
            <label for="middle_initial">Middle Initial:</label>
            <input type="text" id="middle_initial" name="middle_initial">
        </div>
    
        <div class="form-group">
            <label for="course">Course:</label>
            <input type="text" id="course" name="course" required>
        </div>
    
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required min="2024-01-01" max="2024-12-31">
        </div>
    
        <div class="form-group">
            <label for="time">Time:</label>
            <div id="timeButtons">
            <button type="button" class="timeButton" value="2:00 PM">2:00 PM</button>
            <button type="button" class="timeButton" value="2:30 PM">2:30 PM</button>
            <button type="button" class="timeButton" value="3:00 PM">3:00 PM</button>
            <button type="button" class="timeButton" value="3:30 PM">3:30 PM</button>
            <button type="button" class="timeButton" value="4:00 PM">4:00 PM</button>
            <div class="form-group">
              <input type="submit" value="Submit">
          </div>
      </form>



  <script src="PT-AppointDental.js"></script>
</body>
</html>