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
    <link rel="stylesheet" href="HN-MedLSRec.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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

    <div class="container">
      <form id="search">
          <div class="form-group">
              <label for="searchDate">Search by Date:</label>
              <input type="date" id="searchDate" name="searchDate">
          </div>
          <button type="button" class="buttonSearch" id="buttonSearch" onclick="search()">Search</button>
      </form>

      <div id="results">
        <div id="searchOutput"></div>
        <table>
          <tr>
              <th>Date</th>
          </tr>
          <tr>
              <td>6/5/20024</td>
          </tr>
        </table>
  </div>
</div>

  </section>

  <script src="HN-MedLSRec.js"></script>
</body>

</html>