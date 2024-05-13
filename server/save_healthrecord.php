<?php

require_once 'db.php';


// ============================= HEALTH RECORD VARIABLES =============================

$student_id = isset($_POST['student_id']) ? $db->real_escape_string($_POST['student_id']) : null;
$temp_password = isset($_POST['temp_password']) ? $db->real_escape_string($_POST['temp_password']) : '';
$course = isset($_POST['course']) ? $db->real_escape_string($_POST['course']) : null;
$year_level = isset($_POST['yr_lvl']) ? $db->real_escape_string($_POST['yr_lvl']) : null;
$last_name = isset($_POST['last_name']) ? $db->real_escape_string($_POST['last_name']) : null;
$first_name = isset($_POST['first_name']) ? $db->real_escape_string($_POST['first_name']) : null;
$middle_name = isset($_POST['middle_name']) ? $db->real_escape_string($_POST['middle_name']) : null;

$age = isset($_POST['age']) ? $db->real_escape_string($_POST['age']) : null;
$birthdate = isset($_POST['birthdate']) ? $db->real_escape_string($_POST['birthdate']) : null;
$gender = isset($_POST['gender']) ? $db->real_escape_string($_POST['gender']) : null;
$address = isset($_POST['address']) ? $db->real_escape_string($_POST['address']) : null;
$contact = isset($_POST['contact']) ? $db->real_escape_string($_POST['contact']) : null;
$nationality = isset($_POST['nationality']) ? $db->real_escape_string($_POST['nationality']) : null;
$parent_guardian = isset($_POST['parent_guardian']) ? $db->real_escape_string($_POST['parent_guardian']) : null;
$parent_guardian_contact = isset($_POST['parent_guardian_contact']) ? $db->real_escape_string($_POST['parent_guardian_contact']) : null;


// ============================= HEALTH HISTORY VARIABLES =============================

// IMMUNIZATION
$bcg = isset($_POST['bcg']) ? 1 : 0;
$dpt_opv = isset($_POST['dpt_opv']) ? 1 : 0;
$dpt_opv_value = isset($_POST['dpt_opv_radio']) ? $_POST['dpt_opv_radio'] : null;
$hib = isset($_POST['hib']) ? 1 : 0;
$hib_value = isset($_POST['hib_radio']) ? $_POST['hib_radio'] : null;
$measles_vaccine = isset($_POST['measlesvacc']) ? 1 : 0;
$mmr = isset($_POST['mmr']) ? 1 : 0;
$chickenpox_vaccine = isset($_POST['chickenpoxvacc']) ? 1 : 0;
$hepaA = isset($_POST['hepaA']) ? 1 : 0;
$hepaA_value = isset($_POST['hepaA_radio']) ? $_POST['hepaA_radio'] : null;
$hepaB = isset($_POST['hepaB']) ? 1 : 0;
$hepaB_value = isset($_POST['hepaB_radio']) ? $_POST['hepaB_radio'] : null;
$typhoid_vaccine = isset($_POST['typhoidvacc']) ? 1 : 0;
$influenza_vaccine = isset($_POST['influenzia']) ? 1 : 0;
$others_specify_health_history = isset($_POST['othersspecify']) ? $_POST['othersspecify'] : null;

// FAMILY HEALTH HISTORY
$father = isset($_POST['father']) ? $db->real_escape_string($_POST['father']) : null;
$mother = isset($_POST['mother']) ? $db->real_escape_string($_POST['mother']) : null;
$siblings = isset($_POST['siblings']) ? $db->real_escape_string($_POST['siblings']) : null;

//PREVIOUS ILLNESS
$childhood = isset($_POST['childhood']) ? $db->real_escape_string($_POST['childhood']) : null;
$adulthood = isset($_POST['adulthood']) ? $db->real_escape_string($_POST['adulthood']) : null;
$allergies = isset($_POST['allergies']) ? $db->real_escape_string($_POST['allergies']) : null;
$preferredhospital = isset($_POST['preferredhospital']) ? $db->real_escape_string($_POST['preferredhospital']) : null;


// ============================= PHYSICAL EXAMINATION VARIABLES =============================

