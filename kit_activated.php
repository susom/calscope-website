<?php
$survey_first = "Please complete surveys first";
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAL-Scope COVID-19 Study - Kit Activated Landing Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">

<link rel="icon" href="./assets/images/favicon.ico" /><!-- 48×48 -->
<link rel="icon" href="./assets/images/icon.svg" type="image/svg+xml" sizes="any" />
<link rel="apple-touch-icon" href="./assets/images/favico/apple.png" /><!-- 180×180 -->
<link rel="manifest" href="./manifest.webmanifest" />

<link rel="stylesheet" type="text/css" href="./assets/styles/font-awesome.min.css">
<link rel="stylesheet" type="text/css"  href="./assets/styles/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="./assets/styles/styles.css">
<style>
  .video_ifu:after{
    content:"<?=$survey_first?>";
  }
</style>
</head>
<body class="activation_landing_page">

  <div class="header">
    <video poster="./assets/images/bg_calscope.png" autoplay="" loop="" muted="" class="header__video">
      <source src="./assets/images/banner_vid.mp4">
    </video>

    <div class="header-menu">
      <div class="container-fluid">
        <div class="header-inner">
          <nav class="navbar navbar-expand-lg navbar-dark">
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand logo" href="https://www.calscope.org">
              <img class="" src="./assets/images/logo_calscope.png" alt="logo">
            </a>

          </nav>
        </div>
      </div>
    </div>

    <div class="header-info">
      <div class="container">
        <div class="header-info-body">
          <h1>Your kit is ready to use!</h1>
          <p>Please complete the participant survey(s) then watch the video to proceed.</p>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6 header-btn-items survey_urls">
            <img class="how-it-work-item-step" src="./assets/images/step_1.png">
            <ul>
              <li><a class="btn btn-t1 adult_survey" href="#">Adult Participant Survey</a></li>
              <li><a class="btn btn-t1 child_survey" href="#">Child Participant Survey</a></li>
            </ul>
          </div>
          <div class="col-sm-12 col-md-6 video_ifu">
            <img class="how-it-work-item-step" src="./assets/images/step_2.png">
            <iframe  src="https://www.youtube.com/embed/FuhHfxjxATc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer-main">
    <div class="footer-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 offset-md-3">
            <div class="footer-menu">
            </div>
          </div>
          <div class="col-md-3">
            <div class="social-icon">
              <!-- <ul>
                <li><a href="https://www.calscope.org/#"><img src="./assets/images/ic_FB.png"><img class="social-icon-hover" src="./assets/images/ic_FB_pressed.png"></a></li>
                <li><a href="https://www.calscope.org/#"><img src="./assets/images/ic_IG.png"><img class="social-icon-hover" src="./assets/images/ic_IG_pressed.png"></a></li>
                <li><a href="https://www.calscope.org/#"><img src="./assets/images/ic_LI.png"><img class="social-icon-hover" src="./assets/images/ic_LI_pressed.png"></a></li>
                <li><a href="https://www.calscope.org/#"><img src="./assets/images/ic_Twitter.png"><img class="social-icon-hover" src="./assets/images/ic_Twitter_pressed.png"></a></li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">©CALSCOPE. All Rights Reserved</div>
  </footer>

<script type="text/javascript" src="./assets/scripts/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="./assets/scripts/popper.min.js"></script>
<script type="text/javascript" src="./assets/scripts/axios.js"></script>
<script type="text/javascript" src="./assets/scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="./assets/scripts/custom.js"></script>
<script>
var stanford                = {};
stanford.activate_endpoint  = `https://redcap.stanford.edu/api/?type=module&prefix=proj_calscope&page=endpoints%2Fget_household_surveys&pid=21642&NOAUTH`;

let raw           = localStorage.getItem("activated_kit");
let res           = JSON.parse(raw);
let participants  = res["participants"];
let adult = participants["adult"];
let child = participants["child"];

$(".adult_survey").attr("href", adult["survey_url"]);
if(adult["complete"]){
  $(".adult_survey").removeAttr("href").attr("disabled",true);
}

if(child["survey_url"]){
  $(".child_survey").attr("href", child["survey_url"]).fadeIn("fast");
  if(child["complete"]){
    $(".child_survey").removeAttr("href").attr("disabled",true);
  }
}else{
  $(".child_survey").parent().remove();
}

//show video IFU if either is complete
if(adult["complete"] || (child && child["complete"])){
  $(".video_ifu").addClass("allow_video");
}
</script>
</body>
</html>
