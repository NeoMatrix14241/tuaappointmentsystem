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
    <link rel="stylesheet" href="HN-Appointment.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <?php
    checkAccountRole();
  ?>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>
    <form>    
        <table id="patient">
            <tr>
                <th>Time</th>
                <th>Status</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>M.I.</th>
                <th>ID Number</th>
            </tr>
    
            <tr>
                <td>9:00 AM</td>
                <td>Student</td>
                <td>Farin</td>
                <td>Eduard Erick</td>
                <td>D</td>
                <td>2024300881</td>

            </tr>
    
            <tr>
                <td>9:00 AM</td>
                <td>Employee</td>
                <td>Pereira</td>
                <td>Dilson Borges</td>
                <td>M.S.</td>
                <td>2024123456</td>
            </tr>
    
            <tr>
                <td>9:00 AM</td>
                <td>Student</td>
                <td>Joseph</td>
                <td>Precious</td>
                <td>S.</td>
                <td>2024300881</td>
            </tr>
    
            <tr>
                <td>9:00 AM</td>
                <td>Student</td>   
                <td>Chao</td>
                <td>John Christian</td>
                <td>A.</td> 
                <td>2024300881</td>
            </tr>
        </table>
    </form>
  </section>

  <script src="HN-Appointment.js"></script>
</body>
</html>