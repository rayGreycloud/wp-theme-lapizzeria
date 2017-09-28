$ = jQuery.noConflict();

$(document).ready(function() {
  // Menu Button
  $('.mobile-menu a').on('click', function() {
    $('nav.site-nav').toggle('slow');
  });

  // Show Mobile Menu
  var breakpoint = 768;
  $(window).resize(function() {
    boxAdjustment();
    
    if ($(document).width() >= breakpoint) {
      $('nav.site-nav').show();
    } else {
      $('nav.site-nav').hide();
    }
  });

  boxAdjustment();

});

// Adapt the image height to div
function boxAdjustment() {
  var images = $('.box-image');
  if (images.length > 0) {
    var imageHeight = images[0].height;
    var boxes = $('.content-box');
    $(boxes).each(function (i, element) {
      $(element).css({'height': imageHeight + 'px'});
    });
  }
}
