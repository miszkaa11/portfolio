$(document).ready(function(){
    console.log('ready');

    // AOS Lib
    AOS.init();

    // Scrolled Nav
    jQuery(document).scroll(function () {
        let $window = jQuery(this);
        let scrollHeight = $window.scrollTop();
        let $elements = jQuery(".site-header, .main-navigation, .menu-toggle, .site-branding img");

        $elements.toggleClass('scrolled', scrollHeight > $elements.first().height());
    });

    // Offset
    $(".menu-item a").click(function (event) {
        event.preventDefault(); // Prevent default anchor behavior
        let target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 180
            }, 500); // Adjust animation speed as needed
        }

        $('.main-navigation').removeClass('toggled');
    });

    // Anchor scroll
    $(document).ready(function() {
        // Cache frequently used selectors
        let $anchors = $('a[href*="#"]:not([href="#"])');
        let $htmlBody = $('html, body');

        // Smooth scrolling on anchor click
        $anchors.click(function(event) {
            // Prevent default anchor behavior
            event.preventDefault();

            // Check if target exists and scroll to it
            let $this = $(this);
            let hash = $this.prop('hash');
            let target = $(hash);

            if (target.length === 0) {
                target = $('[name="' + hash.slice(1) + '"]');
            }

            if (target.length) {
                $htmlBody.animate({
                    scrollTop: target.offset().top - 280
                }, 400); // Smooth scrolling duration
            }
        });
    });

    // Gallery Page Slider
    $(".gallery-template__image").click(function () {
        $(".gallery-template__image").removeClass("active");
        $(this).addClass("active");
    });

    // Contact Acceptance
    $(document).ready(function() {
        // Cache jQuery selectors
        let $showMore1 = $(".show-more-1");
        let $accept1Cta = $(".accept-1-cta");

        $showMore1.hide(0);

        $accept1Cta.click(function(e) {
            // Toggle slide and class
            $showMore1.stop().slideToggle(300);
            $(this).toggleClass("open");

            // Update button text based on class presence
            if ($(this).hasClass("open")) {
                $(this).text("Close");
            } else {
                $(this).text("Show full consent");
            }

            // Prevent default action
            e.preventDefault();
        });
    });

});