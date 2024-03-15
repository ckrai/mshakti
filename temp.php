<?php require_once('manage/app/app_include/session.php'); ?>
<?php require_once('manage/app/app_include/function.php'); ?>
<?php include 'manage/app/action/class/front-class.php'; ?>

<?php
$supervisor = new Front();

// Assuming you have selected a district from the dropdown and stored it in $selectedDistrict
if (isset($_POST['district'])) { // Check if the district is posted from a form
    $selectedDistrict = $_POST['district'];
} else {
    $selectedDistrict = 'Select'; // Default value
}

// Retrieve the districts for the first dropdown
$result = $supervisor->get_district();

// Retrieve the batches for the second dropdown based on the selected district
$batchResult = $supervisor->get_district_event_list($selectedDistrict);
?>

<!doctype html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <!--Google Analytics Start-->
    <?php include 'web_include/google_analytics.php'; ?>
    <!--Google Analytics End-->

    <!-- Title -->
    <title>Mission Shakti | Feedback</title>

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

        // Defining a function to validate form 
        function validateForm() {
            // Retrieving the values of form elements 
            var name = document.regfeedback.name.value;
            var mobile = document.regfeedback.mobile.value;
            var date = document.regfeedback.date.value;
            var district = document.regfeedback.district.value;
            var trainingQuality = document.regfeedback.trainingQuality.value;
            var trainingKit = document.regfeedback.trainingKit.value;
            var foodQuality = document.regfeedback.foodQuality.value;
            var satisfaction = document.regfeedback.satisfaction.value;
            var benefit = document.regfeedback.benefit.value;
            var futureTraining = document.regfeedback.futureTraining.value;
            var other = document.regfeedback.other.value;



            // Defining error variables with a default value
            var nameErr = mobileErr = dateErr = districtErr = trainingQualityErr = trainingKitErr = foodQualityErr = satisfactionErr = benefitErr = futureTrainingErr = true;

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

            // Validate date
            if (date == "") {
                printError("dateErr", "Please select training date");
            } else {
                printError("dateErr", "");
                dateErr = false;
            }

            // Validate district
            if (district == "Select") {
                printError("districtErr", "Please select your district");
            } else {
                printError("districtErr", "");
                districtErr = false;
            }

            // Validate district
            if (trainingQuality == "Select") {
                printError("trainingQualityErr", "Please select training quality");
            } else {
                printError("trainingQualityErr", "");
                trainingQualityErr = false;
            }

            // Validate district
            if (trainingKit == "Select") {
                printError("trainingKitErr", "Please select training kit");
            } else {
                printError("trainingKitErr", "");
                trainingKitErr = false;
            }

            // Validate district
            if (foodQuality == "Select") {
                printError("foodQualityErr", "Please select food quality");
            } else {
                printError("foodQualityErr", "");
                foodQualityErr = false;
            }

            // Validate district
            if (satisfaction == "Select") {
                printError("satisfactionErr", "Please select overall satisfaction");
            } else {
                printError("satisfactionErr", "");
                satisfactionErr = false;
            }

            // Validate district
            if (benefit == "Select") {
                printError("benefitErr", "Please select benefit");
            } else {
                printError("benefitErr", "");
                satisfactionErr = false;
            }

            // Validate district
            if (futureTraining == "Select") {
                printError("futureTrainingErr", "Please select future training");
            } else {
                printError("futureTrainingErr", "");
                futureTrainingErr = false;
            }

            // Prevent the form from being submitted if there are any errors
            if ((nameErr || mobileErr || dateErr || districtErr || trainingQuality || trainingKit || foodQualityErr || satisfactionErr || benefitErr || futureTrainingErr) == true) {
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
                    <h1 class="">प्रशिक्षण प्रतिक्रिया</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item">
                            <a href="index">Home</a>
                        </li>
                        <li class="breadcrumb-item active text-white" aria-current="page">प्रशिक्षण प्रतिक्रिया पत्र</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div id="main">
        <section class="sptb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header" style="background-color: #FDD9AE;">
                                <p class="text-start fs-16" style="margin-top: 10px;"><b>मिशन शक्ति 2.0 प्रशिक्षण प्रतिक्रिया प्रपत्र</b></p>
                            </div>
                            <div class="card-body pb-3">
                                <!-- <form action="apply-training" method="post" enctype="multipart/form-data"> -->
                                <form name="regfeedback" onsubmit="return validateForm()" action="apply-feedback" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="name">पूरा नाम *</label>
                                                <input type="text" class="form-control" name="name" placeholder="अपना नाम दर्ज करें">
                                                <div class="error" id="nameErr"></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="mobile no">मोबाइल नम्बर *</label>
                                                <input type="text" class="form-control" name="mobile" placeholder="अपना मोबाइल नम्बर दर्ज करें">
                                                <div class="error" id="mobileErr"></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="date">प्रशिक्षण तिथि *</label>
                                                <input type="date" class="form-control" name="date" placeholder="आवेदक का जन्म तिथि">
                                                <div class="error" id="dateErr"></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="district">ज़िला *</label>
                                                <select class="form-control form-control-lg" name="district" id="district">
                                                    <option translate="no">Select</option>
                                                    <?php
                                                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                                        $district = $row['district'];
                                                        $isSelected = ($selectedDistrict == $district) ? 'selected' : '';
                                                        echo '<option translate="no" value="' . $district . '" ' . $isSelected . '>' . $district . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <div class="error" id="districtErr"></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label for="batch">Batch *</label>
                                                <select class="form-control form-control-lg" name="batch" id="batch">
                                                    <option translate="no">Select</option>
                                                    <?php
                                                    while ($batchRow = $batchResult->fetch(PDO::FETCH_ASSOC)) {
                                                        $batch = $batchRow['district'];
                                                        echo '<option translate="no" value="' . $district . '">' . $batch . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <div class="error" id="batchErr"></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="trainingQuality">आपकी ट्रेनिंग कैसी थी? *</label>
                                                <select class="form-control form-control-lg" name="trainingQuality">
                                                    <option translate="no">Select</option>
                                                    <option translate="no">बहुत अच्छा</option>
                                                    <option translate="no">अच्छा</option>
                                                    <option translate="no">खराब</option>
                                                </select>
                                                <div class="error" id="trainingQualityErr"></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="trainingKit">क्या आपको ट्रेनिंग किट प्राप्त हुई थी? *</label>
                                                <select class="form-control form-control-lg" name="trainingKit">
                                                    <option translate="no">Select</option>
                                                    <option translate="no">हाँ</option>
                                                    <option translate="no">नहीं</option>
                                                </select>
                                                <div class="error" id="trainingKitErr"></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="foodQuality">भोजन की गुणवत्ता कैसी थी? *</label>
                                                <select class="form-control form-control-lg" name="foodQuality">
                                                    <option translate="no">Select</option>
                                                    <option translate="no">बहुत अच्छा</option>
                                                    <option translate="no">अच्छा</option>
                                                    <option translate="no">खराब</option>
                                                </select>
                                                <div class="error" id="foodQualityErr"></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="satisfaction">आप प्रशिक्षण से कितने संतुष्ट हैं *</label>
                                                <select class="form-control form-control-lg" name="satisfaction">
                                                    <option translate="no">Select</option>
                                                    <option translate="no">पूर्ण संतुष्ट</option>
                                                    <option translate="no">संतुष्ट</option>
                                                    <option translate="no">असंतुष्ट</option>
                                                </select>
                                                <div class="error" id="satisfactionErr"></div>
                                            </div>
                                        </div>



                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="benefit">क्या आपको प्रशिक्षण से लाभ हुआ? *</label>
                                                <select class="form-control form-control-lg" name="benefit">
                                                    <option translate="no">Select</option>
                                                    <option translate="no">हाँ</option>
                                                    <option translate="no">नहीं</option>
                                                </select>
                                                <div class="error" id="benefitErr"></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="futureTraining">भविष्य में आप कौन सी ट्रेनिंग करना चाहेंगे? *</label>
                                                <select class="form-control form-control-lg" name="futureTraining">
                                                    <option translate="no">Select</option>
                                                    <option translate="no">ईडीपी (EDP)</option>
                                                    <option translate="no">आत्मरक्षा (Self Defence)</option>
                                                    <option translate="no">बैंकिंग व वित्त (Banking and Finance)</option>
                                                    <option translate="no">अन्य (Other)</option>
                                                </select>
                                                <div class="error" id="futureTrainingErr"></div>
                                            </div>
                                        </div>


                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label for="other">अन्य टिप्पणी (यदि कोई हो)</label>
                                                <textarea class="form-control" rows="4" name="other" placeholder="यदि आप कुछ और कहना चाहते हैं तो कृपया स्पष्ट करें"></textarea>
                                                <div class="error" id="otherErr"></div>
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
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/web.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <script>
        jQuery(document).ready(function($) {
            // Store the original options for the Batch dropdown
            var originalBatchOptions = $('#batch').html();

            $('#district').on('change', function(e) {
                var selectedDistrict = $(this).val();
                var batchDropdown = $('#batch');

                // Clear the Batch dropdown and add the 'Select' option
                batchDropdown.empty().append(originalBatchOptions);

                // If a district is selected, filter the options
                if (selectedDistrict !== 'Select') {
                    batchDropdown.find('option').each(function() {
                        var option = $(this);
                        if (option.val() !== selectedDistrict) {
                            option.remove();
                        }
                    });
                }
            });
        });
    </script>







</body>

</html>