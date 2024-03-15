<?php require_once('manage/app/app_include/session.php'); ?>
<?php require_once('manage/app/app_include/function.php'); ?>
<?php include 'manage/app/action/class/front-class.php';?>
<?php 

   if(isset($_POST['submit']) AND $_POST['name']){

         $name      = $_POST['name'];
         $dob       = $_POST['dob'];
         $mobile    = $_POST['mobile'];
         $a_mobile  = $_POST['a_mobile'];
         $address   = $_POST['address'];
         $aadhar    = $_POST['aadhar'];
         $district  = $_POST['district'];
      
         $front = new Front();
         $check = $front->training_check_aadhar($aadhar);
         if($check>0){

            echo '<script>';
            echo 'alert("आधार पहले से पंजीकृत है/ Aadhar already Registered");';
            echo 'window.location = "training-application";';
            echo '</script>';

         }
         else{

         
            $row = $front->add_training_application(ucwords(strtolower($name)),$dob,$mobile,$a_mobile,ucwords(strtolower($address)),$aadhar,$district,'0');

            if($row !=null){
               echo '<script>';
               echo 'alert("आवेदन सफलतापूर्वक प्रस्तुत किया गया/ Application Submitted Successfully");';
               echo 'window.location = "training-application";';
               echo '</script>';
            }
            else{ 
               echo '<script>';
               echo 'alert("कुछ गलत हो गया/ Something went wrong");';
               echo 'window.location = "training-application";';
               echo '</script>';
            }


         }

   }
?>