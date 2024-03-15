<?php require_once('manage/app/app_include/session.php'); ?>
<?php require_once('manage/app/app_include/function.php'); ?>
<?php include 'manage/app/action/class/user-class.php';?>
<?php include 'manage/app/action/class/event-class.php';?>
<!doctype html>
<html lang="en" dir="ltr">
   <head>
       
      <!--Google Analytics Start-->
      <?php include 'web_include/google_analytics.php';?>
      <!--Google Analytics End-->
      
      <!-- Title -->
      <title>Mission Shakti | All Event</title> 
       
      <meta charset="UTF-8">
      <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="keywords" content="Mission Shakti, UP Mission Shakti, up mission shakti, up missionshakti, Mission Shakti 2.0, mission shakti 2.0, Uttar Pradesh Mission Shakti">
      <meta name="author" content="U.P Industrial Consultants Limited">
      <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="HandheldFriendly" content="True">
      <meta name="MobileOptimized" content="320">
      

      <link rel="stylesheet" href="assets//fonts/fonts/font-awesome.min.css">
      <!-- Bootstrap Css -->
      <link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
      <!-- Dashboard Css -->
      <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/dark-style.css" rel="stylesheet" />
      <link href="assets/css/transparent-style.css" rel="stylesheet" />
      <!-- Font-awesome  Css -->
      <link href="assets/css/transparent-style.css" rel="stylesheet"/>
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
      <link rel="stylesheet" href="assets/color-skins/demo.css"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   </head>
   <body>
      <!--Loader-->
      <div id="global-loader">
         <img src="https://aiimsrbl.edu.in/assets/images/loader.svg" class="loader-img" alt="">
      </div>
      <!--Topbar-->
      <?php include 'web_include/web_navbar.php';?>
      <!--Breadcrumb-->
      <div class="bannerimg cover-image bg-background3">
         <div class="header-text mb-0">
            <div class="container">
               <div class="text-center text-white ">
                  <h1 class="">All Events</h1>
                  <ol class="breadcrumb text-center">
                     <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                     <li class="breadcrumb-item active text-white" aria-current="page">All Events</li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <!--/Breadcrumb-->
      <!--Tenders listing-->
      <section class="sptb">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 web-news ajax-table-data">
                  <div class="card">
                     <div class="card-header">
                        <h3 class="card-title">All Event</h3>
                     </div>
                     <div class="card-body">
                        <div class="table-responsive border-top mb-0 ">
                           <table class="table table-bordered table-hover  mb-0">
                              <thead class="bg-primary text-white text-nowrap">
                                 <tr>
                                    <th class="text-white">S. No.</th>
                                    <th class="text-white">Name</th>
                                    <th class="text-white">Start Date</th>
                                    <th class="text-white">End Date</th>
                                    <th class="text-white">District</th>
                                    <th class="text-white">Status</th>
                                    <th class="text-white">Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    $allevent  = new Event();
                                    $result    = $allevent->get_allevent_frnt1();
                                    $i = 0;
                                    while($row = $result->fetch(PDO::FETCH_ASSOC))
                                    {
                                    $i++;
                                 ?>
                                 <tr>
                                    <td><?php echo $i; ?>-</td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['start_date']; ?></td>
                                    <td><?php echo $row['end_date']; ?></td>
                                    <td><?php echo $row['district']; ?></td>
                                    <td><?php echo $row['e_status']; ?></td>
                                    <td><a href="event_details.php?event_id=<?php echo $row['id']; ?>" class="btn btn-outline-primary btn-sm employers-btn">View <i class="fa fa-eye"></i></a></td>  
                                 </tr>
                                 <?php } ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="center-block text-center">
                     <ul class="pagination mb-5 mb-lg-0">
                        <li class="page-item page-prev" aria-disabled="true" aria-label="&laquo; Previous">
                           <a class="page-link" href="javascript:void(0);" aria-hidden="true">Prev</a>
                        </li>
                        <li class="page-item active"  aria-current="page">
                           <a class="page-link" href="javascript:void(0);">1</a>
                        </li>
                        <li class="page-item">
                           <a class="page-link" href="https://www.aiimsrbl.edu.in/news-circular?page=2">2</a>
                        </li>
                        <li class="page-item">
                           <a class="page-link" href="https://www.aiimsrbl.edu.in/news-circular?page=3">3</a>
                        </li>
                        <li class="page-item">
                           <a class="page-link" href="https://www.aiimsrbl.edu.in/news-circular?page=4">4</a>
                        </li>
                        <li class="page-item">
                           <a class="page-link" href="https://www.aiimsrbl.edu.in/news-circular?page=5">5</a>
                        </li>
                        <li class="page-item page-next">
                           <a class="page-link"  href="https://www.aiimsrbl.edu.in/news-circular?page=2" rel="next" aria-label="Next &raquo;">Next</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--/Tenders Listings-->
      <!--Footer Section-->
      <?php include 'web_include/web_footer.php';?>
      <!--Footer Section-->


      <!--Chat Section-->
      <script src="//code.tidio.co/qzcv6uu0f30uubc7ji0mti2sumkxxcf3.js" async></script>
      <!--/Chat Section-->

      <!-- Back to top -->
      <a href="#top" id="back-to-top"><i class="fa fa-arrow-up"></i></a>
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
      <!-- <script>
         Notiflix.Notify.init({
            showOnlyTheLastOne:true,});
         Notiflix.Confirm.init({
            cancelButtonBackground:'#dc3545',
            okButtonBackground:'#1650e2',
            titleColor:'black'});
         $(document).ready(function(){});
      </script>
      <script type="text/javascript">
         function googleTranslateElementInit() {
         new google.translate.TranslateElement({pageLanguage: 'en',includedLanguages : 'en,hi'}, 'google_translate_element');}
      </script>
      <script>
         var $affectedElements = $("html, body, div,p,li,span,a,row,img,#about,fa,fab,aiims-Welcome"); 
         // Storing the original size in a data attribute so size can be reset
         $affectedElements.each( function(){
           var $this = $(this);
           $this.data("orig-size", $this.css("font-size") );});
         $("#btn-increase").click(function(){
           changeFontSize(1);})
         $("#btn-decrease").click(function(){
           changeFontSize(-1);})
         $("#btn-orig").click(function(){
         $affectedElements.each( function(){
            var $this = $(this);
            $this.css( "font-size" , $this.data("orig-size") );});})
         function changeFontSize(direction){
         $affectedElements.each( function(){
            var $this = $(this);
            $this.css( "font-size" , parseInt($this.css("font-size"))+direction );});}
      </script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>     -->
   </body>
</html>