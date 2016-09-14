
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

  var hash_i = document.URL.indexOf('#');
  if (hash_i > -1) {
    setTimeout(function() {
      var hash_i = document.URL.indexOf('#');
      var hash_url = document.URL.substr(hash_i+1);
      $('#details_' + hash_url).fadeToggle().fadeToggle();
    }, 1000);
  }

  $('[data-submenu]').on('click', function(event) {
    event.preventDefault();

    var $el = $(this);
    var $parent = $el.parent();

    if ($parent.hasClass('active')) {
      return;
    }

    var $bar = $el.prev('.color_bar');
    var $footer = $('body > footer');
    var $footermenu = $('#footer-menu');
    var $submenu = $( ('#' + $el.attr('data-submenu')) );
    var $dest = $submenu.find('.color_bar').first();
    var $footerhide = $footer.children().add( $footermenu.children() );

    $parent.siblings().removeClass('active').fadeTo(800, 0.35);
    $parent.addClass('active');

    $('.animated-menu-item').stop(true).remove();

    var $clone = $bar.clone();
    $clone
      .removeAttr('data-submenu')
      .addClass('animated-menu-item')
      .width($bar.width())
      .height($bar.height())
      .offset($bar.offset())
      .html($bar.html())
      .appendTo($parent)
    ;

    $footer.stop(true).animate( { opacity: 0 }, 800, function() {
      $footer.css('border-width', 0).css('padding-left', 0);
      $footerhide.hide();
      $footermenu.show();
      $submenu.css('opacity', 0).css('display', 'flex');
      $footer.css('opacity', 1);
      $submenu.stop(true).animate( { opacity: 1 }, 800, function() {
        $clone.animate( {
          height: $dest.height(),
          width: $dest.width(),
          top: $dest.offset()['top'],
          left: $dest.offset()['left']
        }, 1500, function() {
          $clone.remove();
        });
      });
    });

  }); // end of on click handler

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
