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

    //opinar y valorar
    $("#formopinar").submit(function(event){
        event.preventDefault();
        var url = $(this).attr("action");
        $.ajax({
           type: "POST",
           url: url,
           data: $("#formopinar").serialize(), // serializes the form's elements.
           success: function(data)
           {
                $("#formopinar").hide();
                $("div.opinion-gracias").show();
               //return true; // show response from the php script.
           },
           fail: function(data){
            alert('ocurrió un error');
           }
         });

    return false;
    });




    $("a[data-calificador]").click(function(event){
        event.preventDefault();
        var calificador = $(this).data("calificador");
        var seleccion = $(this).data("value");
        $("#"+calificador).val(seleccion);
        $("a[data-calificador='"+calificador+"']").each(function(index){
            if(index+1<=seleccion){
                //console.log($($(this).children("img")[0]).attr('src'));
                $($(this).children("img")[0]).attr("src","/css/images/hart.png");
            } else {
                $($(this).children("img")[0]).attr("src","/css/images/hart_empty.png");
            }
        }); 
    });

});

