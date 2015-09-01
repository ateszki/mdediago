jQuery(function($) {
    "use strict";

    if($('#buttons').length){
        $('#buttons').akordeon();
    }
    if($('#button-less').length){
        $('#button-less').akordeon({ buttons: false, toggle: true, itemsOrder: [2, 0, 1] });
    }


    $(window).load(function(){
        if($('.flexslider').length){
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        }

    });

    if($( "#tabs").length){
        $( "#tabs" ).tabs();
    }

    $("a.gotoOpinaYValora").click(function(event){
        event.preventDefault();
        $( "#tabs" ).tabs( "option", "active", 3 );
    });
    

});


