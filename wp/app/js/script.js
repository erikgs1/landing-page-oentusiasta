
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
