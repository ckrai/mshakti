<?php require_once('manage/app/app_include/session.php'); ?>
<?php require_once('manage/app/app_include/function.php'); ?>
<?php include 'manage/app/action/class/front-class.php'; ?>

<!doctype html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

   <!--Google Analytics Start-->
   <?php include 'web_include/google_analytics.php'; ?>
   <!--Google Analytics End-->

   <!-- Title -->
   <title>Mission Shakti | E-Rickshaw </title>

   <!--Meta Data-->
   <?php include 'web_include/meta_data.php'; ?>
   <!--/Meta Data-->


   <link rel="stylesheet" href="assets/fonts/fonts/font-awesome.min.css">
   <!-- Bootstrap Css -->
   <link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <!-- Dashboard Css -->
   <link href="assets/css/style.css" rel="stylesheet" />
   <link href="assets/css/dark-style.css" rel="stylesheet" />
   <link href="assets/css/transparent-style.css" rel="stylesheet" />
   <!-- Font-awesome  Css -->
   <link href="assets/css/transparent-style.css" rel="stylesheet" />
   <!--Select2 Plugin -->
   <link href="assets/plugins/select2/select2.min.css" rel="stylesheet" />
   <!-- Owl Theme css-->
   <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />
   <!-- Custom scroll bar css-->
   <link href="assets/plugins/pscrollbar/pscrollbar.css" rel="stylesheet" />
   <!--  ratings2 Plugin -->
   <link href="assets/plugins/ratings-2/star-rating-svg.css" rel="stylesheet" />
   <!-- COLOR-SKINS -->
   <link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/color-skins/color-skins/color10.css" />
   <link rel="stylesheet" href="assets/color-skins/demo.css" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <style type="text/css">
      .error {
         color: red;
         font-size: 90%;
      }
   </style>

   <script>
      // Defining a function to display error message
      function printError(elemId, hintMsg) {
         document.getElementById(elemId).innerHTML = hintMsg;
      }

      // Defining a function to validate name
      function validateName(name) {
         // Minimum 3 characters
         if (name.length < 3) {
            return false;
         }
         // First letter of each word capitalized
         var words = name.split(' ');
         for (var i = 0; i < words.length; i++) {
            var word = words[i];
            if (word.length === 0 || !/^[A-Z]/.test(word)) {
               return false;
            }
         }

         return true;
      }

      // Defining a function to calculate 18 year age message
      function validateDateOfBirth(dob) {
         var currentDate = new Date();
         var minAgeDate = new Date(currentDate);
         minAgeDate.setFullYear(minAgeDate.getFullYear() - 18);
         var inputDate = new Date(dob);
         return inputDate <= minAgeDate;
      }

      // Defining a function to validate form 
      function validateForm() {
         // Retrieving the values of form elements 
         var supervisor = document.regForm.supervisor.value;
         var name = document.regForm.name.value;
         var dob = document.regForm.dob.value;
         var mobile = document.regForm.mobile.value;
         var aadhar = document.regForm.aadhar.value;
         var pan_no = document.regForm.pan_no.value;
         var district = document.regForm.district.value;
         var address = document.regForm.address.value;
         var business = document.regForm.business.value;
         var vahan = document.regForm.vahan.value;

         // Defining error variables with a default value
         var supervisorErr = nameErr = dobErr = mobileErr = aadharErr = pan_noErr = districtErr = addressErr = businessErr = vahanErr = true;

         // // Validate id
         // if(supervisor == "") {printError("supervisorErr", "Please enter id");}
         // else {var regex = /^(?:[0-9]|[1-9][0-9]{1,5})$/;
         //   if(regex.test(supervisor) === false) {printError("supervisorErr", "Please enter valid id");} 
         //   else{printError("supervisorErr", "");supervisorErr = false;}
         // }

         // Validate id
         if (supervisor == "Select") {
            printError("supervisorErr", "Please select valid id");
         } else {
            printError("supervisorErr", "");
            supervisorErr = false;
         }

         // Validate name
         if (name == "") {
            printError("nameErr", "Please enter your name");
         } else if (name.trim().length < 2) {
            printError("nameErr", "Please enter minimum 2 digit name");
         }
         // else if (!validateName(name)) {printError("nameErr", "Please enter a valid name with at least 3 characters and proper capitalization");}
         else {
            var regex = /^[a-zA-Z\s]+$/;
            if (regex.test(name) === false) {
               printError("nameErr", "Please enter a valid name");
            } else {
               printError("nameErr", "");
               nameErr = false;
            }
         }

         // Validate mobile number
         if (mobile == "") {
            printError("mobileErr", "Please enter your mobile number");
         } else {
            var regex = /^[6-9]\d{9}$/;
            if (regex.test(mobile) === false) {
               printError("mobileErr", "Please enter a valid 10 digit mobile number");
            } else {
               printError("mobileErr", "");
               mobileErr = false;
            }
         }

         // Validate aadhar number
         if (aadhar == "") {
            printError("aadharErr", "Please enter your aadhar number");
         } else {
            var regex = /^\d{12}$/;
            if (regex.test(aadhar) === false) {
               printError("aadharErr", "Please enter a valid 12 digit aadhar number");
            } else {
               printError("aadharErr", "");
               aadharErr = false
            }
         }

         // Validate pan number
         if (pan_no == "") {
            printError("pan_noErr", "Please enter your PAN number");
         } else {
            var regex = /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
            if (regex.test(pan_no) === false) {
               printError("pan_noErr", "Please enter a valid PAN number");
            } else {
               printError("pan_noErr", "");
               pan_noErr = false
            }
         }

         // Validate address
         if (address == "") {
            printError("addressErr", "Please enter your address");
         } else if (address.trim().length < 10) {
            printError("addressErr", "Please enter full address");
         } else {
            printError("addressErr", "");
            addressErr = false;
         }

         // Validate district
         if (district == "Select") {
            printError("districtErr", "Please select your district");
         } else {
            printError("districtErr", "");
            districtErr = false;
         }

         // Validate dob
         if (dob == "") {
            printError("dobErr", "Please select your dob");
         } else if (!validateDateOfBirth(dob)) {
            printError("dobErr", "Age must be at least 18 years old")
         } else {
            printError("dobErr", "");
            dobErr = false;
         }


         // Validate business
         if (business == "") {
            printError("businessErr", "Please enter your business");
         } else {
            printError("businessErr", "");
            businessErr = false;
         }


         // Validate district
         if (district == "Select") {
            printError("districtErr", "Please select your district");
         } else {
            printError("districtErr", "");
            districtErr = false;
         }


         // Validate vahan
         if (vahan == "Select") {
            printError("vahanErr", "Please select your vahan");
         } else {
            printError("vahanErr", "");
            vahanErr = false;
         }

         // Prevent the form from being submitted if there are any errors
         if ((supervisorErr || nameErr || mobileErr || aadharErr || pan_noErr || addressErr || districtErr || dobErr || businessErr || vahanErr) == true) {
            return false;
         }

      };
   </script>
