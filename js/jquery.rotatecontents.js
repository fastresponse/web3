;jQuery.fn.rotatecontents = function(numvisible, pausetime, transitiontime, dir) {
  if (numvisible < 1 || numvisible > this.children().length) return this;
  var opposites = {
    'up' : 'down',
    'down' : 'up',
    'left' : 'right',
    'right' : 'left',
  }
  return this.each(function() {
    var $children = $(this).children();
    if ($children.length < 1) return;

    $children.slice(numvisible).hide();
    var firstvis = -1;
    var nextvis = numvisible-1;
    // using !function loop() {}() is equivalent to ;(function loop() {})();
    // it declares the function then immediately calls it, forcing semicolons
    !function loop() {
      firstvis = (firstvis + 1) % $children.length;
      nextvis = (nextvis + 1) % $children.length;

      $children.eq(firstvis)
        .delay(pausetime)
        .hide('drop', { 'direction' : dir }, transitiontime);
      $children.eq(nextvis)
        .delay(pausetime)
        .show('drop', { 'direction' : opposites[dir] }, transitiontime, loop);
    }();
  });
};
