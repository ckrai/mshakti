<?php require_once('manage/app/app_include/session.php'); ?>
<?php require_once('manage/app/app_include/function.php'); ?>
<?php include 'manage/app/action/class/front-class.php'; ?>

<?php
$event_id = $_GET['event_id'];
$allevent  = new Front();
$result    = $allevent->get_allevent($event_id);
$row       = $result->fetch(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en" dir="ltr">

<head>
  <!--Google Analytics Start-->
  <?php include 'web_include/google_analytics.php'; ?>
  <!--Google Analytics End-->

  <!-- Title -->
  <title>Mission Shakti | Event Details</title>

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
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

  <style>
    /* Add CSS styles for the rating bar */
    .rating-bar {
      display: inline-block;
    }

    .fa {
      font-size: 15px;
    }

    .fa-star {
      color: gray;
    }

    .fa-star.checked {
      color: orange;
    }

    .rotated-image {
      /* Rotate the image by 45 degrees */
      transform: rotate(270deg);
    }
    
  </style>
</head>

<body>

  <!--Loader-->
  <div id="global-loader">
    <img src="assets/images/loader.svg" class="loader-img" alt="">
  </div>
  <!--/Loader-->


  <!--Topbar-->
  <?php include 'web_include/web_navbar.php'; ?>
  <!--/Topbar-->

  <!--Breadcrumb-->
  <div class="bannerimg cover-image bg-background3">
    <div class="header-text mb-0">
      <div class="container">
        <div class="text-center text-white ">
          <h1 class=""> <?php echo $row['name']; ?> </h1>
          <ol class="breadcrumb text-center">
            <li class="breadcrumb-item">
              <a href="index">Home</a>
            </li>
            <li class="breadcrumb-item active text-white" aria-current="page">Event Details</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--/Breadcrumb-->


  <!--Event Deatails-->
  <section class="sptb pb-2 pt-2 bg-white">
    <div class="container">
      <div class="row">
        <div class="container">
          <div class="row">

            <!--Left Side Content-->
            <div class="col-xl-4 col-lg-4 col-md-12">
              <div class="card">
                <div class="card-header" style="background-color: #FDD9AE;">
                  <h3 class="card-title"> <?php echo $row['name']; ?> </h3>
                </div>
                <div class="card-body p-0">

                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td><a class="text-dark"><i class=""></i><?php echo "Started date" ?></a></td>
                        <td> <?php
                              $start_date = $row['start_date'];
                              $s_dateTime = new DateTime($start_date);
                              $newDateFormat = $s_dateTime->format('j M, y');
                              echo "<strong>" . $newDateFormat . "</strong>";
                              ?>
                        </td>
                      </tr>
                      <tr>
                        <td><a class="text-dark"><i class=""></i><?php echo "Completion date" ?></a></td>
                        <td> <?php
                              $end_date = $row['end_date'];
                              $e_dateTime = new DateTime($end_date);
                              $new2DateFormat = $e_dateTime->format('j M, y');

                              echo "<strong>" . $new2DateFormat . "</strong>";
                              ?></td>
                      </tr>
                      <tr>
                      <tr>
                        <td><a class="text-dark"><i class=""></i><?php echo "Trainee Registered" ?></a></td>
                        <td>
                          <?php $tc = new Front();
                          $tc_result = $tc->event_trainee_count($event_id);
                          echo "<strong>" . $tc_result . "</strong>";
                          ?>
                        </td>
                      </tr>
                      <tr>
                      <tr>
                        <td><a class="text-dark"><i class=""></i><?php echo "Registration Form Upload" ?></a></td>
                        <td>
                          <?php $trc = new Front();
                          $trc_result = $trc->event_trainee_registration_form_count($event_id);
                          echo "<strong>" . $trc_result . "</strong>";
                          ?>
                        </td>
                      </tr>
                      <tr>
                        <td><a class="text-dark"><i class=""></i><?php echo "Mudra Form Upload" ?></a></td>
                        <td>
                          <?php $mfc = new Front();
                          $mfc_result = $mfc->event_trainee_mudra_form_count($event_id);
                          echo "<strong>" . $mfc_result . "</strong>";
                          ?>
                        </td>
                      </tr>
                      <tr>
                        <td><a class="text-dark"><i class=""></i><?php echo "Status" ?></a></td>
                        <td> <?php echo "<strong>" . $row['e_status'] . "</strong>"; ?></td>
                      </tr>
                      <tr>
                        <td><a class="text-dark"><i class=""></i><?php echo "Batch Rating" ?></a></td>
                        <td>
                          <div class="rating-bar">
                            <?php
                            $rating_count  = $allevent->district_rating_count($row['district']);
                            $rating_sum    = $allevent->district_rating_sum($row['district']);
                            $rating        = $rating_sum / $rating_count;
                            //$rating = '5'; // Replace 'rating' with the actual column name in your database
                            for ($j = 1; $j <= 5; $j++) {
                              if ($j <= $rating) {
                                echo '<span class="fa fa-star checked"></span>';
                              } else {
                                echo '<span class="fa fa-star"></span>';
                              }
                            }
                            ?>
                          </div>
                          <small class="text-muted"><?php echo number_format($rating, 2); ?></small>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                  <div style="text-align: start; margin-left: 10px;">
                    <!-- <h2 class="font-weight-bold mb-0 fs-22  MT-0 leading-tight" style="color: #DF1755;">Number</h2> -->
                    <p><?php echo $row['address']; ?></p>
                  </div>
                </div>
              </div>
            </div>
            <!--/Left Side Content-->

            <!--Right Side Content-->
            <div class="col-xl-8 col-lg-4 col-md-12">
              <div class="card">

                <div class="wideget-user-tab">
                  <div class="tab-menu-heading">
                    <div class="tabs-menu1">
                      <ul class="nav">
                        <li>
                          <a href="#event_image" data-bs-toggle="tab" class="active">Picture</a>
                        </li>
                        <li>
                          <a href="#event_story" data-bs-toggle="tab">Success Story</a>
                        </li>
                        <li>
                          <a href="#event_guest" data-bs-toggle="tab">Guest</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="card mb-0 border-0">
                  <div class="card-body p-0">
                    <div class="border-0">
                      <div class="tab-content">

                        <div class="tab-pane active" id="event_image">
                          <div class="card-body">
                            <div class="row"> <?php
                                              $allevent  = new Front();
                                              $result    = $allevent->get_event_image($event_id);
                                              if ($result->rowCount() > 0) {
                                                while ($rowa = $result->fetch(PDO::FETCH_ASSOC)) {
                                              ?> <div class="col-xl-3 col-md-6">
                                    <div class="item-card-img">
                                      <a href="APIs/images/event/<?php echo $rowa['name']; ?>" target="_blank"></a>
                                      <img class="cover-image rotated-image" src="APIs/images/event/<?php echo $rowa['name']; ?>">
                                    </div>
                                  </div>
                                <?php }
                                              } else { ?> <div class="card-body">
                                  <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="support-service bg-white br-2">
                                      <h6>Event Image Not Available</h6>
                                    </div>
                                  </div>
                                </div> <?php } ?>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane" id="event_story">
                          <div class="card-body">
                            <div class="row"> <?php
                                              $allevent  = new Front();
                                              $result    = $allevent->get_event_image(1000);
                                              if ($result->rowCount() > 0) {
                                                while ($rowa = $result->fetch(PDO::FETCH_ASSOC)) {
                                              ?> <div class="col-xl-3 col-md-6">
                                    <div class="card overflow-hidden">
                                      <div class="item-card7-img">
                                        <div class="item-card7-imgs">
                                          <a href="APIs/images/event/<?php echo $rowa['name']; ?>" target="_blank"></a>
                                          <img class="cover-image rotated-image" src="APIs/images/event/<?php echo $rowa['name']; ?>" style="height: 150px;">
                                        </div>
                                      </div>
                                    </div>
                                  </div> <?php }
                                              } else { ?> <div class="card-body">
                                  <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="support-service bg-white br-2">
                                      <h6>Event Success story not available</h6>
                                    </div>
                                  </div>
                                </div> <?php } ?>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane" id="event_guest">
                          <div class="card-body">
                            <div class="table-responsive border-top mb-0 ">
                              <table class="table table-bordered table-hover  mb-0">
                                <thead class="text-white text-nowrap" style="background-color: #FDD9AE;">
                                  <tr>
                                    <th class="text-white">S. No.</th>
                                    <th class="text-white">Name</th>
                                    <th class="text-white">Designation</th>
                                    <th class="text-white">Date</th>


                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $alltrainee  = new Front();
                                  $result    = $alltrainee->get_event_guest($event_id);
                                  $i = 0;
                                  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                    $i++;
                                    $end_date = $row['v_date'];
                                    $e_dateTime = new DateTime($end_date);
                                    $new2DateFormat = $e_dateTime->format('j M, y');



                                  ?>
                                    <tr>
                                      <td><?php echo $i; ?>.</td>
                                      <td><?php echo $row['name']; ?></td>
                                      <td><?php echo $row['designation']; ?></td>
                                      <td><?php

                                          echo $new2DateFormat; ?></td>

                                    </tr>
                                  <?php } ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>


                      </div>



                    </div>
                  </div>
                </div>

              </div>
              <!--/Right Side Content-->

            </div>


          </div>
        </div>
      </div>
    </div>
  </section>


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
  <script src="assets/notiflix/notiflix-notify-aio-3.2.5.min.js"></script>
  <script src="assets/notiflix/notiflix-report-aio-3.2.5.min.js"></script>
  <script src="assets/notiflix/notiflix-confirm-aio-3.2.5.min.js"></script>
  <script src="assets/notiflix/notiflix-loading-aio-3.2.5.min.js"></script>
  <script src="assets/notiflix/notiflix-block-aio-3.2.5.min.js"></script>
  <script src="assets/js/admin.js"></script>
  <script src="assets/js/web.js"></script>
</body>

</html>