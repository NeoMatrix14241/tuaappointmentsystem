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
      <i class='bx bx-menu' ></i>
    </div>

    <div>
      <div id="registrationTab" class="tabcontent active">
        <form id="registration">
        <div class="logo-image">
            <img src="TUALOGO.png" class="tualogo">
        </div>
        <div><h2 class="tuatitle">TRINITY UNIVERSITY OF ASIA</h2></div>
        <div><h4 class="mdutitle">Medical and Dental Unit</h4></div>
        <div><h5 class="healthrectitle">HEALTH RECORD</h5></div>
        
        

            <div class="solid">

                <div class="studentno-group">
                    <label for="studentno">Student No. :</label>
                    <input type="number" class="form-control" id="studentno" required>
                </div>

                <div class="course-group">
                    <div>
                    <label for="medicalcourse">Course :</label></div>
                    <select id="dentalCourse" name="course">
                    <option value="CAHS">College of Allied Health Sciences</option>
                    <option value="CASE">College of Arts, Sciences and Education</option>
                    <option value="CBMA">College of Business Management and Accountancy</option>
                    <option value="CEIS">College of Engineering and Information Sciences</option>
                    <option value="CHTM">College of Hospitality and Tourism Management</option>
                    <option value="CMT">College of Medical Technology</option>
                    <option value="SLCN">St. Luke's College of Nursing</option>
                    </select>
                    </div>

                <div class="yrlvl-group">
                    <label for="yrlvl">Year Level :</label>
                    <input type="number" class="form-control" id="yrlvl" required>
                </div>

                <div class="lname-group">
                    <label for="lname">Last Name :</label>
                    <input type="text" class="form-control" id="lname" required>
                </div>

                <div class="fname-group">
                    <label for="fname">First Name :</label>
                    <input type="text" class="form-control" id="fname" required>
                </div>

                <div class="mname-group">
                    <label for="mname">Middle Name :</label>
                    <input type="text" class="form-control" id="mname" required>
                </div>

                <div class="age-group">
                    <label for="age">Age :</label>
                    <input type="number" class="form-control" id="age" required>
                </div>

                <div class="dateofbirth-group">
                    <label for="age">Date of Birth :</label>
                    <input type="date" class="form-control" id="dateofbirth" required>
                </div>

                <div class="gender-group">
                    <label for="gender">Gender :</label>
                    <select class="form-control" id="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <div class="address-group">
                    <label for="address">Address :</label>
                    <input type="text" class="form-control" id="address" required>
                </div>

                <div class="contactpatient">
                    <label for="telephone">Contact No. :</label>
                    <input type="tel" class="form-control" id="contactpatient" required>
                </div>

                <div class="nationality-group">
                    <label for="address">Nationality :</label>
                    <input type="text" class="form-control" id="nationality" required>
                </div>

                <div class="nameofparentguardian-group">
                    <label for="guardian">Name of Parent/Guardian :</label>
                    <input type="text" class="form-control" id="nameofparentguardian" required>
                </div>

                <div class="contactparentguardian-group">
                    <label for="telephone">Contact No. :</label>
                    <input type="tel" class="form-control" id="contactparentguardian" required>
                </div>
            </div>

            <div><h5 class="healthhistorytitle">HEALTH HISTORY</h5></div>


                <div class="row">
                    <div class="col-sm-4">
                        <div class="immunization-col">
                <div><h5 class="immunizationtitle">Immunization</h5></div>

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
                    <input type="text" class="form-control" id="othersspecify" required>
                </div>
                    </div>
                </div>


                    <div class="col-sm-4">
                        <div class="familyhealthhistory-col">
                <div><h5 class="familyhealthhistory">Family Health History</h5></div>

                <div class="father-group">
                    <label class="father">Father :</label>
                    <input type="text" class="form-control" id="father" required>
                </div>

                <div class="mother-group">
                    <label class="mother">Mother :</label>
                    <input type="text" class="form-control" id="mother" required>
                </div>

                <div class="siblings-group">
                    <label class="siblings">Siblings :</label>
                    <input type="text" class="form-control" id="siblings" required>
                </div>
                </div>
                </div>

                    <div class="col-sm-4">
                        <div class="previousillness-col">
                <div><h5 class="previousillness">Previous Illness</h5></div>

                <div class="childhood-group">
                    <label class="childhood">Childhood :</label>
                    <input type="text" class="form-control" id="childhood" required>
                </div>

                <div class="adulthood-group">
                    <label class="adulthood">Adulthood :</label>
                    <input type="text" class="form-control" id="adulthood" required>
                </div>
                </div>
                </div>
                <div class="allergies-group">
                    <label class="allergies">Allergies :</label>
                    <input type="text" class="form-control" id="allergies" required>
                </div>

                <div class="incaseofem-group">
                    <label class="incaseofem">Preffered hospital if in case of emergency :</label>
                    <input type="text" class="form-control" id="incaseofem" required>
                </div>
            </div>

                <div><h5 class="physicalexam">PHYSICAL EXAMINATIONS</h5></div>
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
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                  </tr>
                  <tr>
                    <td>Height / Weight:</td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                  </tr>
                  <tr>
                    <td>Temperature / BP:</td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                  </tr>
                  <tr>
                    <td>HR / PR / RR:</td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                  </tr>
                  <tr>
                    <td>Nutritional Status:</td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                  </tr>
                  <tr>
                    <td>Visual Acuity:</td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                  </tr>
                  <tr>
                    <td>Hearing:</td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                  </tr>
                  <tr>
                    <td>Skin / Scalp:</td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                  </tr>
                  <tr>
                    <td>Visual Acuity:</td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                  </tr>
                  <tr>
                    <td>Hearing:</td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                  </tr>
                  <tr>
                    <td>Skin / Scalp:</td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                  </tr>
                  <tr>
                    <td>Eyes / Ears / Nose:</td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                  </tr>
                  <tr>
                    <td>Mouth / Throat / Neck:</td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                  </tr>
                  <tr>
                    <td>Lungs / Heart:</td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                  </tr>
                  <tr>
                    <td>GIT / GUT:</td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                  </tr>
                  <tr>
                    <td>Spine / Extremities:</td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                  </tr>
                  <tr>
                    <td>Others specify:</td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                  </tr>
                  <tr>
                    <td>Recommendations:</td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                  </tr>
                  <tr>
                    <td>Examined by:</td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <button class="buttonReg" id="buttonReg" type="button" onclick="registerPatient()">Register</button>
        </form>
        
    </div>
    </div>
  </section>

  <script src="HN-HealthRec.js"></script>
</body>
</html>