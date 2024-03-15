<?php include_once("include/session.php");?>
<?php include_once("include/db_connect.php");?>
<?php include_once("include/functions.php");?>
<?php $token = $_SESSION["token"]; ?>
<?php  
if($token=$_POST['token']){
    
  $user_id        = test_input($_POST["user_id"]);
  $user_name      = test_input($_POST["user_name"]);
  $user_role      = test_input($_POST["user_role"]);
  
  $name           = test_input($_POST["name"]);
  $mobile         = test_input($_POST["mobile"]);
  $password       = test_input($_POST["password"]);
  $address        = test_input($_POST["address"]);
  $district       = test_input($_POST["district"]);
  $state          = test_input($_POST["state"]);
  $role          = test_input($_POST["role"]);
  


  $checkuser=check_mobile($con,$mobile);

  if($checkuser->rowCount()==0){
      
        $pass = password_hash($password, PASSWORD_DEFAULT);
    
     	$register=add_cooedinator($con,$user_id,$user_name,$user_role,$name,$mobile,$pass,$address,$district,$state,$role);
	
	
	    $response =true;
        $message  ='Registered successfully';
        $data     =$mobile;
    }
	else if($checkuser->rowCount()>0){
       $response =false;
       $message  ='Mobile number already registered with us';
       $data     =null;
    }
 
      $response= array('Response'=>$response,'Message'=>$message,'Data'=>$data);
      echo json_encode($response); 

 } 

?>