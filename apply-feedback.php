<?php require_once('manage/app/app_include/session.php'); ?>
<?php require_once('manage/app/app_include/function.php'); ?>
<?php include 'manage/app/action/class/front-class.php';?>
<?php 

//print_r($_POST);

if(isset($_POST['submit']) AND $_POST['name']){

         $name              = $_POST['name'];
         $mobile            = $_POST['mobile'];
         $t_date            = $_POST['date'];
         $district          = $_POST['district'];
         $trainingQuality   = $_POST['trainingQuality'];
         $trainingKit       = $_POST['trainingKit'];
         $foodQuality       = $_POST['foodQuality'];
         $satisfaction      = $_POST['satisfaction'];
         $benefit           = $_POST['benefit'];
         $futureTraining    = $_POST['futureTraining'];
         $other             = $_POST['other'];
         
      
         $front = new Front();
         $check = $front->training_check_mobile_district($mobile,$district);

         if($check>0){

            echo '<script>';
            echo 'alert("मोबाइल पहले से पंजीकृत है/ Mobile already Registered");';
            echo 'window.location = "feedback";';
            echo '</script>';

         }
         else{

         
            $row = $front->add_new_feedback(ucwords(strtolower($name)),$mobile,$t_date,$district,$trainingQuality,$trainingKit,$foodQuality,$satisfaction,$benefit,$futureTraining,$other);

            if($row !=null){
               echo '<script>';
               echo 'alert("प्रतिक्रिया सफलतापूर्वक दर्ज किया गया/ Application Submitted Successfully");';
               echo 'window.location = "feedback";';
               echo '</script>';
            }
            else{ 
               echo '<script>';
               echo 'alert("कुछ गलत हो गया/ Something went wrong");';
               echo 'window.location = "feedback";';
               echo '</script>';
            }


         }

   }
?>