// DATE (1ST, 2ND, 3RD, 4TH YEAR)
$date_1 = isset($_POST['date_1']) ? $db->real_escape_string($_POST['date_1']) : null;
$date_2 = isset($_POST['date_2']) ? $db->real_escape_string($_POST['date_2']) : null;
$date_3 = isset($_POST['date_3']) ? $db->real_escape_string($_POST['date_3']) : null;
$date_4 = isset($_POST['date_4']) ? $db->real_escape_string($_POST['date_4']) : null;

// HEIGHT / WEIGHT (1ST, 2ND, 3RD, 4TH YEAR)
$height_weight_1 = isset($_POST['height_weight_1']) ? $db->real_escape_string($_POST['height_weight_1']) : null;
$height_weight_2 = isset($_POST['height_weight_2']) ? $db->real_escape_string($_POST['height_weight_2']) : null;
$height_weight_3 = isset($_POST['height_weight_3']) ? $db->real_escape_string($_POST['height_weight_3']) : null;
$height_weight_4 = isset($_POST['height_weight_4']) ? $db->real_escape_string($_POST['height_weight_4']) : null;

// TEMPERATURE /BP (1ST, 2ND, 3RD, 4TH YEAR)
$temperature_bp_1 = isset($_POST['temperature_bp_1']) ? $db->real_escape_string($_POST['temperature_bp_1']) : null;
$temperature_bp_2 = isset($_POST['temperature_bp_2']) ? $db->real_escape_string($_POST['temperature_bp_2']) : null;
$temperature_bp_3 = isset($_POST['temperature_bp_3']) ? $db->real_escape_string($_POST['temperature_bp_3']) : null;
$temperature_bp_4 = isset($_POST['temperature_bp_4']) ? $db->real_escape_string($_POST['temperature_bp_4']) : null;

// HR / PR / RR (1ST, 2ND, 3RD, 4TH YEAR)
$hr_pr_rr_1 = isset($_POST['hr_pr_rr_1']) ? $db->real_escape_string($_POST['hr_pr_rr_1']) : null;
$hr_pr_rr_2 = isset($_POST['hr_pr_rr_2']) ? $db->real_escape_string($_POST['hr_pr_rr_2']) : null;
$hr_pr_rr_3 = isset($_POST['hr_pr_rr_3']) ? $db->real_escape_string($_POST['hr_pr_rr_3']) : null;
$hr_pr_rr_4 = isset($_POST['hr_pr_rr_4']) ? $db->real_escape_string($_POST['hr_pr_rr_4']) : null;

// NUTRITIONAL STATUS (1ST, 2ND, 3RD, 4TH YEAR)
$nutritional_status_1 = isset($_POST['nutritional_status_1']) ? $db->real_escape_string($_POST['nutritional_status_1']) : null;
$nutritional_status_2 = isset($_POST['nutritional_status_2']) ? $db->real_escape_string($_POST['nutritional_status_2']) : null;
$nutritional_status_3 = isset($_POST['nutritional_status_3']) ? $db->real_escape_string($_POST['nutritional_status_3']) : null;
$nutritional_status_4 = isset($_POST['nutritional_status_4']) ? $db->real_escape_string($_POST['nutritional_status_4']) : null;

// VISUAL ACUITY (1ST, 2ND, 3RD, 4TH YEAR)
$visual_acuity_1 = isset($_POST['visual_acuity_1']) ? $db->real_escape_string($_POST['visual_acuity_1']) : null;
$visual_acuity_2 = isset($_POST['visual_acuity_2']) ? $db->real_escape_string($_POST['visual_acuity_2']) : null;
$visual_acuity_3 = isset($_POST['visual_acuity_3']) ? $db->real_escape_string($_POST['visual_acuity_3']) : null;
$visual_acuity_4 = isset($_POST['visual_acuity_4']) ? $db->real_escape_string($_POST['visual_acuity_4']) : null;

// HEARING (1ST, 2ND, 3RD, 4TH YEAR)
$hearing_1 = isset($_POST['hearing_1']) ? $db->real_escape_string($_POST['hearing_1']) : null;
$hearing_2 = isset($_POST['hearing_2']) ? $db->real_escape_string($_POST['hearing_2']) : null;
$hearing_3 = isset($_POST['hearing_3']) ? $db->real_escape_string($_POST['hearing_3']) : null;
$hearing_4 = isset($_POST['hearing_4']) ? $db->real_escape_string($_POST['hearing_4']) : null;

