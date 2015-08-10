//jQuery code
jQuery(function($) {
	"use strict";



	//Header Slider
    if($('.top-slider').length){
        $('.top-slider').flexslider({
            animation:"slide",
            slideshowSpeed: 10000,
            animationSpeed: 500,
            prevText:"",
            nextText:"",
            start: function(){
                $('.top-slider .contry').removeClass('slideLeft');
                $('.top-slider .flex-active-slide .contry').addClass('slideLeft');
            },
            after: function(){
                $('.top-slider .contry').removeClass('slideLeft');
                $('.top-slider .flex-active-slide .contry').addClass('slideLeft');
            }
        });
        $('.top-slider .flex-viewport').css('overflow','');
    }



    //Team Slider
    if($('.team-slider').length){
        $('.team-slider').flexslider({
            animation: "slide",
            prevText: "",
            nextText: "",
            controlNav: false,
            directionNav: false,
            slideshow: false,
            useCSS: false,
            start: function() {
                $('.team-slider li').css('opacity','1');
            }
        });

        // Team Slider Directions
        $('section.team .prev').click(function() {
            var slider = $('.team-slider').data('flexslider');
            slider.flexslider("prev");
        });
        $('section.team .next').click(function() {
            var slider = $('.team-slider').data('flexslider');
            slider.flexslider("next");
        });
    }


    //Seach Box Button
    $('.search-box .button_s').on('click',function(){
        $('.search-box .form_box').toggle();
    });

    //Mobile Select navigation
    //Select Navigation on Mobile Devices
    $('.header .mobile-menu select').change(function(){
        var url = $(this).val();
        if (url) {
            window.location = url;
        }
        return false;
    });

    $(window).load(function(){
        if (jQuery.isFunction(jQuery.fn.isotope)) {
            // initialize Isotope
            $('.blogpostgrid').isotope({
                itemSelector : '.element-item',
                transformsEnabled: true
            });
            $(window).smartresize(function(){
                $('.blogpostgrid').isotope({
                    itemSelector : '.element-item',
                    transformsEnabled: true
                });
            });

        }

    });


});

