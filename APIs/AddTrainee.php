<?php include_once("include/session.php");?>
<?php include_once("include/db_connect.php");?>
<?php include_once("include/functions.php");?>
<?php $token = $_SESSION["token"]; ?>
<?php  
if($token=$_POST['token']){
    
  $user_id        = test_input($_POST["user_id"]);
  $supervisor_id  = test_input($_POST["supervisor_id"]);
  
  $user_name      = test_input($_POST["user_name"]);
  $user_role      = test_input($_POST["user_role"]);
  
  $event_id       = test_input($_POST["event_id"]);
  $name            = test_input($_POST["name"]);
  $mobile         = test_input($_POST["mobile"]);
  $email          = test_input($_POST["email"]);
  $org            = test_input($_POST["org"]);
  $aadhaar         = test_input($_POST["aadhaar"]);
  $address        = test_input($_POST["address"]);
  $district       = test_input($_POST["district"]);
  $state          = test_input($_POST["state"]);
  $aadhaar_image  = test_input($_POST["aadhaar_image"]);
  
  


  $checkuser=check_trainee($con,$mobile,$aadhaar);

  if($checkuser->rowCount()==0){

    define('UPLOAD_DIR', 'images/aadhaar/');
 

     $image_parts      = explode(";base64,", $aadhaar_image);
     $image_type_aux   = explode("image/", $image_parts[0]);
     $image_type       = $image_type_aux[0];
     $image_base64     = base64_decode($image_parts[0]);
       
     $image_name       =$event_id.'_'.$aadhaar.'.jpg';
     $s_pic            = UPLOAD_DIR . $image_name;
     file_put_contents($s_pic, $image_base64);
      
     	$register=trainee_registration($con,$user_id,$supervisor_id,$user_name,$user_role,$event_id,$name,$mobile,$email,$org,$aadhaar,$address,$district,$state);
	
	    $response =true;
        $message  ='Registered successfully';
        $data     =$mobile;
    }
	else if($checkuser->rowCount()>0){
       $response =false;
       $message  ='Aadhaar number already registered';
       $data     =null;
    }
 
      $response= array('Response'=>$response,'Message'=>$message,'Data'=>$data);
      echo json_encode($response); 

 } 

?>