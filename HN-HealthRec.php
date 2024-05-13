<?php
require_once "server/server.php";
require_once "server/auth_check.php";
require_once "server/save_healthrecord.php";
$_SESSION['username'];
$_SESSION['success'];
?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
  <link rel="stylesheet" href="HN-HealthRec.css">
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

    <div>
      <div id="registrationTab" class="tabcontent active">
        <form id="registration" method="post" action="HN-HealthRec.php">
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
            <h5 class="healthrectitle">HEALTH RECORD</h5>
          </div>



          <div class="solid">

            <div class="studentno-group">
              <div>
                <label for="studentno">Student No. :</label>
                <input type="number" class="form-control" id="studentno" name="student_id" required>
              </div>
              <div>
                <label for="gen_key">Temporary Password:</label>
                <input type="text" class="form-control" id="gen_key" name="temp_password" required>
                <button type="button" class="form-control" id="pass_gen" required>Generate</button>
              </div>
            </div>


            <div class="course-group">
              <div>
                <label for="medicalcourse">Course :</label>
              </div>
              <select id="dentalCourse" name="course">
                <option value="College of Allied Health Sciences">College of Allied Health Sciences</option>
                <option value="College of Arts, Sciences and Education">College of Arts, Sciences and Education</option>
                <option value="College of Business Management and Accountancy">College of Business Management and
                  Accountancy</option>
                <option value="College of Engineering and Information Sciences">College of Engineering and Information
                  Sciences</option>
                <option value="College of Hospitality and Tourism Management">College of Hospitality and Tourism
                  Management</option>
                <option value="College of Medical Technology">College of Medical Technology</option>
                <option value="St. Luke's College of Nursing">St. Luke's College of Nursing</option>
              </select>
            </div>

            <div class="yrlvl-group">
              <label for="yrlvl">Year Level :</label>
              <input type="number" class="form-control" id="yrlvl" name="yr_lvl" required>
            </div>

            <div class="lname-group">
              <label for="lname">Last Name :</label>
              <input type="text" class="form-control" id="lname" name="last_name" required>
            </div>

            <div class="fname-group">
              <label for="fname">First Name :</label>
              <input type="text" class="form-control" id="fname" name="first_name" required>
            </div>

            <div class="mname-group">
              <label for="mname">Middle Name :</label>
              <input type="text" class="form-control" id="mname" name="middle_name" required>
            </div>

            <div class="age-group">
              <label for="age">Age :</label>
              <input type="number" class="form-control" id="age" name="age" required>
            </div>

            <div class="dateofbirth-group">
              <label for="age">Date of Birth :</label>
              <input type="date" class="form-control" id="dateofbirth" name="birthdate" required>
            </div>

            <div class="gender-group">
              <label for="gender">Gender :</label>
              <select class="form-control" id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>

            <div class="address-group">
              <label for="address">Address :</label>
              <input type="text" class="form-control" id="address" name="address" required>
            </div>

            <div class="contactpatient">
              <label for="telephone">Contact No. :</label>
              <input type="tel" class="form-control" id="contactpatient" name="contact" required>
            </div>

            <div class="nationality-group">
              <label for="address">Nationality :</label>
              <input type="text" class="form-control" id="nationality" name="nationality" required>
            </div>

            <div class="nameofparentguardian-group">
              <label for="guardian">Name of Parent/Guardian :</label>
              <input type="text" class="form-control" id="nameofparentguardian" name="parent_guardian" required>
            </div>

            <div class="contactparentguardian-group">
              <label for="telephone">Contact No. :</label>
              <input type="tel" class="form-control" id="contactparentguardian" name="parent_guardian_contact" required>
            </div>
          </div>

          <div>
            <h5 class="healthhistorytitle">HEALTH HISTORY</h5>
          </div>

          <div class="row">
            <div class="col-sm-4">
              <div class="immunization-col">
                <div>
                  <h5 class="immunizationtitle">Immunization</h5>
                </div>

                <div class="immunization-container">
                  <input type="checkbox" id="bcg" name="bcg">
                  <label for="bcg">BCG</label>
                </div>

                <div class="immunization-container">
                  <input type="checkbox" id="dpt_opv" name="dpt_opv">
                  <label for="dpt_opv">DPT/OPV</label>
                  <div class="radio-buttons">
                    <input type="radio" id="dpt_opv_1" name="dpt_opv_radio" value="1">
                    <label for="dpt_opv_1">1</label>
                    <input type="radio" id="dpt_opv_2" name="dpt_opv_radio" value="2">
                    <label for="dpt_opv_2">2</label>
                    <input type="radio" id="dpt_opv_3" name="dpt_opv_radio" value="3">
                    <label for="dpt_opv_3">3</label>
                    <input type="radio" id="dpt_opv_b" name="dpt_opv_radio" value="B">
                    <label for="dpt_opv_b">B</label>
                  </div>
                </div>

                <div class="immunization-container">
                  <input type="checkbox" id="hib" name="hib">
                  <label for="hib">HiB</label>
                  <div class="radio-buttons">
                    <input type="radio" id="hib_1" name="hib_radio" value="1">
                    <label for="hib_1">1</label>
                    <input type="radio" id="hib_2" name="hib_radio" value="2">
                    <label for="hib_2">2</label>
                    <input type="radio" id="hib_3" name="hib_radio" value="3">
                    <label for="hib_3">3</label>
                  </div>
                </div>

                <div class="immunization-container">
                  <input type="checkbox" id="measlesvacc" name="measlesvacc">
                  <label for="measlesvacc">Measles Vaccine</label>
                </div>

                <div class="immunization-container">
                  <input type="checkbox" id="mmr" name="mmr">
                  <label for="mmr">MMR</label>
                </div>

                <div class="immunization-container">
                  <input type="checkbox" id="chickenpoxvacc" name="chickenpoxvacc">
                  <label for="chickenpoxvacc">Chickenpox Vaccine</label>
                </div>

                <div class="immunization-container">
                  <input type="checkbox" id="hepaA" name="hepaA">
                  <label for="hepaA">Hepa A</label>
                  <div class="radio-buttons">
                    <input type="radio" id="hepaA_1" name="hepaA_radio" value="1">
                    <label for="hepaA_1">1</label>
                    <input type="radio" id="hepaA_2" name="hepaA_radio" value="2">
                    <label for="hepaA_2">2</label>
                    <input type="radio" id="hepaA_3" name="hepaA_radio" value="3">
                    <label for="hepaA_3">3</label>
                  </div>
                </div>

                <div class="immunization-container">
                  <input type="checkbox" id="hepaB" name="hepaB">
                  <label for="hepaB">Hepa B</label>
                  <div class="radio-buttons">
                    <input type="radio" id="hepaB_1" name="hepaB_radio" value="1">
                    <label for="hepaB_1">1</label>
                    <input type="radio" id="hepaB_2" name="hepaB_radio" value="2">
                    <label for="hepaB_2">2</label>
                    <input type="radio" id="hepaB_3" name="hepaB_radio" value="3">
                    <label for="hepaB_3">3</label>
                  </div>
                </div>

                <div class="immunization-container">
                  <input type="checkbox" id="typhoidvacc" name="typhoidvacc">
                  <label for="typhoidvacc">Typhoid Vaccine</label>
                </div>

                <div class="immunization-container">
                  <input type="checkbox" id="influenzia" name="influenzia">
                  <label for="influenzia">Influenzia</label>
                </div>

                <div class="othersspecify-group">
                  <label class="othersspecify">Others specify :</label>
                  <input type="text" class="form-control" id="othersspecify" name="othersspecify" required>
                </div>
              </div>
            </div>


            <div class="col-sm-4">
              <div class="familyhealthhistory-col">
                <div>
                  <h5 class="familyhealthhistory">Family Health History</h5>
                </div>

                <div class="father-group">
                  <label class="father">Father :</label>
                  <input type="text" class="form-control" id="father" name="father" required>
                </div>

                <div class="mother-group">
                  <label class="mother">Mother :</label>
                  <input type="text" class="form-control" id="mother" name="mother" required>
                </div>

                <div class="siblings-group">
                  <label class="siblings">Siblings :</label>
                  <input type="text" class="form-control" id="siblings" name="siblings" required>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="previousillness-col">
                <div>
                  <h5 class="previousillness">Previous Illness</h5>
                </div>

                <div class="childhood-group">
                  <label class="childhood">Childhood :</label>
                  <input type="text" class="form-control" id="childhood" name="childhood" required>
                </div>

                <div class="adulthood-group">
                  <label class="adulthood">Adulthood :</label>
                  <input type="text" class="form-control" id="adulthood" name="adulthood" required>
                </div>
              </div>
            </div>
            <div class="allergies-group">
              <label class="allergies">Allergies :</label>
              <input type="text" class="form-control" id="allergies" name="allergies" required>
            </div>

            <div class="incaseofem-group">
              <label class="incaseofem">Preffered hospital if in case of emergency :</label>
              <input type="text" class="form-control" id="incaseofem" name="preferredhospital" required>
            </div>
          </div>

          <div>
            <h5 class="physicalexam">PHYSICAL EXAMINATIONS</h5>
          </div>
          <div class="physicalexamtable">
            <table>
              <thead>
                <tr>
                  <th></th>
                  <th>1st Year</th>
                  <th>2nd Year</th>
                  <th>3rd Year</th>
                  <th>4th Year</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Date:</td>
                  <td><input type="text" name="date_1"></td>
                  <td><input type="text" name="date_2"></td>
                  <td><input type="text" name="date_3"></td>
                  <td><input type="text" name="date_4"></td>
                </tr>
                <tr>
                  <td>Height / Weight:</td>
                  <td><input type="text" name="height_weight_1"></td>
                  <td><input type="text" name="height_weight_2"></td>
                  <td><input type="text" name="height_weight_3"></td>
                  <td><input type="text" name="height_weight_4"></td>
                </tr>
                <tr>
                  <td>Temperature / BP:</td>
                  <td><input type="text" name="temperature_bp_1"></td>
                  <td><input type="text" name="temperature_bp_2"></td>
                  <td><input type="text" name="temperature_bp_3"></td>
                  <td><input type="text" name="temperature_bp_4"></td>
                </tr>
                <tr>
                  <td>HR / PR / RR:</td>
                  <td><input type="text" name="hr_pr_rr_1"></td>
                  <td><input type="text" name="hr_pr_rr_2"></td>
                  <td><input type="text" name="hr_pr_rr_3"></td>
                  <td><input type="text" name="hr_pr_rr_4"></td>
                </tr>
                <tr>
                  <td>Nutritional Status:</td>
                  <td><input type="text" name="nutritional_status_1"></td>
                  <td><input type="text" name="nutritional_status_2"></td>
                  <td><input type="text" name="nutritional_status_3"></td>
                  <td><input type="text" name="nutritional_status_4"></td>
                </tr>
                <tr>
                  <td>Visual Acuity:</td>
                  <td><input type="text" name="visual_acuity_1"></td>
                  <td><input type="text" name="visual_acuity_2"></td>
                  <td><input type="text" name="visual_acuity_3"></td>
                  <td><input type="text" name="visual_acuity_4"></td>
                </tr>
                <tr>
                  <td>Hearing:</td>
                  <td><input type="text" name="hearing_1"></td>
                  <td><input type="text" name="hearing_2"></td>
                  <td><input type="text" name="hearing_3"></td>
                  <td><input type="text" name="hearing_4"></td>
                </tr>
                <tr>
                  <td>Skin / Scalp:</td>
                  <td><input type="text" name="skin_scalp_1"></td>
                  <td><input type="text" name="skin_scalp_2"></td>
                  <td><input type="text" name="skin_scalp_3"></td>
                  <td><input type="text" name="skin_scalp_4"></td>
                </tr>
                <tr>
                  <td>Eyes / Ears / Nose:</td>
                  <td><input type="text" name="eyes_ears_nose_1"></td>
                  <td><input type="text" name="eyes_ears_nose_2"></td>
                  <td><input type="text" name="eyes_ears_nose_3"></td>
                  <td><input type="text" name="eyes_ears_nose_4"></td>
                </tr>
                <tr>
                  <td>Mouth / Throat / Neck:</td>
                  <td><input type="text" name="mouth_throat_neck_1"></td>
                  <td><input type="text" name="mouth_throat_neck_2"></td>
                  <td><input type="text" name="mouth_throat_neck_3"></td>
                  <td><input type="text" name="mouth_throat_neck_4"></td>
                </tr>
                <tr>
                  <td>Lungs / Heart:</td>
                  <td><input type="text" name="lungs_heart_1"></td>
                  <td><input type="text" name="lungs_heart_2"></td>
                  <td><input type="text" name="lungs_heart_3"></td>
                  <td><input type="text" name="lungs_heart_4"></td>
                </tr>
                <tr>
                  <td>GIT / GUT:</td>
                  <td><input type="text" name="git_gut_1"></td>
                  <td><input type="text" name="git_gut_2"></td>
                  <td><input type="text" name="git_gut_3"></td>
                  <td><input type="text" name="git_gut_4"></td>
                </tr>
                <tr>
                  <td>Spine / Extremities:</td>
                  <td><input type="text" name="spine_extremities_1"></td>
                  <td><input type="text" name="spine_extremities_2"></td>
                  <td><input type="text" name="spine_extremities_3"></td>
                  <td><input type="text" name="spine_extremities_4"></td>
                </tr>
                <tr>
                  <td>Others specify:</td>
                  <td><input type="text" name="others_specify_1"></td>
                  <td><input type="text" name="others_specify_2"></td>
                  <td><input type="text" name="others_specify_3"></td>
                  <td><input type="text" name="others_specify_4"></td>
                </tr>
                <tr>
                  <td>Recommendations:</td>
                  <td><input type="text" name="recommendations_1"></td>
                  <td><input type="text" name="recommendations_2"></td>
                  <td><input type="text" name="recommendations_3"></td>
                  <td><input type="text" name="recommendations_4"></td>
                </tr>
                <tr>
                  <td>Examined by:</td>
                  <td><input type="text" name="examined_by_1"></td>
                  <td><input type="text" name="examined_by_2"></td>
                  <td><input type="text" name="examined_by_3"></td>
                  <td><input type="text" name="examined_by_4"></td>
                </tr>
              </tbody>
            </table>
          </div>
          <button class="buttonReg" id="buttonReg" type="submit" name="register_student">Register</button>
        </form>

      </div>
    </div>
  </section>

  <script src="HN-HealthRec.js"></script>
</body>

</html>