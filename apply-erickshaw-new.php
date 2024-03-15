<?php require_once('manage/app/app_include/session.php'); ?>
<?php require_once('manage/app/app_include/function.php'); ?>
<?php include 'manage/app/action/class/front-class.php';?>
<?php 
   if(isset($_POST['submit']) AND $_POST['name']){
         $supervisor= $_POST['supervisor'];
         $name      = $_POST['name'];
         $dob       = $_POST['dob'];
         $mobile    = $_POST['mobile'];
         $a_mobile  = $_POST['a_mobile'];
         $aadhar    = $_POST['aadhar'];
         $pan_no    = $_POST['pan_no'];
         $address   = $_POST['address'];
         $email     = $_POST['email'];
         $district  = $_POST['district'];
         $business  = $_POST['business'];
         $vahan     = $_POST['vahan'];

         $front = new Front();
         $check = $front->ev_check_aadhar_pan($aadhar,$pan_no);
         if($check>0){

            echo '<script>';
            echo 'alert("आधार या पैन पहले से पंजीकृत है/ Aadhar or PAN already Registered");';
            echo 'window.location = "erickshaw-application-new";';
            echo '</script>';

         }

         else{

            // Use regular expressions to extract the number
            if (preg_match('/\((\d+)\)/', $supervisor, $matches)) {
               $number = $matches[1]; // Extracted number
               // echo "Extracted Number: " . $number;
           } 
           else {
               // echo "No number found in input string.";
           }
           
            $row = $front->add_ev_application(ucwords(strtolower($name)),$dob,$mobile,$a_mobile,$aadhar,$pan_no,ucwords(strtolower($address)),$email,$district,ucwords(strtolower($business)),$vahan,$number);

            if($row !=null){
              echo '<script>';
              echo 'alert("आवेदन सफलतापूर्वक प्रस्तुत किया गया/ Application Submitted Successfully");';
              echo 'window.location = "erickshaw-application-new";';
              echo '</script>';
           }
           else{ 
              echo '<script>';
              echo 'alert("कुछ गलत हो गया/ Something went wrong");';
              echo 'window.location = "erickshaw-application-new";';
              echo '</script>';
           }
      
         } 
        
   }
       
?>