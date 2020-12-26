<?php
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/es':
        require 'lang_es.php';
        break;
    case '/cn';
        require 'lang_cn.php';
        break;
    case '/tg';
        require 'lang_tg.php';
        break;
    default:
        require 'lang_en.php';
        break;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?=$lang["pageTitle"]?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">

<link rel="icon" href="./assets/images/favicon.ico" /><!-- 48×48 -->
<link rel="icon" href="./assets/images/icon.svg" type="image/svg+xml" sizes="any" />
<link rel="apple-touch-icon" href="./assets/images/favico/apple.png" /><!-- 180×180 -->
<link rel="manifest" href="./manifest.webmanifest" />

<link rel="stylesheet" type="text/css" href="./assets/styles/font-awesome.min.css">
<link rel="stylesheet" type="text/css"  href="./assets/styles/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="./assets/styles/styles.css">
</head>
<body>

  <div class="modal welcome-pop" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body text-center">
          <div class="modal-body-logo">
            <img class="d-block d-md-none" src="./assets/images/logo_calscope.png" alt="logo">
            <img class="d-none d-md-block" src="./assets/images/logo_calscope_color.png" alt="logo">
          </div>
          <div class="">
            <h2><?=$lang["lang_modal_header"]?></h2>
            <p><?=$lang["lang_modal_select"]?></p>
            <div class="welcome-pop-btns">
              <div class="dropdown">
                <div class="dropdown-menu language-switcher-cmn">
                  <div>
                    <div class="custom-control custom-radio mt-3">
                      <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked="">
                      <label class="custom-control-label" for="customRadio1">English</label>
                    </div>
                  </div>
                  <div>
                    <div class="custom-control custom-radio mt-3">
                      <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio2">Español</label>
                    </div>
                  </div>
                  <div>
                    <div class="custom-control custom-radio mt-3">
                      <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio3">Tagalog</label>
                    </div>
                  </div>
                  <div>
                    <div class="custom-control custom-radio mt-3">
                      <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio4">中文</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="welcome-pop-btns">
              <div class="btn-row">
                <button class="btn btn-outline-danger btn-block btn-confirm"><?=$lang["btn_confirm"]?></button>
              </div>
            </div>
          </div>
          <div></div>
        </div>
      </div>
    </div>
  </div>

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

            <div class="dropdown mobile-language">
              <button type="button" class="btn btn-light dropdown-toggle btn-block" data-toggle="dropdown">
                <i class="fa fa-globe"></i>
              </button>
              <div class="dropdown-menu language-switcher-cmn">
                <div>
                  <div class="custom-control custom-radio mt-3">
                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" checked="">
                    <label class="custom-control-label" for="customRadio2">English</label>
                  </div>
                </div>
                <div>
                  <div class="custom-control custom-radio mt-3">
                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Español</label>
                  </div>
                </div>
                <div>
                  <div class="custom-control custom-radio mt-3">
                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio3">Tagalog</label>
                  </div>
                </div>
                <div>
                  <div class="custom-control custom-radio mt-3">
                    <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio4">中文</label>
                  </div>
                </div>
              </div>
            </div>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <div>
                <img class="menu-open-logo" src="./assets/images/logo_calscope_color.png" alt="logo">
              </div>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#faq-sec"><?=$lang["section_faqs"]?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#get-in-touch"><?=$lang["section_git"]?></a>
                </li>
                <li class="nav-item dropdown language-switcher">
                  <a class="nav-link dropdown-toggle" href="https://www.calscope.org/#" data-toggle="dropdown"><i class="fa fa-globe"></i> English</a>
                  <div class="dropdown-menu language-switcher-cmn">
                    <div>
                      <div class="custom-control custom-radio mt-3">
                        <input type="radio" id="customRadio1" name="english" class="custom-control-input" checked="">
                        <label class="custom-control-label" for="customRadio1">English</label>
                      </div>
                    </div>
                    <div>
                      <div class="custom-control custom-radio mt-3">
                        <input type="radio" id="spanish" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">Español</label>
                      </div>
                    </div>
                    <div>
                      <div class="custom-control custom-radio mt-3">
                        <input type="radio" id="customRadio3" name="vietnamese" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio3">Tagalog</label>
                      </div>
                    </div>
                    <div>
                      <div class="custom-control custom-radio mt-3">
                        <input type="radio" id="customRadio4" name="chinese" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio4">中文</label>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <div class="header-info">
      <div class="container">
        <div class="header-info-body">
          <h1><?=$lang["splash_hdr"]?></h1>
          <h4><?=$lang["splash_subhdr"]?></h4>
          <p><?=$lang["splash_body"]?></p>
        </div>
        <div class="header-btn-items">
          <ul>
            <li>
              <a class="btn btn-t1" href="#received-invitation"><?=$lang["cta_invite"]?></a>
            </li>
            <li>
              <a class="btn btn-t1" href="#got-kit"><?=$lang["cta_gotkit"]?></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="partners">
    <div class="container">
      <p class="text-center mb-1 collab"><?=$lang["text_collaboration"]?></p>
      <div class="partners-items">
        <div class="flex_row">
            <img src="./assets/images/logo_stanfordmed.png" alt="partner">
            <img src="./assets/images/logo_cdph.png" alt="partner">
            <img src="./assets/images/logo_enable.png" alt="partner">
            <img src="./assets/images/logo_gauss.png" alt="partner">
        </div>
      </div>
      <p class="text-center mb-1 collab"><?=$lang["text_partnerships"]?></p>
      <div class="partners-items">
        <div class="flex_row">
            <img src="./assets/images/logo_LA.png" alt="partner">
            <img src="./assets/images/logo_SD.png" alt="partner">
            <img src="./assets/images/logo_monterey.png" alt="partner">
            <img src="./assets/images/logo_alameda.png" alt="partner">
        </div>
        <div class="flex_row flex_tight">
        <div>
          <img src="./assets/images/logo_shasta.png" alt="partner">
          <img src="./assets/images/logo_eldorado.png" alt="partner">
          <img src="./assets/images/logo_kern.png" alt="partner">
        </div>
        </div>
      </div>
    </div>
  </div>

  <div class="how-it-work">
    <div class="container">
      <div class="section-ttl">
        <h2><?=$lang["section_hiw"]?></h2>
      </div>
      <div class="how-it-work-items">
        <div class="row">
          <div class="col-md-6 col-lg-3 how-it-work-item">
            <div class="how-it-work-item-inr">
              <div class="how-it-work-item-head">
                <div class="how-it-work-item-img">
                  <img src="./assets/images/hiw_1.png">
                </div>
                <h4>
                  <img class="how-it-work-item-step" src="./assets/images/step_1.png">
                  <span><?=$lang["hiw_1"]?></span>
                </h4>
              </div>
              <p><?=$lang["hiw_1_desc"]?></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 how-it-work-item">
            <div class="how-it-work-item-inr">
              <div class="how-it-work-item-head">
                <div class="how-it-work-item-img">
                  <img src="./assets/images/hiw_2.png">
                </div>
                <h4>
                  <img class="how-it-work-item-step" src="./assets/images/step_2.png">
                  <span><?=$lang["hiw_2"]?></span>
                </h4>
              </div>
              <p><?=$lang["hiw_2_desc"]?></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 how-it-work-item">
            <div class="how-it-work-item-inr">
              <div class="how-it-work-item-head">
                <div class="how-it-work-item-img">
                  <img src="./assets/images/hiw_3.png">
                </div>
                <h4>
                  <img class="how-it-work-item-step" src="./assets/images/step_3.png">
                  <span><?=$lang["hiw_3"]?></span>
                </h4>
              </div>
              <p><?=$lang["hiw_3_desc"]?></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 how-it-work-item">
            <div class="how-it-work-item-inr">
              <div class="how-it-work-item-head">
                <div class="how-it-work-item-img">
                  <img src="./assets/images/hiw_4.png">
                </div>
                <h4>
                  <img class="how-it-work-item-step" src="./assets/images/step_4.png">
                  <span><?=$lang["hiw_4"]?></span>
                </h4>
              </div>
              <p><?=$lang["hiw_4_desc"]?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="invitation-kit-1" id="invitation-kit-parent">
    <div class="container-fluid">
      <div class="invitation-kit-1-items">
        <div class="row">
          <div id="received-invitation"  class="col-md-12 invitation-kit-1-item received-invitation d-flex flex-column justify-content-center">
            <div class="received-invitation-head">
              <img class="invitation-kit-item-icon" src="./assets/images/Frame-1-1.png">
              <h3><?=$lang["invite_hdr"]?></h3>
              <p><?=$lang["invite_desc"]?></p>
            </div>
            <div class="received-invitation-access-code access-sec-form">
              <form id="invite" method="post" action="https://www.calscope.org/">
                <div class="form-group">
                  <input type="text" class="form-control" name="access_code" id="access_code" name="" placeholder="<?=$lang["placeholder_accesscode"]?>" required="required">
                  <div class="access-code-error"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="zip" id="zip" name="" placeholder="<?=$lang["placeholder_zip"]?>" required="required">
                  <div class="zip-code-error"></div>
                </div>
                <div class="btn-row">
                  <button type="button" class="btn btn-danger redirect-access"><?=$lang["btn_confirm"]?></button>
                </div>
              </form>
            </div>
            <div class="received-invitation-wrap"></div>
          </div>

          <div id="got-kit"  class="col-md-12 p-0 invitation-kit-1-item-wrp got-kit">
            <div class="got-kit-wrap">
              <div class="invitation-kit-1-item got-kit-item" aria-hidden="false" tabindex="0" role="tabpanel" >
              <div class="got-kit-item-head">
                <h3><?=$lang["kit_hdr"]?></h3>
              </div>
              <img src="./assets/images/pic_kitbox.png" >
              <div class="btn-row">
                <a href="https://artemis.gauss.com/#/qr-scan-instruction" class="btn btn-danger" tabindex="0"><?=$lang["btn_start"]?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="faq-sec" class="faq-sec">
    <div class="container">
      <div class="section-ttl">
        <h2><?=$lang["section_faqs"]?></h2>
        <p><?=$lang["faqs_desc"]?></p>
      </div>
      <div class="faq-sec-items">
        <?php
        for($i = 1; $i < 4; $i++){
            echo "<div class='faq-sec-item'>
              <div class='row'>
                <div class='col-md-5'>
                  <h4>".$lang["faqs_".$i."_q"]."</h4>
                </div>
                <div class='col-md-7'>
                  <div class='faq-sec-item-dec'>".$lang["faqs_".$i."_a"]."</div>
                </div>
              </div>
            </div>\r\n";
        }
        ?>
        
        <div class="faq-sec-item-more" style="display: none;">
            <?php
                for($i = 4; $i < 26; $i++){
                    echo "<div class='faq-sec-item'>
                      <div class='row'>
                        <div class='col-md-5'>
                          <h4>".$lang["faqs_".$i."_q"]."</h4>
                        </div>
                        <div class='col-md-7'>
                          <div class='faq-sec-item-dec'>".$lang["faqs_".$i."_a"]."</div>
                        </div>
                      </div>
                    </div>\r\n";
                }
            ?>
        </div>

        <div class="faq-sec-item-more-btn">
          <button class="faq-more-btn btn btn-outline-danger"><?=$lang["btn_readmore"]?></button>
        </div>
      </div>
    </div>
  </div>

  <div id="get-in-touch" class="newsletter-sec">
    <div class="container">
      <div class="newsletter-inner">
        <div class="section-ttl">
          <h2><?=$lang["git_hdr"]?></h2>
          <p><?=$lang["git_desc"]?></p>
        </div>
        <form id="stay_in_touch">
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="interest_email" name="interest_email"  placeholder="<?=$lang["[placeholder_enteremail]"]?>">
            <div class="input-group-append">
              <button class="btn btn-danger " type="button" style="z-index: 1;"><?=$lang["btn_signup"]?></button>
            </div>
          </div>
          <div class="interest-error"></div>
          <div class="newsletter-policy"><?=$lang["text_tos_privacy"]?></div>
        </form>
      </div>
    </div>
  </div>

  <footer class="footer-main">
    <div class="footer-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 offset-md-3">
            <div class="footer-menu">
              <ul>
                <li><a href="#faq-sec"><?=$lang["section_faqs"]?></a></li>
                <li><a href="#get-in-touch"><?=$lang["section_git"]?></a></li>
              </ul>
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
    <div class="footer-bottom"><?=$lang["text_copyright"]?></div>
  </footer>

