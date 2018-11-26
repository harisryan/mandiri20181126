(function( $ ){

/*!
 * A simple, lightweight jQuery notification plugin
 * Author: Stefan Rusu - http://stefanrusu.uk
 * Licensed under the MIT license
 */
  
  $.fn.notifino = function ( options ) {
    
    // Notification plugin defaults 
    var defaults = {
      background      : '#23ADDB', // HEX CODE or RGB
      text            : 'Hey there, you got a new notification!', // String
      color           : '#fff', // HEX CODE or RGB
      wrapper         : '<div class="notifino"></div>', // Default wrapper
      layout          : 'fluid', // standard - fluid - boxed
      rounded         : false, // true or false
      closeBtnText    : '', // could be anything for leave it blank

      closeButton     : {
        show    : true,
        id      : "notifino-close", 
        class   : 'notifino-btn-rounded',
        icon    : true
      },
      
      secondButton    : {
        show      : false,
        text      : 'Learn more',
        href      : 'http://www.jqueryscript.net',
        bgColor   : '',
        textColor : '#fff' 
      }
     }
    
    var settings = $.extend( {}, defaults, options );
    
    // Appending Notification wrapper to DOM
    $(" body ").append( settings.wrapper );

    // Variables
    var notif              = $(" .notifino "),
        layoutON           = false;

    // Styling Notifino
    notif.css({
      "background"    : settings.background,
      "color"         : settings.color
    })
   

    // Types of layouts for Notifiy
    var layoutVariants = ["standard", "fluid", "boxed"];
    
    var index = layoutVariants.length;

    function checkNotifinoLayout() {
      while ( index-- ) {
        if( layoutVariants[index] == settings.layout ) {
           return settings.layout;
        }
      }
    }
    
    switch(checkNotifinoLayout()) {

      case 'fluid':
       printLayout('fluid');
      break;

      case 'standard':
        printLayout('standard');
      break;

      case 'boxed':
        printLayout('boxed');
      break;

    }

    function printLayout(type) {

      this.type = type;

      if( type == 'fluid' || type == 'standard' ) {
        notif.css({
          position: "fixed",
          top: "0",
          left: "0"
        });
      }

      if( type == 'boxed' ) {
        notif.css({
          width: "940px",
          margin: "0 auto 0"
        });
      }

      var container = $(" <div /> ").addClass(" notifino-" + type);
      notif.append( container );
      
      // Insert Notifino Content DIV
      $(" div.notifino div.notifino-" + type )
        .append(" <div class='notifino-content'></div> ")

      // Boxed layout - Rounded?
      if( settings.rounded ) {
        notif.css({ "border-radius" : settings.rounded});
      }

      // Add user's content to DIV
      $(" .notifino-content" ).append( settings.text );
      $(" .notifino-" + type ).append( "<div class='notifino-buttons'></div>"  );


      // Check for close buttons
      if( settings.closeButton.show == true ) {

        // Create close button to notification
        var closeButton = '<a href="#" id="' + settings.closeButton.id +'">' + settings.closeBtnText + '</a>';

        // Add it to notification buttons wrapper
        $(" .notifino-buttons ").append( closeButton );

        if( settings.closeButton.icon == true && settings.closeBtnText == false ) {
          $(" #notifino-close ").prepend(" <i class='fa fa-close'></i> ")
                .addClass(" notifino-close-btn-small ")
                .css({"height" : "24px"})
          
        } else if ( settings.closeBtnText && settings.closeButton.icon ) {
          $(" #notifino-close ").prepend(" <i class='fa fa-close'></i> ");
        }
      
        $("#" + settings.closeButton.id).css({
          background    : settings.color,
          color         : settings.background
        }).addClass(settings.closeButton.class);

        if ( type == 'boxed' ) {
          $(" div.notifino-buttons ").css({ right: "20px" });
        }

      } // check for closeButton

      if( settings.secondButton.show == true ) {

        if( settings.secondButton.textColor == false ) {color = "#fff";} else  { color = settings.secondButton.textColor; }


        $(" .notifino-buttons ").append(" <a href='"+ settings.secondButton.href +"' class='notifino-second-button'>"+ settings.secondButton.text +"</a> ")

        var secondBg = settings.secondButton.bgColor;

        if( secondBg == false || secondBg == undefined || secondBg == null || secondBg == ' ' ) {

          secondBg = settings.background;

          $(" .notifino-second-button ").css({
            "color"     : color,
            "background": ColorLuminance(secondBg, -0.25)
        });

        } else {

           secondBg = settings.secondButton.bgColor;

           $(" .notifino-second-button ").css({
            "color"     : color,
            "background": secondBg
        });


        }

      }
      
    }
    
  function ColorLuminance(hex, lum) {

    // Validate hex string
    hex = String( hex ).replace(/[^0-9a-f]/gi, '');
    
    if ( hex.length < 6) {
      hex = hex[0]+hex[0]+hex[1]+hex[1]+hex[2]+hex[2];
    }
    lum = lum || 0;

    // Convert to decimal and change luminosity
    var rgb = "#", c, i;
    
    for ( i = 0; i < 3; i++ ) {

      c = parseInt(hex.substr(i*2,2), 16);

      c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);

      rgb += ("00"+c).substr(c.length);
    
    }

    return rgb;
}

    $("#notifino-close").on("click", function(event) {
      event.preventDefault();

      notif.animate({
        marginTop: "-" + notif.height() + "px",
        opacity: 0
      }, 500)
    })

  }

})( jQuery );