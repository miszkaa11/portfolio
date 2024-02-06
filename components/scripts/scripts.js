$(document).ready(function(){
    console.log('ready');

    // AOS Lib
    AOS.init();

    // Offset
    $(".menu-item a").click(function () {
        $('.main-navigation').removeClass('toggled');
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 180
                }, 0);
                return false;
            }
        }
      });

      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 280
                }, 0);
                return false;
            }
        }
    });

    // Gallery Page Slider
      $(".gallery-template__image").click(function () {
        $(".gallery-template__image").removeClass("active");
        $(this).addClass("active");
    });

    // Contact Acceptance
    $(".show-more-1").hide(0)
    $(".accept-1-cta").click(function(e){
      $(".show-more-1").stop().slideToggle(300)
      if($(this).text() == "Show full consent"){
         $(this).text("Close");
      } else{
         $(this).text("Show full consent");
      }
      e.stopPropagation();
      e.preventDefault();
    });
    
});