</head>

<body>

   <!--Loader-->
   <!--  <div id="global-loader"><img src="assets/images/loader.svg" class="loader-img" alt=""></div> -->

   <!--Topbar-->
   <?php include 'web_include/web_navbar.php'; ?>
   <!--/Topbar-->

   <div class="bannerimg cover-image bg-background3">
      <div class="header-text mb-0">
         <div class="container">
            <div class="text-center text-white ">
               <h1 class="">ई-रिक्शा पंजीकरण</h1>
               <ol class="breadcrumb text-center">
                  <li class="breadcrumb-item">
                     <a href="index">Home</a>
                  </li>
                  <li class="breadcrumb-item active text-white" aria-current="page">आवेदन पत्र</li>
               </ol>
            </div>
         </div>
      </div>
   </div>

   <div id="main">
      <section class="sptb">
         <div class="container">
            <div class="row">
               <!--Right Side Content-->
               <div class="col-xl-4 col-lg-4 col-md-4">
                  <div class="card">
                     <!-- <div class="card-header bg-primary-transparent">
                           <h3 class="card-title fs-18">ई-रिक्शा</h3>
                           </div> -->
                     <div class="card-body">
                        <img width="100%" src="images/home/e-rickshaw.jpg">
                        <p class="text-start fs-16"></br>ई-रिक्शा महिलाओं के विकास में महत्वपूर्ण भूमिका निभा सकती है। यह माध्यम महिलाओं को आर्थिक रूप से सशक्त बनाने के साथ-साथ उन्हें शिक्षा, रोजगार, और व्यावसायिक लक्ष्यों की प्राप्ति में सहायक साबित हो सकता है। ई-रिक्शा उन्हें स्वाधीनता और समाज में अपनी पहचान बनाने का अवसर प्रदान करता है। सरकार, संबंधित संगठनें, और समाज को मिलकर ई-रिक्शा के प्रोत्साहन से महिलाओं की सामाजिक और आर्थिक स्थिति में सुधार करने में सहायता करनी चाहिए। यह न केवल महिलाओं को सशक्त बनाने का मौका प्रदान करेगा, बल्कि समाज में भी समर्थ और समानिता से भरपूर मुकाम प्राप्त होगा। </p>
                        <p class="text-start fs-16">ई-रिक्शा महिलाओं को न केवल वित्तीय आधार प्रदान करता है, बल्कि उन्हें नए कौशल सीखने और आत्मनिर्भर बनने का माध्यम भी प्रदान करता है। यह उन्हें शैक्षिक और पेशेवर विकास के लिए साधन स्वरूप हो सकता है, जिससे महिलाएं समाज में अपनी पहचान बना सकती हैं। ई-रिक्शा सेवाएं न केवल महिलाओं के पारिवारिक आय को बढ़ावा देती हैं, बल्कि उनके आत्मविश्वास और समाज में स्थान में भी सुधार करती हैं।</p></br>
                     </div>
                  </div>
               </div>
               <div class="col-xl-8 col-lg-8 col-md-8">
                  <div class="card">
                     <div class="card-header" style="background-color: #FDD9AE;">
                        <p class="text-start fs-16" style="margin-top: 10px;"><b>मिशन शक्ति 2.0 ई-रिक्शा पंजीकरण हेतु आवेदन पत्र</b></p>
                     </div>
                     <div class="card-body pb-3">
                        <!-- <form action="apply-erickshaw" method="post" enctype="multipart/form-data"> -->
                        <form name="regForm" onsubmit="return validateForm()" action="apply-erickshaw-new" method="post" enctype="multipart/form-data">
                           <div class="row">
                              <div class="col-xl-12">
                                 <div class="form-group">
                                    <label for="supervisor">सर्वेक्षक *</label>
                                    <select class="form-control form-control-lg" name="supervisor">
                                       <option translate="no">Select</option>
                                       <!-- <option translate="no">Self-स्वयं (0)</option> -->
                                       <?php
                                       $supervisor  = new Front();
                                       $result = $supervisor->get_supervisor_list_upicon();
                                       while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                          echo '<option>' . $row['u_name'] . ' (' . $row['u_id'] . ')</option>';
                                       }
                                       ?>
                                    </select>
                                    <div class="error" id="supervisorErr"></div>
                                    <p class="text-start fs-12" style="margin-top: 5px; color: #DF1755;"><b>नोट: यदि आप सर्वेक्षक हैं तो अपनी आईडी चुनें</b></p>
                                 </div>
                              </div>
                              <!-- <div class="col-xl-12">
                                   <div class="form-group">
                                     <label for="supervisor">पर्यवेक्षक आईडी *</label>
                                     <input type="text" class="form-control" name="supervisor" placeholder="पर्यवेक्षक आईडी">
                                     <div class="error" id="supervisorErr"></div>
                                       <p class="text-start fs-12" style="margin-top: 5px; color: #DF1755;"><b>नोट: यदि आप पर्यवेक्षक हैं तो अपनी आईडी दर्ज करें। # यदि आप व्यक्तिगत हैं तो 0 दर्ज करें।</b></p>
                                    </div>
                                 </div> -->
                              <div class="col-xl-6">
                                 <div class="form-group">
                                    <label for="name">पूरा नाम *</label>
                                    <input type="text" class="form-control" name="name" placeholder="आवेदक का पूरा नाम">
                                    <div class="error" id="nameErr"></div>
                                 </div>
                              </div>
                              <div class="col-xl-6">
                                 <div class="form-group">
                                    <label for="dob">जन्म तिथि *</label>
                                    <input type="date" class="form-control" name="dob" placeholder="आवेदक का जन्म तिथि">
                                    <div class="error" id="dobErr"></div>
                                 </div>
                              </div>
                              <div class="col-xl-6">
                                 <div class="form-group">
                                    <label for="mobile">मोबाइल नम्बर *</label>
                                    <input type="text" class="form-control" name="mobile" placeholder="आवेदक का मोबाइल नम्बर" maxlength="10">
                                    <div class="error" id="mobileErr"></div>
                                 </div>
                              </div>
                              <div class="col-xl-6">
                                 <div class="form-group">
                                    <label for="a_mobile">वैकल्पिक मोबाइल नम्बर </label>
                                    <input type="text" class="form-control" name="a_mobile" placeholder="आवेदक का वैकल्पिक मोबाइल नम्बर">
                                 </div>
                              </div>
                              <div class="col-xl-6">
                                 <div class="form-group">
                                    <label for="aadhar">आधार नम्बर *</label>
                                    <input type="text" class="form-control" name="aadhar" placeholder="आवेदक का आधार नम्बर" maxlength="12">
                                    <div class="error" id="aadharErr"></div>
                                 </div>
                              </div>
                              <div class="col-xl-6">
                                 <div class="form-group">
                                    <label for="pan_no">पैन नम्बर *</label>
                                    <input type="text" class="form-control" name="pan_no" placeholder="आवेदक का पैन नम्बर">
                                    <div class="error" id="pan_noErr"></div>
                                 </div>
                              </div>
                              <div class="col-xl-6">
                                 <div class="form-group">
                                    <label for="email">ई-मेल आई० डी०</label>
                                    <input type="email" class="form-control" name="email" placeholder="आवेदक का ई-मेल आई० डी०">
                                    <div class="error" id="emailErr"></div>
                                 </div>
                              </div>
                              <div class="col-xl-6">
                                 <div class="form-group">
                                    <label for="district">ज़िला *</label>
                                    <!-- <select class="form-control form-control-lg" name="district">
                                          <option translate="no">Select</option>
                                          <option translate="no">Agra</option>
                                          <option translate="no">Aligarh</option>
                                          <option translate="no">Ambedkar Nagar</option>
                                          <option translate="no">Amethi</option>
                                          <option translate="no">Amroha</option>
                                          <option translate="no">Auraiya</option>
                                          <option translate="no">Ayodhya</option>
                                          <option translate="no">Azamgarh</option>
                                          <option translate="no">Baghpat</option>
                                          <option translate="no">Bahraich</option>
                                          <option translate="no">Ballia</option>
                                          <option translate="no">Balrampur</option>
                                          <option translate="no">Banda</option>
                                          <option translate="no">Barabanki</option>
                                          <option translate="no">Bareilly</option>
                                          <option translate="no">Basti</option>
                                          <option translate="no">Bhadohi</option>
                                          <option translate="no">Bijnor</option>
                                          <option translate="no">Badaun</option>
                                          <option translate="no">Bulandshahr</option>
                                          <option translate="no">Chandauli</option>
                                          <option translate="no">Chitrakoot</option>
                                          <option translate="no">Deoria</option>
                                          <option translate="no">Etah</option>
                                          <option translate="no">Etawah</option>
                                          <option translate="no">Farrukhabad</option>
                                          <option translate="no">Fatehpur</option>
                                          <option translate="no">Firozabad</option>
                                          <option translate="no">Gautam Buddha Nagar</option>
                                          <option translate="no">Ghaziabad</option>
                                          <option translate="no">Ghazipur</option>
                                          <option translate="no">Gonda</option>
                                          <option translate="no">Gorakhpur</option>
                                          <option translate="no">Hamirpur</option>
                                          <option translate="no">Hapur</option>
                                          <option translate="no">Hardoi</option>
                                          <option translate="no">Hathras</option>
                                          <option translate="no">Jalaun</option>
                                          <option translate="no">Jaunpur</option>
                                          <option translate="no">Jhansi</option>
                                          <option translate="no">Kannauj</option>
                                          <option translate="no">Kanpur Dehat</option>
                                          <option translate="no">Kanpur Nagar</option>
                                          <option translate="no">Kasganj</option>
                                          <option translate="no">Kaushambi</option>
                                          <option translate="no">Lakhimpur Kheri</option>
                                          <option translate="no">Kushinagar</option>
                                          <option translate="no">Lalitpur</option>
                                          <option translate="no">Lucknow</option>
                                          <option translate="no">Maharajganj</option>
                                          <option translate="no">Mahoba</option>
                                          <option translate="no">Mainpuri</option>
                                          <option translate="no">Mathura</option>
                                          <option translate="no">Mau</option>
                                          <option translate="no">Meerut</option>
                                          <option translate="no">Mirzapur</option>
                                          <option translate="no">Moradabad</option>
                                          <option translate="no">Muzaffarnagar</option>
                                          <option translate="no">Pilibhit</option>
                                          <option translate="no">Pratapgarh</option>
                                          <option translate="no">Prayagraj</option>
                                          <option translate="no">Raebareli</option>
                                          <option translate="no">Rampur</option>
                                          <option translate="no">Saharanpur</option>
                                          <option translate="no">Sambhal</option>
                                          <option translate="no">Sant Kabir Nagar</option>
                                          <option translate="no">Shahjahanpur</option>
                                          <option translate="no">Shamli</option>
                                          <option translate="no">Shravasti</option>
                                          <option translate="no">Siddharthnagar</option>
                                          <option translate="no">Sitapur</option>
                                          <option translate="no">Sonbhadra</option>
                                          <option translate="no">Sultanpur</option>
                                          <option translate="no">Unnao</option>
                                          <option translate="no">Varanasi</option>
                                       </select> -->
                                    <select class="form-control form-control-lg" name="district">
                                       <option translate="no">Select</option>
                                       <!-- <option translate="no">Self-स्वयं (0)</option> -->
                                       <?php
                                       $supervisor  = new Front();
                                       $result = $supervisor->get_district();
                                       while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                          echo '<option translate="no">' . $row['district'] . '</option>';
                                       }
                                       ?>
                                    </select>
                                    <div class="error" id="districtErr"></div>
                                 </div>

                              </div>
                              <div class="col-xl-12">
                                 <div class="form-group">
                                    <label for="address">स्थायी पता (जो कि आधार में हो) *</label>
                                    <textarea class="form-control" rows="3" name="address" placeholder="आवेदक का पूरा पता पिनकोड सहित"></textarea>
                                    <div class="error" id="addressErr"></div>
                                 </div>
                              </div>
                              <div class="col-xl-6">
                                 <div class="form-group">
                                    <label for="business">व्यवसाय *</label>
                                    <input type="text" class="form-control" name="business" placeholder="आवेदक का व्यवसाय">
                                    <div class="error" id="businessErr"></div>
                                 </div>
                              </div>
                              <div class="col-xl-6">
                                 <div class="form-group">
                                    <label for="vahan">आपने कोई ई-वाहन ख़रीदा है? *</label>
                                    <select class="form-control form-control-lg" name="vahan">
                                       <option translate="no">Select</option>
                                       <option translate="no">Yes</option>
                                       <option translate="no">No</option>
                                    </select>
                                    <div class="error" id="vahanErr"></div>
                                 </div>
                              </div>
                           </div>
                           </br>
                           <button type="submit" name="submit" class="btn btn-primary">दर्ज करें</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>

   <!--Footer Section-->
   <?php include 'web_include/web_footer.php'; ?>
   <!--Footer Section-->

   <!--Chat Section-->
   <script src="//code.tidio.co/qzcv6uu0f30uubc7ji0mti2sumkxxcf3.js" async></script>
   <!--/Chat Section-->

   <!-- Back to top -->
   <div class="top-bar d-none d-sm-block">
      <a href="#top" id="back-to-top"><i class="fa fa-arrow-up"></i></a>
   </div>
   <!-- <a href="#top" id="back-to-top"><i class="fa fa-arrow-up"></i></a> -->
   <!-- /Back to top -->

   <!-- JQuery js-->
   <script src="assets/js/vendors/jquery.min.js"></script>
   <!-- Bootstrap js -->

   <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
   <!--JQuery Sparkline Js-->
   <script src="assets/js/vendors/jquery.sparkline.min.js"></script>
   <!-- Circle Progress Js-->
   <script src="assets/js/vendors/circle-progress.min.js"></script>
   <!-- Star Rating Js-->
   <script src="assets/plugins/rating/jquery-rate-picker.js"></script>
   <script src="assets/plugins/rating/rating-picker.js"></script>
   <!-- Star Rating-1 Js-->
   <script src="assets/plugins/ratings-2/jquery.star-rating.js"></script>
   <script src="assets/plugins/ratings-2/star-rating.js"></script>
   <!--Owl Carousel js -->
   <script src="assets/plugins/owl-carousel/owl.carousel.js"></script>
   <script src="assets/js/owl-carousel.js"></script>
   <!--Horizontal Menu-->
   <script src="assets/plugins/horizontal/horizontal-menu/horizontal.js"></script>
   <!--Counters -->
   <script src="assets/plugins/counters/counterup.min.js"></script>
   <script src="assets/plugins/counters/waypoints.min.js"></script>
   <script src="assets/plugins/counters/numeric-counter.js"></script>
   <!--JQuery TouchSwipe js-->
   <script src="assets/js/jquery.touchSwipe.min.js"></script>
   <!--Select2 js -->
   <script src="assets/plugins/select2/select2.full.min.js"></script>
   <script src="assets/js/select2.js"></script>
   <!-- Cookie js -->
   <script src="assets/plugins/cookie/jquery.ihavecookies.js"></script>
   <script src="assets/plugins/cookie/cookie.js"></script>
   <!-- Count Down-->
   <script src="assets/plugins/count-down/jquery.lwtCountdown-1.0.js"></script>
   <!-- Ion.RangeSlider -->
   <script src="assets/plugins/jquery-uislider/jquery-ui.js"></script>
   <!-- Custom scroll bar Js-->
   <script src="assets/plugins/pscrollbar/pscrollbar.js"></script>
   <!-- Vertical scroll bar Js-->
   <script src="assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js"></script>
   <script src="assets/plugins/vertical-scroll/vertical-scroll.js"></script>
   <!-- sticky Js-->
   <script src="assets/js/sticky.js"></script>
   <!-- Swipe Js-->
   <script src="assets/js/swipe.js"></script>
   <!-- Scripts Js-->
   <script src="assets/js/scripts2.js"></script>
   <!-- Showmore Js-->
   <script src="assets/js/jquery.showmore.js"></script>
   <script src="assets/js/showmore.js"></script>
   <!-- Custom Js-->
   <script src="assets/js/themecolors.js"></script>
   <script src="assets/js/custom.js"></script>
   <!--     <script src="assets/notiflix/notiflix-notify-aio-3.2.5.min.js"></script>
         <script src="assets/notiflix/notiflix-report-aio-3.2.5.min.js"></script>
         <script src="assets/notiflix/notiflix-confirm-aio-3.2.5.min.js"></script>
         <script src="assets/notiflix/notiflix-loading-aio-3.2.5.min.js"></script>
         <script src="assets/notiflix/notiflix-block-aio-3.2.5.min.js"></script> -->
   <!-- <script src="assets/js/admin.js"></script> -->
   <script src="assets/js/web.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>