;(function ($, window, undefined){
  'use strict';

  $.fn.foundationAccordion = function (options) {

    // DRY up the logic used to determine if the event logic should execute.
    var hasHover = function(accordion) {
      return accordion.hasClass('hover') && !Modernizr.touch
    };

    $(document).on('mouseenter', '.accordion dd', function () {
        var p = $(this).parent();

        if (hasHover(p)) {
          var flyout = $(this).children('.content').first();

          $('.content', p).not(flyout).hide().parent('dd').removeClass('active');
          flyout.show(0, function () {
            flyout.parent('dd').addClass('active');
          });
        }
      }
    );

    $(document).on('click.fndtn', '.accordion li .title', function () {
        var li = $(this).closest('dd'),
            p = li.parent();

        if(!hasHover(p)) {
          var flyout = li.children('.content').first();

          if (li.hasClass('active')) {
            p.find('dd').removeClass('active').end().find('.content').hide();
          } else {
            $('.content', p).not(flyout).hide().parent('dd').removeClass('active');
            flyout.show(0, function () {
              flyout.parent('dd').addClass('active');
            });
          }
        }
      }
     );

  };

})( jQuery, this );

