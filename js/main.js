
// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());
// --- //


$(document).ready(function() {

  $('body').addClass('loaded');
  $('img.lazy').each(function() {
    $(this).attr('src', $(this).attr('data-src'));
  });

  $('[data-submenu]').on('click', function(event){
    event.preventDefault();
    console.log( $(this) );
    var $el = $(this);
    var $clone = $(this).clone();
    $clone
      .removeAttr('data-submenu')
      .addClass('animated-menu-item')
      .width($(this).width())
      .height($(this).height())
      .offset($(this).offset())
      .html($(this).html())
      .appendTo($(this).parent())
    ;

    /*
    $('#menu').animate({
      fontSize: "1em",
      lineHeight: "1.2em",
      width: "18%"
    }, {
      duration: 500,
      complete: function() {
      }
    });
    */

    $('#footer-information, #footer-socialmedia, #footer-menu, #footer-menu > *')
      .slideUp({
        duration: 500,
        complete: function() {
          $('#footer-menu').hide().delay(100);
          $( ('#' + $el.attr('data-submenu')) ).css('display', 'flex');
          $('#footer-menu').slideDown(500);
        }
      }
    );

    $clone.animate({
    }, {
    });


  });

  /*
  var width = $(window).width();
  if (width >= 800) {
    $FRvars.type = 'desktop';
  }
  else if (width >= 550) {
    $FRvars.type = 'tablet';
  }
  else {
    $FRvars.type = 'mobile';
  }
  */

  /*
  $.when(
  ).then(function() {
  }).then(function() {
  });
  */

});
