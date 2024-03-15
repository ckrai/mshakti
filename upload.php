<?php
require_once('manage/app/app_include/session.php');
require_once('manage/app/app_include/function.php');
include 'manage/app/action/class/front-class.php';

$front = new Front();
$district_list = $front->get_running_district();
?>
<!doctype html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <!--Google Analytics Start-->
    <?php include 'web_include/google_analytics.php'; ?>
    <!--Google Analytics End-->

    <!-- Title -->
    <title>Mission Shakti | Upload</title>

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
                    <h1 class="">Media Upload</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item">
                            <a href="index">Home</a>
                        </li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Event Media Upload</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div id="main">
        <section class="sptb">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="card">
                            <div class="card-header" style="background-color: #FDD9AE;">
                                <p class="text-start fs-16" style="margin-top: 10px;"><b>Upload Images for Misssion Shakti Events</b></p>
                            </div>
                            <div class="card-body pb-3">
                                <!-- <form action="apply-training" method="post" enctype="multipart/form-data"> -->
                                <!-- name="regtraining" action="apply-image-upload" method="post" enctype="multipart/form-data" -->
                                <form id="form">
                                    <div class="row">
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="district">Select District *</label>
                                                <select class="form-control form-control-lg" name="district" onchange="getEvents(this.value)" id="district" required>
                                                    <option translate="no">Select</option>
                                                    <?php
                                                    while ($row = $district_list->fetch(PDO::FETCH_ASSOC)) {
                                                        echo '<option translate="no">' . $row['district'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="district">Select Event</label>
                                                <select class="form-control form-control-lg" name="event_name" id="events" onchange="getID(this.value)" disabled required>
                                                    <option translate="no">Select Batch</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-4" hidden>
                                            <div class="form-group">
                                                <label for="district">Event id</label>
                                                <input class="form-control form-control-lg" type="text" value="" id="event_id" name="event_id" required />
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="district">Image Type</label>
                                                <select class="form-control form-control-lg" name="image_type" id="image_type" onchange="loadImage()" disabled required>
                                                    <option translate="no">Select</option>
                                                    <option translate="no">Attendance</option>
                                                    <option translate="no">Mudra</option>
                                                    <option translate="no">Registration</option>
                                                    <option translate="no">Picture</option>
                                                    <option translate="no">Video</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group">
                                                <input type="file" class="custom-file-input form-control" id="image_files" name="image_files[]" accept=".jpg, .jpeg, .png" multiple required disabled>
                                            </div>
                                        </div>
                                        <!-- <div class="col-12">
                                            <div class="input-group mb-3">
                                                <input type="file" class="custom-file-input form-control" id="image_files" name="image_files[]" accept=".jpg, .jpeg, .png" multiple required disabled>
                                            </div>
                                        </div> -->
                                    </div>
                                    </br>
                                    <button type="submit" name="submit" class="btn btn-primary" id="submit" disabled>Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="text-center col-12" style="display: none;" id="loader">
                        <div class="spinner-border" role="status">
                        </div> Uploading... Please wait
                    </div>
                    <div class="col-12 align-items-center justify-content-center d-flex">
                        <ul id="status">

                        </ul>
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
        function getEvents(district) {
            if (district === 'Select') {
                return;
            } else {
                $.ajax({
                    url: 'district-events.php?district=' + district,
                    type: 'GET',
                    success: function(response) {
                        var data = JSON.parse(response);
                        var html = '<option translate="no">Select</option>';
                        for (var i = 0; i < data.length; i++) {
                            html += '<option id="' + data[i].id + '" >' + data[i].name + '</option>';
                        }
                        $('#events').html(html);
                        $('#events').removeAttr('disabled');
                    }
                });
            }
        }

        function getID(event) {
            $('#event_id').attr('value', ($('#events').find(':selected').attr('id')));
            $('#image_type').removeAttr('disabled');
        }

        function loadImage() {
            $('#image_files').removeAttr('disabled');
            $('#submit').removeAttr('disabled');
        }
    </script>
    <script>
        var files;

        $('#submit').click(async function(event) {
            event.preventDefault();
            $('#loader').css('display', '');
            const district = $('#district').find(':selected').val();
            const eventValue = $('#events').find(':selected').val();
            const event_id = $('#event_id').val();
            const image_type = $('#image_type').find(':selected').val();

            const data = new FormData();
            data.append('district', district);
            data.append('event', eventValue);
            data.append('event_id', event_id);
            data.append('image_type', image_type);

            const uploadPromises = [];

            for (let i = 0; i < files.length; i++) {
                const file = files[i];

                data.append('file', file, file.name);

                const uploadPromise = new Promise((resolve, reject) => {
                    $.ajax({
                        url: "/apply-image-upload.php",
                        type: "POST",
                        data: data,
                        processData: false,
                        contentType: false,
                        error: function(jqXHR, exception) {
                            reject(exception);
                        },
                        success: function(response) {
                            resolve(response);
                        }
                    });
                });

                uploadPromises.push(uploadPromise);
            }

            try {
                const responses = await Promise.all(uploadPromises);
                responses.forEach(response => {
                    $('#status').append(response);
                });
                $('#form')[0].reset();
                $('#loader').css('display', 'none');
            } catch (error) {
                console.error(error);
            }
        });

        $('#image_files').change(function(e) {
            files = e.target.files;
        });
    </script>

</body>

</html>