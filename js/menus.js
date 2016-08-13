$('nav li a[data-submenu]').click(function() {
  // pseudocode
  var footer = $('footer');
  var submenu_id = $(this).getData('submenu');
  var animated = $.copyElement($(submenu_id));
  animated.id = animated.id + '_animated';
  animated.top = $(this).top;
  animated.left = $(this).left;
  animated.width = animated.firstchild.width;
  animated.show();
  animated.moveDown( $('footer').top, 2s );
  animated.animateWidth( footer.width, 2s );
  footer.children().hide();
  $(submenu_id).show();
  animated.hide();
  animated.remove();
});