// SKIN / SCALP (1ST, 2ND, 3RD, 4TH YEAR)
$skin_scalp_1 = isset($_POST['skin_scalp_1']) ? $db->real_escape_string($_POST['skin_scalp_1']) : null;
$skin_scalp_2 = isset($_POST['skin_scalp_2']) ? $db->real_escape_string($_POST['skin_scalp_2']) : null;
$skin_scalp_3 = isset($_POST['skin_scalp_3']) ? $db->real_escape_string($_POST['skin_scalp_3']) : null;
$skin_scalp_4 = isset($_POST['skin_scalp_4']) ? $db->real_escape_string($_POST['skin_scalp_4']) : null;

// EYES / EARS/ NOSE (1ST, 2ND, 3RD, 4TH YEAR)
$eyes_ears_nose_1 = isset($_POST['eyes_ears_nose_1']) ? $db->real_escape_string($_POST['eyes_ears_nose_1']) : null;
$eyes_ears_nose_2 = isset($_POST['eyes_ears_nose_2']) ? $db->real_escape_string($_POST['eyes_ears_nose_2']) : null;
$eyes_ears_nose_3 = isset($_POST['eyes_ears_nose_3']) ? $db->real_escape_string($_POST['eyes_ears_nose_3']) : null;
$eyes_ears_nose_4 = isset($_POST['eyes_ears_nose_4']) ? $db->real_escape_string($_POST['eyes_ears_nose_4']) : null;

// MOUTH / THROAT / NECK (1ST, 2ND, 3RD, 4TH YEAR)
$mouth_throat_neck_1 = isset($_POST['mouth_throat_neck_1']) ? $db->real_escape_string($_POST['mouth_throat_neck_1']) : null;
$mouth_throat_neck_2 = isset($_POST['mouth_throat_neck_2']) ? $db->real_escape_string($_POST['mouth_throat_neck_2']) : null;
$mouth_throat_neck_3 = isset($_POST['mouth_throat_neck_3']) ? $db->real_escape_string($_POST['mouth_throat_neck_3']) : null;
$mouth_throat_neck_4 = isset($_POST['mouth_throat_neck_4']) ? $db->real_escape_string($_POST['mouth_throat_neck_4']) : null;

// LUNGS / HEART (1ST, 2ND, 3RD, 4TH YEAR)
$lungs_heart_1 = isset($_POST['lungs_heart_1']) ? $db->real_escape_string($_POST['lungs_heart_1']) : null;
$lungs_heart_2 = isset($_POST['lungs_heart_2']) ? $db->real_escape_string($_POST['lungs_heart_2']) : null;
$lungs_heart_3 = isset($_POST['lungs_heart_3']) ? $db->real_escape_string($_POST['lungs_heart_3']) : null;
$lungs_heart_4 = isset($_POST['lungs_heart_4']) ? $db->real_escape_string($_POST['lungs_heart_4']) : null;

// GIT / GUT (1ST, 2ND, 3RD, 4TH YEAR)

$git_gut_1 = isset($_POST['git_gut_1']) ? $db->real_escape_string($_POST['git_gut_1']) : null;
$git_gut_2 = isset($_POST['git_gut_2']) ? $db->real_escape_string($_POST['git_gut_2']) : null;
$git_gut_3 = isset($_POST['git_gut_3']) ? $db->real_escape_string($_POST['git_gut_3']) : null;
$git_gut_4 = isset($_POST['git_gut_4']) ? $db->real_escape_string($_POST['git_gut_4']) : null;

// SPINE / EXTREMITIES (1ST, 2ND, 3RD, 4TH YEAR)
$spine_extremities_1 = isset($_POST['spine_extremities_1']) ? $db->real_escape_string($_POST['spine_extremities_1']) : null;
$spine_extremities_2 = isset($_POST['spine_extremities_2']) ? $db->real_escape_string($_POST['spine_extremities_2']) : null;
$spine_extremities_3 = isset($_POST['spine_extremities_3']) ? $db->real_escape_string($_POST['spine_extremities_3']) : null;
$spine_extremities_4 = isset($_POST['spine_extremities_4']) ? $db->real_escape_string($_POST['spine_extremities_4']) : null;

