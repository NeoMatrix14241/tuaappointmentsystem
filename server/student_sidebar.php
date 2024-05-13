<div class="sidebar close">
  <div class="logo-details">
    <img class="sidebar-logo" src="MDULOGO.png" alt="MDULOGO">
    <span class="logo_name">Medical and Dental Unit</span>
  </div>
  <ul class="nav-links">

    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="link_name">Appointment</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Appointment</a></li>
        <li><a href="PT-AppointMedical.php">Schedule for Medical</a></li>
        <li><a href="PT-AppointDental.php">Schedule for Dental</a></li>
      </ul>
    </li>

    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="link_name">Setting</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Setting</a></li>
        <li><a href="PT-SettCP.php">Change Password</a></li>
      </ul>
    </li>

    <li class="profile">
      <div class="profile-details">
        <div class="profile-content">
          <!--<img src="image/profile.jpg" alt="profileImg">-->
        </div>
        <div class="name-job">
          <div class="profile_name"><?php echo getCurrentUserUsername() ?></div>
          <div class="job"><?php echo getUserRole() ?></div>
        </div>
        <a href="index.php?logout='1'"><i class='bx bx-log-out'></i></a>
      </div>
    </li>
  </ul>
</div>