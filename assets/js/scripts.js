$(document).ready(function(){
    console.log('ready for action');

    // AOS Lib
    AOS.init();

    // Scrolled Nav
    $(document).scroll(function () {
        let $window = jQuery(this);
        let scrollHeight = $window.scrollTop();
        let $elements = jQuery(".site-header, .main-navigation, .menu-toggle, .site-branding img");

        $elements.toggleClass('scrolled', scrollHeight > $elements.first().height());
    });

    // Offset
    $(".menu-item a").click(function(event) {

        // Close the navigation menu
        $('.main-navigation').removeClass('toggled');

        // Get the target element based on the link's hash
        let target = $(this.hash);

        // If target element doesn't exist, try finding it by name attribute
        target = target.length ? target : $('[name="' + this.hash.slice(1) + '"]');

        // If target element exists, scroll to it
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 180
            }, 0 ); // Adjust animation duration as needed
        }
    });

    // Anchor scroll
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
            }, 0 ); // Smooth scrolling duration
        }
    });

    // Gallery Page Slider
    $(".gallery-template__image").click(function () {
        $(".gallery-template__image").removeClass("active");
        $(this).addClass("active");
    });

    // Contact Acceptance
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