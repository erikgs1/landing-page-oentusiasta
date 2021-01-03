
function responsiveMenu(x){
  if (x.matches){
    (function($){
      $(".close-open").click(function() {
        if($(".main-menu").hasClass("menu-close")) {
          $(".main-menu").animate({left: "0vw"}).removeClass("menu-close");
          $(".line").css("background-color", "white");
        }
          
        else {
          $(".main-menu").animate({left: "-100vw"}).addClass("menu-close");
          $(".line").css("background-color", "black");
        }
      });
    })(jQuery);
  }else{
    (function($){
      $(".close-open").click(function() {
        if($(".main-menu").hasClass("menu-close")) {
          $(".main-menu").animate({top: "0px"}).removeClass("menu-close");
          $(".line").css("background-color", "white");
        }
          
        else {
          $(".main-menu").animate({top: "-300px"}).addClass("menu-close");
          $(".line").css("background-color", "black");
        }
      });
    })(jQuery);
  }
}

var x = window.matchMedia("(max-width: 991px)");
responsiveMenu(x);
x.addListener(responsiveMenu);


(function($){
  $(".buttons-menu").click(function() {
    if($(".main-menu").hasClass("menu-close")) {
      $(".buttons-menu").css({position: "relative"}).removeClass("menu-close");
    }
      
    else {
      $(".buttons-menu").css({position: "fixed"}).removeClass("menu-close");
    }
  });
})(jQuery);
(function($){
  $(".before-search").click(function(){
    if($(".before-search").hasClass("search-close")){
      $(".before-search").css("display", "none");
      $(".search-button").addClass("border--bottom");
      $(".search-button").css("border-color", "#000");
      $(".before-search").css("display", "none");
      $(".search-form").css("display", "block");
      $(".search-form").css("width", "220px");
    }
  });
})(jQuery);



function responsiveLogo(logo){
  if (logo.matches){
    (function($){
      $(".close-open").click(function() {
        if($(".main-menu").hasClass("menu-close")) {
          $(".logo").css({margin: "-58px 0 0 0"}).removeClass("menu-close");
        }
          
        else {
          $(".logo").css({margin: "0"}).removeClass("menu-close");
        }
      });
    })(jQuery);
  }
}

var logo = window.matchMedia("(max-width: 991px)");
responsiveLogo(x);
logo.addListener(responsiveLogo);