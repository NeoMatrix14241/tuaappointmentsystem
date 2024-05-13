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
  <link rel="stylesheet" href="Sample.css">
  <link rel="stylesheet" href="PT-SettCP.css">
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
      <i class='bx bx-menu'></i>
    </div>

    <form method="post" action="PT-SettCP.php" class="#">
      <div class="container">
        <h2>Change Password</h2>
        <?php
        if (isset($_SESSION['is_reset']) && $_SESSION['is_reset'] == "true") {
          echo '
          <div class="form-group">
            <label for="oldPassword">Old Password:</label>
            <input type="password" id="oldPassword" placeholder="Enter old password" name="old_password">
          </div>
          ';
        }
        ?>
        <!--
      <div class="form-group">
        <label for="oldPassword">Old Password:</label>
        <input type="password" id="oldPassword" placeholder="Enter old password">
      </div>
      -->
        <div class="form-group">
          <label for="newPassword">New Password:</label>
          <input type="password" id="newPassword" placeholder="Enter new password" name="new_password">
        </div>
        <div class="form-group">
          <label for="confirmNewPassword">Confirm New Password:</label>
          <input type="password" id="confirmNewPassword" placeholder="Confirm new password" name="confirm_new_password">
        </div>
        <div id="changePass">
          <button type="submit" name="change_pass_btn">Change Password</button>
        </div>
        <p id="message"></p>
      </div>
    </form>

    <script src="Sample.js"></script>
    <script src="PT-SettCP.js"></script>
</body>

</html>