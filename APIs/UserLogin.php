<?php include_once("include/session.php");?>
<?php include_once("include/db_connect.php");?>
<?php include_once("include/functions.php");?>
<?php $token = $_SESSION["token"]; ?>
<?php  
if($token=isset($_POST["token"])){
        
  $mobile      = test_input($_POST["mobile"]);
  $password    = test_input($_POST["password"]);
  $device      = test_input($_POST["device"]);
  

  $u_login=  user_login($con,$mobile,$password,$device);

  if(is_array($u_login)){

    $response =true;
    $message  ='User has been log in successfully';
    $data     =$u_login;   
             
  }
  else if ($u_login==1) {
    $response =false;
    $message  ='Invalid password';
    $data     =$u_login;   
  }
  else if ($u_login==0) {
    $response =false;
    $message  ='Inactive account';
    $data     =$u_login;   
  }
  else if ($u_login==2) {
    $response =false;
    $message  ='Mobile number not register';
    $data     =$u_login;   
  }
  
  
  $response= array('Response'=>$response,'Message'=>$message,'Data'=>$data);
  echo json_encode($response); 

    
} 

?>