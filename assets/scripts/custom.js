$(document).ready(function () {
  // redirect as per selcted language
  let selectedLanguage  = localStorage.getItem("lang") || "en";
  let currentURL        = window.location.href;
  let currentAddressURL = currentURL.split("/");
  let currentAddress    = currentAddressURL[currentAddressURL.length - 2];
  let currentPageName   = currentAddressURL[currentAddressURL.length - 1] || undefined;

  console.log("selected langague", selectedLanguage);
  console.log("Current page name", window.location.hostname, currentAddress, currentPageName , currentAddressURL);

  // language select dropdown
  $(".header .navbar-dark .navbar-toggler").click(function () {
    $("body").toggleClass("mobile-menu-open");
  });

  $(".custom-control-input").click(() => {
    let host = window.location.hostname;

    if ($("input[name='customRadio']:checked").attr("id") === "customRadio1") {
      if (currentAddress !== undefined) {
        console.log("english selected");
        localStorage.setItem("lang", "en");
        window.location.replace(`https://${host}`);
      }
    } else if ( $("input[name='customRadio']:checked").attr("id") === "customRadio2" ) {
      if (currentAddress !== "es") {
        console.log("spanish selected");
        localStorage.setItem("lang", "es");
        window.location.replace(`https://${host}/es`);
      }
    } else if ( $("input[name='customRadio']:checked").attr("id") === "customRadio4" ) {
      if (currentAddress !== "cn") {
        localStorage.setItem("lang", "cn");
        console.log("chinese selected");
        window.location.replace(`https://${host}/cn`);
      }
    } else if ( $("input[name='customRadio']:checked").attr("id") === "customRadio3" ) {
      if (currentAddress !== "tg") {
        localStorage.setItem("lang", "tg");
        console.log("tagalog selected");
        window.location.replace(`https://${host}/tg`);
      }
    }
  });

  // DONEZO
  var dynamic_language = {};
  dynamic_language["en"] = {
     "Read More" : "Read More"
    ,"Read Less" : "Read Less"
    ,"Please enter a valid email" : "Please enter a valid email"
    ,"Thank you for your interest, we will be in touch!" : "Thank you for your interest, we will be in touch!"
    ,"Something went wrong...Please try again later" : "Something went wrong...Please try again later"
    ,"Please enter a valid access code" : "Please enter a valid access code"
    ,"Please enter a valid zip code" : "Please enter a valid zip code"
  };
  dynamic_language["es"] = {
     "Read More" : "Leer más"
    ,"Read Less" : "Leer menos"
    ,"Please enter a valid email" : "Por favor introduzca una dirección de correo electrónico válida"
    ,"Thank you for your interest, we will be in touch!" : "Gracias por tu interés, ¡nos pondremos en contacto!"
    ,"Something went wrong...Please try again later" : "Algo salió mal ... Vuelve a intentarlo más tarde"
    ,"Please enter a valid access code" : "Ingrese un código de acceso válido"
    ,"Please enter a valid zip code" : "Por favor ingrese un código postal válido"
  };
  dynamic_language["tg"] = {
     "Read More" : "Magbasa Nang Higit Pa"
    ,"Read Less" : "Magbasa ng Mas kaunti"
    ,"Please enter a valid email" : "Mangyaring maglagay ng wastong email"
    ,"Thank you for your interest, we will be in touch!" : "Salamat sa iyong interes, makikipag-ugnay kami!"
    ,"Something went wrong...Please try again later" : "Mayroong mali ... Mangyaring subukang muli sa ibang pagkakataon"
    ,"Please enter a valid access code" : "Mangyaring maglagay ng wastong access code"
    ,"Please enter a valid zip code" : "Mangyaring maglagay ng wastong zip code"
  };
  dynamic_language["cn"] = {
     "Read More" : "显示更多"
    ,"Read Less" : "显示更少"
    ,"Please enter a valid email" : "请输入有效电子邮件"
    ,"Thank you for your interest, we will be in touch!" : "感谢您的关注，我们将与您联系！"
    ,"Something went wrong...Please try again later" : "发生错误。请稍后再试"
    ,"Please enter a valid access code" : "请输入有效的访问代码"
    ,"Please enter a valid zip code" : "请输入有效的邮政编码"
  };

  // access code and zip code API integration
  $(".redirect-access").click(function (ev) {
    ev.preventDefault();
    
    let return_error = false;

    if($("#access_code").val() === "" || $("#access_code").val() === undefined || $("#access_code").val().length !== 8){
      $(".access-code-error").text(dynamic_language[selectedLanguage]["Please enter a valid access code"]);
      return_error = true;
    }

    if($("#zip").val() === "" || $("#zip").val() === undefined){
      $(".zip-code-error").text(dynamic_language[selectedLanguage]["Please enter a valid zip code"]);
      return_error = true;
    }

    if(!return_error){
      let formData = new FormData();
      formData.append("access_code", $("#access_code").val());
      formData.append("zip", $("#zip").val());
      formData.append("language", localStorage.getItem("lang"));

      axios({
        method  : "POST",
        url   : stanford.invite_endpoint,
        data  : formData,
        dataType: 'json'
      }).then((result) => {
        let res = result.data;
        
        console.log("api return", res);
        if(res.survey_url) {
          window.location.href = res.survey_url;
        } else {
          $(".zip-code-error").text(res.error);
        }

        setTimeout(function(){
          $(".zip-code-error").text("");
        }, 3000);
      }).catch((err) => {
        console.log("error", err);
        $(".zip-code-error").text(dynamic_language[selectedLanguage]["Something went wrong... Please try again later"]);
      });

      return;
    }
  });

  // interest sign up API integration
  $("#stay_in_touch button").click((ev) => {
    ev.preventDefault();

    let return_error = false;

    if($("#interest_email").val() === "" || $("#interest_email").val() === undefined){
      $(".interest-error").text(dynamic_language[selectedLanguage]["Please enter a valid email"]);
      return_error = true;
    }

    if(!return_error){
      let formData = new FormData();
      formData.append("interest_email", $("#interest_email").val());
      formData.append("language", localStorage.getItem("lang"));

      axios({
        method  : "POST",
        url   : stanford.interest_endpoint,
        data  : formData,
        dataType: 'json'
      }).then((result) => {
        let res = result.data;
        console.log("api return", res);

        //TODO SHOW MESSAGE
        if(res.errors.length) {
          $(".interest-error").text(res.errors.join(", "));
        } else {
          $(".interest-error").addClass("success").text(dynamic_language[selectedLanguage]["Thank you for your interest, we will be in touch!"]);
        }

        setTimeout(function(){
          $(".interest-error").removeClass("success").text("");
        }, 3000);
      }).catch((err) => {
        console.log("error", err);
        $(".interest-error").text(dynamic_language[selectedLanguage]["Something went wrong...Please try again later"]);
      });

      return;
    }
  });

  // mobile view nav links
  $(".navbar-nav .nav-link").click(function(){
    $(".navbar-toggler").trigger("click");
  });

  // invite form error display
  $("#access_code, #zip").keypress((data) => {
    $(".access-code-error").text("");
    $(".zip-code-error").text("");
  });

  // interest sign up error display
  $("#interest_email").keypress((data) => {
    $(".interest-error").text("");
  });

  // show more faqs
  $(".faq-more-btn").click(function () {
    $(".faq-sec-item-more").slideToggle();
    if( $(this).hasClass("less") ){
      $(this).removeClass("less").text(dynamic_language[selectedLanguage]["Read More"]);
    }else{
      $(this).addClass("less").text(dynamic_language[selectedLanguage]["Read Less"]);
    }
  });

  // initial language select modal (TODO maybe do away with this)
  if ( localStorage.getItem("lang") === undefined || localStorage.getItem("lang") === null ) {
    $("#myModal").modal("show");
  }
  $(".welcome-pop-btns .btn-confirm").click(function () {
    $("#myModal").modal("hide");
  });
});
