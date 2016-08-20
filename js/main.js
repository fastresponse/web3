
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

  $('[data-submenu]').click(function(){
    console.log( $(this) );
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
