<div class="sidebar close">
  <div class="logo-details">
    <img class="sidebar-logo" src="MDULOGO.png" alt="MDULOGO">
    <span class="logo_name">Medical and Dental Unit</span>
  </div>
  <ul class="nav-links">
    <li>
      <a href="HN-Appointment.php">
        <i class='bx bx-grid-alt'></i>
        <span class="link_name">Appointment</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="HN-Appointment.php">Appointment</a></li>
      </ul>
    </li>
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-collection'></i>
          <span class="link_name">Inventory</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Inventory</a></li>
        <li><a href="HN-MedRec.php">Medicine Record</a></li>
        <li><a href="HN-MedLS.php">Medicine Log Sheet</a></li>
        <li><a href="HN-MedLSRec.php">Log Sheet Record</a></li>
      </ul>
    </li>
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-book-alt'></i>
          <span class="link_name">Record</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Record</a></li>
        <li><a href="HN-SearchRec.php">Health Record</a></li>
        <li><a href="HN-HealthRec.php">Add New Record</a></li>
      </ul>
    </li>

    <li>
      <div class="profile-details">
        <div class="profile-content">
          <!--<img src="image/profile.jpg" alt="profileImg">-->
        </div>
        <div class="name-job">
          <div class="profile_name"><?php echo getCurrentUserUsername() ?></div>
          <div class="job"><?php echo getUserRole() ?></div>
        </div>
        <a href="index.php?logout='1'"><i class='bx bx-log-out'></i></a>
        <!-- onclick="redirectToLogin()" -->
      </div>
    </li>
  </ul>
</div>