<?php include_once("include/session.php");?>
<?php include_once("include/db_connect.php");?>
<?php include_once("include/functions.php");?>
<?php $token = $_SESSION["token"]; ?>
<?php  
if($token=$_POST['token']){
    
  $user_id        = test_input($_POST["user_id"]);
  $user_name      = test_input($_POST["user_name"]);
  $user_role      = test_input($_POST["user_role"]);
  
  
  $supervisor_id     = test_input($_POST["supervisor_id"]);
  $supervisor_name   = test_input($_POST["supervisor_name"]);
  $coordinator_id     = test_input($_POST["coordinator_id"]);
  $coordinator_name   = test_input($_POST["coordinator_name"]);
  $batch_name        = test_input($_POST["batch_name"]);
  $start_date     = test_input($_POST["start_date"]);
  $end_date       = test_input($_POST["end_date"]);
  $address        = test_input($_POST["address"]);
  $district       = test_input($_POST["district"]);
  $state          = test_input($_POST["state"]);

  $new_district = str_replace(' ', '-', $district);
  $event_name='MS-'.$new_district.'-'.$batch_name;

  $check=check_batch($con,$batch_name,$district);

  if($check->rowCount()==0){

    $add_new_event=add_new_event($con,$user_id,$user_name,$user_role,$supervisor_id,$supervisor_name,$coordinator_id,$coordinator_name,$event_name,$batch_name,$start_date,$end_date,$address,$district,$state);
   
    if($add_new_event!=null){
       
     $response =true;
     $message  ='Event created successfully';
     $data     =$event_type;
    }
  }
  else if($check->rowCount()>0){

    $response =false;
    $message  ='Batch already created';
    $data     =$batch_name;


  }
 
    $response= array('Response'=>$response,'Message'=>$message,'Data'=>$data);
    echo json_encode($response); 

 } 

?>