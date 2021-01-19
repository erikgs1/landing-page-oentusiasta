
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

function responsiveSearch(search){
  if (search.matches){
    (function($){
      $(".close-open").click(function() {
        if($(".main-menu").hasClass("menu-close")) {
          $(".buttons-menu").css("width", "100%");
        }
          
        else {
          $(".buttons-menu").css("width", "80vw");
        }
      });
    })(jQuery);
  }
}
var search = window.matchMedia("(min-width: 575.98px) and (max-width: 991px)");
responsiveSearch(search);
search.addListener(responsiveSearch);


(function($){
  $(".buttons-menu").click(function() {
    if($(".main-menu").hasClass("menu-close")) {
      $(".buttons-menu").css("position", "relative").removeClass("menu-close");
      $(".before-search").css("filter", "invert(0)");
      $(".after-search").css("filter", "invert(0)");
      $(".input-box-shadow").css("filter", "invert(0)");
      $(".search-button").css("border-color", "black");
      $(".search-field").css("color", "black");
    }
      
    else {
      $(".buttons-menu").css("position", "fixed").removeClass("menu-close");
      $(".before-search").css("filter", "invert(1)");
      $(".after-search").css("filter", "invert(1)");
      $(".input-box-shadow").css("filter", "invert(1)");
      $(".search-button").css("border-color", "white");
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
          $(".logo").css("margin", "-28px 0 0 0").removeClass("menu-close");
          $(".logo").css("filter", "invert(0)");
        }
          
        else {
          $(".logo").css("margin", "-14px 0 0 0").removeClass("menu-close");
          $(".logo").css("filter", "invert(1)");
          $(".logo").css("z-index", "1");
        }
      });
      
    })(jQuery);
    (function($){
      $(".before-search").click(function(){
        if($(".before-search").hasClass("search-close")){
          $(".logo-text").css("lineHeight", "170px");
          $(".logo").css("height", "110px");
        }
      });
    })(jQuery);
  }
}

var logo = window.matchMedia("(max-width: 991px)");
responsiveLogo(x);
logo.addListener(responsiveLogo);

