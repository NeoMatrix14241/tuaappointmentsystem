<?php
require_once "server/server.php";
require_once "server/auth_check.php";
require_once "server/save_medls.php";
$_SESSION['username'];
$_SESSION['success'];
?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
  <link rel="stylesheet" href="HN-MedLS.css">
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
      <i class='bx bx-menu'></i>
    </div>

    <div class="logo-image">
      <img src="TUALOGO.png" class="tualogo">
    </div>
    <div>
      <h2 class="tuatitle">TRINITY UNIVERSITY OF ASIA</h2>
    </div>
    <div>
      <h4 class="mdutitle">Medical and Dental Unit</h4>
    </div>
    <div>
      <h5 class="medlogsheet">MEDICINE LOG SHEET</h5>
    </div>

    <form id="medForm" method="post" action="HN-MedLS.php">
      <div class="form-row">
        <div class="form-column">
          <label for="time">Time:</label>
          <input type="text" id="time" name="time" required>
        </div>
        <div class="form-column">
          <label for="collegeDept">College/Dept:</label>
          <input type="text" id="collegeDept" name="collegeDept" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-column">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-column">
          <label for="chiefComplain">Chief Complain:</label>
          <textarea id="chiefComplain" name="chiefComplain" rows="3" required></textarea>
        </div>
      </div>

      <div class="form-row">
        <div class="form-column">
          <label for="medicineGiven">Medicine Given:</label>
          <select id="medicineGiven" name="medicineGiven" required>
            <?php
            if ($get_medicine_record_result && mysqli_num_rows($get_medicine_record_result) > 0) {
              while ($row = mysqli_fetch_assoc($get_medicine_record_result)) {
                $itemName = $row['item_name']; // Assign item name to a variable
                echo "<option value=\"$itemName\">$itemName</option>"; // Output option tag
              }
            } else {
              echo "<option value=''>No medicine found</option>"; // Output default option if no medicine found
            }
            ?>
            <!-- Add more options as needed -->
          </select>
        </div>
        <div class="form-column">
          <label for="quantity">Quantity:</label>
          <input type="number" id="quantity" name="quantity" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-column" style="grid-column: span 2;">
          <label for="nurseOnDuty">Nurse on Duty:</label>
          <input type="text" id="nurseOnDuty" name="nurseOnDuty" required>
        </div>
      </div>

      <button id="saveDataBtn" type="submit" name="save_logsheet">Save Data</button>
    </form>







    <table id="logTable" class="cell-border">
      <thead>
        <tr>
          <th>No</th>
          <th>Time</th>
          <th>College/Dept</th>
          <th>Name</th>
          <th>Chief Complain</th>
          <th>Medicine Given</th>
          <th>Quantity</th>
          <th>Nurse on Duty</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($get_medical_log_result)) {
          echo "<tr>";
          echo "<td>{$row['id']}</td>";
          echo "<td>{$row['time']}</td>";
          echo "<td>{$row['college_dept']}</td>";
          echo "<td>{$row['name']}</td>";
          echo "<td>{$row['chief_complaint']}</td>";
          echo "<td>{$row['given_meds']}</td>";
          echo "<td>{$row['quantity']}</td>";
          echo "<td>{$row['nurse_on_duty']}</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
    <button type="button" id="addRowBtn">+</button>
    <br>

  </section>



</body>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
<link href="https://cdn.datatables.net/v/dt/dt-2.0.6/datatables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/v/dt/dt-2.0.6/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datejs/1.0/date.min.js"></script>
<script src="HN-MedLS.js"></script>

</html>