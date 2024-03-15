<?php include_once("include/session.php");?>
<?php include_once("include/db_connect.php");?>
<?php include_once("include/functions.php");?>
<?php $token = $_SESSION["token"]; ?>
<?php  
if($token=isset($_POST["token"])){
    
    
  $user_id          = test_input($_POST["user_id"]);
  $event_id         = test_input($_POST["event_id"]);
  $event_district   = test_input($_POST["event_district"]);
  $e_image          = test_input($_POST["e_image"]);
  $image_category   = test_input($_POST["image_category"]);


  if($image_category=='Picture'){
    define('UPLOAD_DIR', 'images/event/');
  }
  else if($image_category=='Attendance'){
    define('UPLOAD_DIR', 'images/attendance/');
  }
  else if($image_category=='Mudra'){
    define('UPLOAD_DIR', 'images/mudra/');
  }
  else if($image_category=='Registration'){
    define('UPLOAD_DIR', 'images/registration/');
  }
  else{
    define('UPLOAD_DIR', 'images/event/');
  }


   $image_parts      = explode(";base64,", $e_image);
   $image_type_aux   = explode("image/", $image_parts[0]);
   $image_type       = $image_type_aux[0];
   $image_base64     = base64_decode($image_parts[0]);
     
   $image_name       =$event_district.'_'.$event_id.'_'.rand(000,999).'.'.'jpg';
   $s_pic            = UPLOAD_DIR . $image_name;
   file_put_contents($s_pic, $image_base64);

    $add   = add_event_image($con,$user_id,$event_id,$image_category,$image_name);


    if ($add!=null) {

     $response =true;
     $message  ='Picture added successfully';
     $data     =$event_id;
     
    }

  $response= array('Response'=>$response,'Message'=>$message,'Data'=>$data);
  echo json_encode($response); 

}  
                  
?>