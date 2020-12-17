
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

var x = window.matchMedia("(max-width: 991px)");
responsiveMenu(x);
x.addListener(responsiveMenu);

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