// OTHERS SPECIFY (1ST, 2ND, 3RD, 4TH YEAR)
$others_specify_1 = isset($_POST['others_specify_1']) ? $db->real_escape_string($_POST['others_specify_1']) : null;
$others_specify_2 = isset($_POST['others_specify_2']) ? $db->real_escape_string($_POST['others_specify_2']) : null;
$others_specify_3 = isset($_POST['others_specify_3']) ? $db->real_escape_string($_POST['others_specify_3']) : null;
$others_specify_4 = isset($_POST['others_specify_4']) ? $db->real_escape_string($_POST['others_specify_4']) : null;

// RECOMMENDATIONS (1ST, 2ND, 3RD, 4TH YEAR)
$recommendations_1 = isset($_POST['recommendations_1']) ? $db->real_escape_string($_POST['recommendations_1']) : null;
$recommendations_2 = isset($_POST['recommendations_2']) ? $db->real_escape_string($_POST['recommendations_2']) : null;
$recommendations_3 = isset($_POST['recommendations_3']) ? $db->real_escape_string($_POST['recommendations_3']) : null;
$recommendations_4 = isset($_POST['recommendations_4']) ? $db->real_escape_string($_POST['recommendations_4']) : null;

// EXAMINED BY (1ST, 2ND, 3RD, 4TH YEAR)
$examined_by_1 = isset($_POST['examined_by_1']) ? $db->real_escape_string($_POST['examined_by_1']) : null;
$examined_by_2 = isset($_POST['examined_by_2']) ? $db->real_escape_string($_POST['examined_by_2']) : null;
$examined_by_3 = isset($_POST['examined_by_3']) ? $db->real_escape_string($_POST['examined_by_3']) : null;
$examined_by_4 = isset($_POST['examined_by_4']) ? $db->real_escape_string($_POST['examined_by_4']) : null;


// ============================= HEALTH RECORD FORM SUBMISSION (REGISTER) =============================

$is_reset = "false";
$is_admin = "false";
$password_encrypt = $temp_password !== '' ? md5($temp_password) : null;

