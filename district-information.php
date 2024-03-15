<?php require_once('manage/app/app_include/session.php'); ?> 
<?php require_once('manage/app/app_include/function.php'); ?>
<?php include 'manage/app/action/class/front-class.php';?> 
 
 <?php
   $district = $_GET['district'];
  //  $allevent  = new Front();
  //  $result    = $allevent->get_allevent($event_id);
  //  $row       = $result->fetch(PDO::FETCH_ASSOC);
  ?>

<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <!--Google Analytics Start-->
     <?php include 'web_include/google_analytics.php';?>
    <!--Google Analytics End-->

    <!-- Title -->
    <title>Mission Shakti | District Information</title>

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
        font-size: 10px;
    }

    .fa-star {
        color: gray;
    }

    .fa-star.checked {
        color: orange;
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
    <?php include 'web_include/web_navbar.php';?>
    <!--/Topbar-->
   
    <!--Breadcrumb-->
    <div class="bannerimg cover-image bg-background3">
      <div class="header-text mb-0">
        <div class="container">
          <div class="text-center text-white ">
            <h1 class=""> <?php echo $district; ?> </h1>
            <ol class="breadcrumb text-center">
              <li class="breadcrumb-item">
                <a href="index">Home</a>
              </li>
              <li class="breadcrumb-item active text-white" aria-current="page">District Information</li>
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

        <div class="col-xl-12 col-lg-4 col-md-12">
            <div class="card-header" style="background-color: #FDD9AE;">
              <h3 class="card-title"> <?php echo $district; ?> </h3>
            </div>
            <div class="card">
              <div class="table-responsive border-top mb-0 ">
                <table class="table table-bordered table-hover  mb-0">
                    <thead class="text-white text-nowrap"style="background-color: #FDD9AE;" >
                        <tr>
                          <th class="text-white">SN</th>
                          <th class="text-white">Event Name</th>
                          <th class="text-white">Started Date</th>
                          <th class="text-white">Completion Date</th>
                          <th class="text-white">District</th>
                          <th class="text-white">Trainee</th>
                          <th class="text-white">Reg</th>
                          <th class="text-white">Mudra</th>
                          <th class="text-white">Status</th>
                          <th class="text-white">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                            $allevent  = new Front();
                            $result    = $allevent->get_district_event_list($district);
                            $trainee  = new Front();
                       
                            $i = 0;
                            $total_trainee=0;
                            $total_registration=0;
                            $total_mudra=0;
                            while($row = $result->fetch(PDO::FETCH_ASSOC))
                              {

                                $i++;
                                $trainee_count = $trainee->event_trainee_count($row['id']);  
                                $trainee_reg   = $trainee->event_trainee_registration_form_count($row['id']);  
                                $trainee_mudra = $trainee->event_trainee_mudra_form_count($row['id']); 
                                    
                                $total_trainee=$total_trainee+$trainee_count;
                                $total_registration=$total_registration+$trainee_reg;
                                $total_mudra=$total_mudra+$trainee_mudra;
                                    
                                $start_date=$row['start_date'];
                                $s_dateTime = new DateTime($start_date);
                                $newDateFormat = $s_dateTime->format('j M, y');

                                $end_date=$row['end_date'];
                                $e_dateTime = new DateTime($end_date);
                                $new2DateFormat = $e_dateTime->format('j M, y');
                            ?>
                            <tr>
                              <td><?php echo $i; ?>.</td>
                              <!-- <td><a href="event-information?event_id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></td> -->
                              <td><?php echo $row['name']; ?></td>
                              <td><?php echo $newDateFormat; ?></td>
                              <td><?php echo $new2DateFormat; ?></td>
                              <td><?php echo $row['district']; ?></td>
                              <td><?php echo $trainee_count; ?></td>
                              <td><?php echo $trainee_reg; ?></td>
                              <td><?php echo $trainee_mudra; ?></td>
                              <td><?php echo $row['e_status']; ?></td>
                              <td><a href="event-detail?event_id=<?php echo $row['id']; ?>" class="btn btn-outline-primary btn-sm employers-btn" target="_blank">View <i class="fa fa-eye"></i></a></td>  
                              <!-- <td><a href="#" class="btn btn-outline-primary btn-sm employers-btn">View <i class="fa fa-eye"></i></a></td>   -->
                            </tr>
                          <?php } ?>
                        </tbody>
                        <thead class="text-white text-nowrap"style="background-color: #FDD9AE;" >
                          <tr>
                            <th class="text-white"></th>
                            <th class="text-white"></th>
                            <th class="text-white"></th>
                            <th class="text-white"></th>
                            <th class="text-white"></th>
                            <th class="text-white"><?php echo $total_trainee; ?></th>
                            <th class="text-white"><?php echo $total_registration; ?></th>
                            <th class="text-white"><?php echo $total_mudra; ?></th>
                            <th class="text-white"></th>
                            <th class="text-white"></th>
                          </tr>
                        </thead>
                </table>
              </div>
            </div>            
          </div>
        </div>
        </div>
      </div>
    </section>


    <!--Footer Section--> 
    <?php include 'web_include/web_footer.php';?>
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