<script type="text/javascript" src="./assets/scripts/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="./assets/scripts/popper.min.js"></script>
<script type="text/javascript" src="./assets/scripts/axios.js"></script>
<script type="text/javascript" src="./assets/scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="./assets/scripts/custom.js"></script>
<script>
var stanford                = {};
stanford.invite_endpoint    = `https://redcap.stanford.edu/api/?type=module&prefix=proj_calscope&page=endpoints%2Fget_household_invite&pid=21642&NOAUTH`;
stanford.activate_endpoint  = `https://redcap.stanford.edu/api/?type=module&prefix=proj_calscope&page=endpoints%2Fget_household_surveys&pid=21642&NOAUTH`;
stanford.interest_endpoint  = `https://redcap.stanford.edu/api/?type=module&prefix=proj_calscope&page=endpoints%2Fget_in_touch&pid=21642&NOAUTH`;
</script>
</body>
</html>

<script>
var stanford                = {};
stanford.ngrok              = "https://9b9b3250a2b3.ngrok.io";
stanford.invite_endpoint    = `${stanford.ngrok}/api/?type=module&prefix=calscope&page=endpoints%2Fget_household_invite&pid=26&NOAUTH`;
stanford.activate_endpoint  = `${stanford.ngrok}/api/?type=module&prefix=calscope&page=endpoints%2Fget_household_surveys&pid=26&NOAUTH`;
stanford.interest_endpoint  = `${stanford.ngrok}/api/?type=module&prefix=calscope&page=endpoints%2Fget_in_touch&pid=26&NOAUTH`;
</script>