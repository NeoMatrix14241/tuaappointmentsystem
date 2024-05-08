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
    <link rel="stylesheet" href="HN-SearchRec.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <title></title>
<body>
  <?php
    checkAccountRole();
  ?>
  </div>

  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>

    <div class="container">
          <form id="search">
              <div class="form-group">
                  <label for="IDNumber">Search ID Number:</label>
                  <input type="number" class="form-control" id="IDNumber">
              </div>
              <button class="buttonSearch" id="buttonSearch" type="button" onclick="searchPatients()">Search</button>
          </form>
          <div id="searchResults">
            <table id="patient">
              <tr>
                  <th>ID Number</th>
                  <th>Status</th>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>M.I.</th>
                  <th>Course</th>
              </tr>
      
              <tr>
                  <td>2024300881</td>
                  <td>Student</td>
                  <td>Farin</td>
                  <td>Eduard Erick</td>
                  <td>D</td>
                  <td>CEIS</td>
              </tr>
      
              <tr>
                <td>2024300881</td>
                <td>Student</td>
                <td>Farin</td>
                <td>Eduard Erick</td>
                <td>D</td>
                <td>CEIS</td>
            </tr>
      
            <tr>
              <td>2024300881</td>
              <td>Student</td>
              <td>Farin</td>
              <td>Eduard Erick</td>
              <td>D</td>
              <td>CEIS</td>
          </tr>
      
          <tr>
            <td>2024300881</td>
            <td>Student</td>
            <td>Farin</td>
            <td>Eduard Erick</td>
            <td>D</td>
            <td>CEIS</td>
            </tr>
          </table>
          </div>
      </div>

  </section>

  <script src="HN-SearRec.js"></script>
</body>
</html>