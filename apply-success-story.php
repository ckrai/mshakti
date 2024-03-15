<?php
require_once('manage/app/app_include/session.php');
require_once('manage/app/app_include/function.php');
include 'manage/app/action/class/front-class.php';

$front = new Front();


if (isset($_POST['submit'])) {

    // checking district
    $district = strtolower($_POST['district']);
   
    if (preg_match("/^[a-zA-Z\s]+$/i", $district) == 0) {
        echo basename($_FILES['file']['name']).' File has incorrect district name';
        die();
    }

    // checking event name
    $event_name = $_POST['event'];

    if (preg_match("/^MS[a-zA-Z0-9-]+$/i", $event_name) == 0) {
        echo basename($_FILES['file']['name']).' File has incorrect event name';
        die();
    }

    // checking event id
    $event_id = $_POST['event_id'];
    if (preg_match("/^[0-9]+$/i", $event_id) == 0) {
        echo basename($_FILES['file']['name']).' File has incorrect event id';
        die();
    }
    
    // checking file name
    $file_name = basename($_FILES['file']['name']);
    if (preg_match("/[^\s]+(.*?).(jpg|jpeg|png|mp4|MP4|JPG|JPEG|PNG)$/i", $file_name) == 0) {
        echo basename($_FILES['file']['name']).' File has incorrect file name';
        die();
    }

    $image_type = 'success';

    $extension  = explode('.', $_FILES['file']['name']);
    
    $image    =  str_replace(' ', '_', $district).'_'.$event_id.'_'.rand(000,999) . '.' . $extension[1];

    $row = $front->add_media($event_id,$image_type,$image);

    if($row !=null){
    //   echo '<script>';
    //   echo 'alert("आवेदन सफलतापूर्वक प्रस्तुत किया गया/ Application Submitted Successfully");';
    //   echo 'window.location = "erickshaw-application-new";';
    //   echo '</script>';

      move_uploaded_file($_FILES['file']['tmp_name'], 'APIs/images/success/' . $image);

      echo "Story Uploaded Successfully";
      die();
   }
   else{ 
      echo '<script>';
      echo 'alert("कुछ गलत हो गया/ Something went wrong");';
      echo 'window.location = "erickshaw-application-new";';
      echo '</script>';
   }
}

echo 'error';
die();


