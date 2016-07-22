/*
$.fn.load_images = function(opts) {
  // opts = {
  //   "num" : n,
  //   "srclist" : [ "path 1", "path 2" ],
  //   "until" : function($img),
  //   "done" : function()
  // }

  var max = 1;
  if (opts.num) {
    max = opts.num;
  }

  var srclist = [];
  if (opts.srclist) {
    srclist = opts.srclist;
  }
  
  var until = function($img) { return true; }
  if (opts.until) {
    until = opts.until;
    if (!opts.num) {
      max = 0;
    }
  }

  var done = function() { }
  if (opts.done) {
    done = opts.done;
  }

  return this.each(function() {
    var current = 0;

    var localsrclist = $(this).data('src');
    if (localsrclist && localsrclist.length) {
      localsrclist = localsrclist.split(',');
    }
    else {
      localsrclist = [];
    }

    ({
      "container" : undefined,
      "current" : 0,
      "max" : 0,
      "localsrclist" : [],
      "srclist" : [],
      "until" : undefined,
      "done" : undefined,
      "set" : function(container, max, localsrclist, srclist, until, done) {
        this.container = container;
        this.max = max;
        this.localsrclist = localsrclist;
        this.srclist = srclist;
        this.until = until;
        this.done = done;
        return this;
      },
      "do" : function() {
        var src;
        var local = false;
        var until_callback = (typeof(this.until) === "function");
        var done_callback = (typeof(this.done) === "function");

        if (this.max > 0 && this.current++ >= this.max) {
          if (done_callback) { done(); }
          return;
        }

        if (this.localsrclist.length) {
          src = this.localsrclist.shift();
          local = true;
        }
        else if (this.srclist.length) {
          src = this.srclist.shift();
        }
        else {
          if (done_callback) { done(); }
          return;
        }

        $('<img/>', {
          src: src,
          alt: ''
        }).appendTo(container).load(function() {
          if (until_callback && until($(this)) === false) {
            if (local) {
              this.localsrclist.unshift($(this).attr('src'));
            }
            else {
              this.srclist.unshift($(this).attr('src'));
            }
            $(this).remove();
            if (done_callback) { done(); }
          }
          else {
            this.do();
          }
        });

      }
    }).set(max, localsrclist, srclist, until, done).do();


  });
};
*/


/*
function load_images_until(container, srclist, checkfunc, donefunc) {
  var done_callback = (typeof(donefunc) === "function");

  if (srclist.length < 1) {
    if (done_callback) {
      donefunc();
    }
    return;
  }

  $('<img/>', {
    src: srclist.shift(),
    alt: ''
  }).appendTo(container).load(function() {
    if (checkfunc($(this)) === false) {
      srclist.unshift($(this).attr('src'));
      $(this).remove();
      if (done_callback) {
        donefunc();
      }
    }
    else {
      load_images_until(container, srclist, checkfunc, donefunc);
    }
  });
}

load_images_until( $('#image-placeholder-primary'), srclist,
  function($img) {
    var sidebar_height = $('#sidebar-primary').height();
    var content_height = $('#content').height();
    var leeway = 50; // pixels

    if (content_height >= sidebar_height) {
      return true;
    }

    if (sidebar_height > content_height && (sidebar_height - content_height) <= leeway) {
      return true;
    }

    return false;
  },
  function() {
  }
);

*/

