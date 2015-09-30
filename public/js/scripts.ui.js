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

      $.widget( "custom.catcomplete", $.ui.autocomplete, {
        _create: function() {
          this._super();
          this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
        },
        _renderMenu: function( ul, items ) {
          var that = this,
            currentCategory = "";
          $.each( items, function( index, item ) {
            var li;
            if ( item.category != currentCategory ) {
              ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
              currentCategory = item.category;
            }
            li = that._renderItemData( ul, item );
            if ( item.category ) {
              li.attr( "aria-label", item.category + " : " + item.label );
            }
          });
        },
        _renderItem: function( ul, item ) {
              return $( "<li>" )
                .append( "<a href='"+item.url+"'>" + item.label + "</a>" )
                .appendTo( ul );
        },
      });
      $.widget( "custom.filtroLocComplete", $.ui.autocomplete, {
        _create: function() {
          this._super();
          this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
        },
        _renderMenu: function( ul, items ) {
          var that = this,
            currentCategory = "";
          $.each( items, function( index, item ) {
            var li;
            if ( item.category != currentCategory ) {
              ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
              currentCategory = item.category;
            }
            li = that._renderItemData( ul, item );
            if ( item.category ) {
              li.attr( "aria-label", item.category + " : " + item.label );
            }
          });
        },
        _renderItem: function( ul, item ) {
              return $( "<li>" )
                .append( "<a href='#' data-id='"+item.id+"' class='filtro_loc_click'>" + item.label + "</a>" )
                .appendTo( ul );
        },
      });
    
    $("input.txtBuscar").catcomplete({
      source: "/buscador/autocomplete",
      minLength: 3,
    });
    $("input.txtBuscarLocalidad").filtroLocComplete({
      source: "/buscador/autocomplete/localidades",
      minLength: 3,
      select: function( event, ui ) {
        console.log(ui.item.id);
        $("#filtro_localidad").val(ui.item.id);
      }
    });

});


