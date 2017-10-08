
var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: { lat: 45.546360, lng: -122.593849},
    zoom: 15
  });
}

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
  // Fluidbox
  jQuery('.gallery a').each(function() {
    jQuery(this).attr({'data-fluidbox': ''});
  });

  if (jQuery(['data-fluidbox']).length > 0) {
    jQuery('[data-fluidbox]').fluidbox();
  }
});

  // Adjust Map height
  var map = $('#map');
  var breakpoint = 768;
  if (map.length > 0) {
    if ($(document).width() >= breakpoint) {
      displayMap(0);
    } else {
      displayMap(300);
    }
  }
  $(window).resize(function() {
    if ($(document).width() >= breakpoint) {
      displayMap(0);
    } else {
      displayMap(300);
    }
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

function displayMap(value) {
  if (value == 0) {
    var locationSection = $('.location-reservation');
    var locationHeight = locationSection.height();
    $('#map').css({'height': locationHeight});
  } else {
    $('#map').css({'height': value});
  }
}