try {
    if (isset($_POST['register_student'])) {
        $register_student_main = $db->prepare("INSERT INTO useraccounts (student_id, firstname, middle_initial, lastname, username, password, temp_password, is_reset, is_admin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $register_student_main->bind_param("issssssss", $student_id, $first_name, $middle_name, $last_name, $student_id, $password_encrypt, $temp_password, $is_reset, $is_admin);
        $register_student_main->execute();
        $register_student_main->close();

        $register_student_profile = $db->prepare("INSERT INTO useraccounts_profile (student_id, course, year_level, age, birthdate, gender, address, contact, nationality, parentguardian, parentguardian_contact) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $register_student_profile->bind_param("ississsssss", $student_id, $course, $year_level, $age, $birthdate, $gender, $address, $contact, $nationality, $parent_guardian, $parent_guardian_contact);
        $register_student_profile->execute();
        $register_student_profile->close();

        $register_student_healthhistory = $db->prepare("INSERT INTO useraccounts_healthhistory (student_id, bcg, dpt_opv, dpt_opv_enum, hib, hib_enum, vaccine_measles, mmr, vaccine_chickenpox, hepa_a, hepa_a_enum, hepa_b, hepa_b_enum, typhoid_vaccine, influenza, others_specify, father, mother, siblings, childhood, adulthood, allergies, preferred_hospital) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $register_student_healthhistory->bind_param("iiisisiiiisisiissssssss", $student_id, $bcg, $dpt_opv, $dpt_opv_value, $hib, $hib_value, $measles_vaccine, $mmr, $chickenpox_vaccine, $hepaA, $hepaA_value, $hepaB, $hepaB_value, $typhoid_vaccine, $influenza_vaccine, $others_specify_health_history, $father, $mother, $siblings, $childhood, $adulthood, $allergies, $preferredhospital);
        $register_student_healthhistory->execute();
        $register_student_healthhistory->close();

        $register_student_physicalexams = $db->prepare("INSERT INTO useraccounts_physicalexams (student_id, date_1, date_2, date_3, date_4, height_weight_1, height_weight_2, height_weight_3, height_weight_4, temperature_1, temperature_2, temperature_3, temperature_4, hr_pr_rr_1, hr_pr_rr_2, hr_pr_rr_3, hr_pr_rr_4, nutritional_status_1, nutritional_status_2, nutritional_status_3, nutritional_status_4, visual_acuity_1, visual_acuity_2, visual_acuity_3, visual_acuity_4, hearing_1, hearing_2, hearing_3, hearing_4, skin_scalp_1, skin_scalp_2, skin_scalp_3, skin_scalp_4, eyes_ears_nose_1, eyes_ears_nose_2, eyes_ears_nose_3, eyes_ears_nose_4, mouth_throat_neck_1, mouth_throat_neck_2, mouth_throat_neck_3, mouth_throat_neck_4, lungs_heart_1, lungs_heart_2, lungs_heart_3, lungs_heart_4, git_gut_1, git_gut_2, git_gut_3, git_gut_4, spine_extremities_1, spine_extremities_2, spine_extremities_3, spine_extremities_4, others_specify_1, others_specify_2, others_specify_3, others_specify_4, recommendations_1, recommendations_2, recommendations_3, recommendations_4, examined_by_1, examined_by_2, examined_by_3, examined_by_4) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $register_student_physicalexams->bind_param(
            "issssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss",
            $student_id,                // i - integer
            $date_1,                    // s - string
            $date_2,                    // s - string
            $date_3,                    // s - string
            $date_4,                    // s - string
            $height_weight_1,           // s - string
            $height_weight_2,           // s - string
            $height_weight_3,           // s - string
            $height_weight_4,           // s - string
            $temperature_bp_1,          // s - string
            $temperature_bp_2,          // s - string
            $temperature_bp_3,          // s - string
            $temperature_bp_4,          // s - string
            $hr_pr_rr_1,                // s - string
            $hr_pr_rr_2,                // s - string
            $hr_pr_rr_3,                // s - string
            $hr_pr_rr_4,                // s - string
            $nutritional_status_1,      // s - string
            $nutritional_status_2,      // s - string
            $nutritional_status_3,      // s - string
            $nutritional_status_4,      // s - string
            $visual_acuity_1,           // s - string
            $visual_acuity_2,           // s - string
            $visual_acuity_3,           // s - string
            $visual_acuity_4,           // s - string
            $hearing_1,                 // s - string
            $hearing_2,                 // s - string
            $hearing_3,                 // s - string
            $hearing_4,                 // s - string
            $skin_scalp_1,              // s - string
            $skin_scalp_2,              // s - string
            $skin_scalp_3,              // s - string
            $skin_scalp_4,              // s - string
            $eyes_ears_nose_1,          // s - string
            $eyes_ears_nose_2,          // s - string
            $eyes_ears_nose_3,          // s - string
            $eyes_ears_nose_4,          // s - string
            $mouth_throat_neck_1,       // s - string
            $mouth_throat_neck_2,       // s - string
            $mouth_throat_neck_3,       // s - string
            $mouth_throat_neck_4,       // s - string
            $lungs_heart_1,             // s - string
            $lungs_heart_2,             // s - string
            $lungs_heart_3,             // s - string
            $lungs_heart_4,             // s - string
            $git_gut_1,                 // s - string
            $git_gut_2,                 // s - string
            $git_gut_3,                 // s - string
            $git_gut_4,                 // s - string
            $spine_extremities_1,       // s - string
            $spine_extremities_2,       // s - string
            $spine_extremities_3,       // s - string
            $spine_extremities_4,       // s - string
            $others_specify_1,          // s - string
            $others_specify_2,          // s - string
            $others_specify_3,          // s - string
            $others_specify_4,          // s - string
            $recommendations_1,         // s - string
            $recommendations_2,         // s - string
            $recommendations_3,         // s - string
            $recommendations_4,         // s - string
            $examined_by_1,             // s - string
            $examined_by_2,             // s - string
            $examined_by_3,             // s - string
            $examined_by_4              // s - string
        );
        $register_student_physicalexams->execute();
        $register_student_physicalexams->close();

        header('location: HN-HealthRec.php');
        exit() or die();
    }
} catch (Exception $e) {
    // DEBUGGER ONLY, ADD ERROR LOGS HERE
    echo '<script>alert("Error: ' . $e->getMessage() . '\nLine: ' . $e->getLine() . '\nFile: ' . $e->getFile() . '");</script>';
}

?>