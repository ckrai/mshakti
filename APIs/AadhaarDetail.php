<?php include_once("include/session.php");?>
<?php include_once("include/db_connect.php");?>
<?php include_once("include/functions.php");?>
<?php $token = $_SESSION["token"]; ?>
<?php  
if($token=isset($_POST["token"])){
    

  $image          = test_input($_POST["image"]);
 

  //$url = 'http://65.0.61.109/text/aadhar_front';
  $url = 'http://43.204.116.224/text/aadhar_front';

   $post_data = array('image' => $image);

   $ch = curl_init($url);
   curl_setopt($ch, CURLOPT_POST, 1);
   curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

   $response_from_api = curl_exec($ch);

   if ($response_from_api === false) {
      // Handle any errors that occurred during the request
      echo 'Curl error: ' . curl_error($ch);
   } 
   else {
      // Handle the response from the API (if needed)
      echo $response_from_api;

    
   }
   curl_close($ch);

}  
                  
?>