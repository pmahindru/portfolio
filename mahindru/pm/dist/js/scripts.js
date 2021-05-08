/*!
    * Start Bootstrap - Creative v6.0.4 (https://startbootstrap.com/theme/creative)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-creative/blob/master/LICENSE)
    */
    (function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 80)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 75
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-scrolled");
    } else {
      $("#mainNav").removeClass("navbar-scrolled");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  // Magnific popup calls
  $('#portfolio').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1]
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
    }
  });

})(jQuery); // End of use strict

// ----------------------------------------onclick function for the skills-----------------------------------------
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    document.getElementById("line").style.display="block";
    document.getElementById("myDIV2").style.display="none";
    document.getElementById("myDIV3").style.display="none";
    document.getElementById("myDIV4").style.display="none";
    document.getElementById("myDIV5").style.display="none";
    x.style.display = "block";
  } 
}

function myFunction2() {
  var x = document.getElementById("myDIV2");
  if (x.style.display === "none") {
    document.getElementById("line").style.display="block";
    document.getElementById("myDIV").style.display="none";
    document.getElementById("myDIV3").style.display="none";
    document.getElementById("myDIV4").style.display="none";
    document.getElementById("myDIV5").style.display="none";
    x.style.display = "block";
  }
}


function myFunction3() {
  var x = document.getElementById("myDIV3");
  if (x.style.display === "none") {
    document.getElementById("line").style.display="block";
    document.getElementById("myDIV").style.display="none";
    document.getElementById("myDIV2").style.display="none";
    document.getElementById("myDIV4").style.display="none";
    document.getElementById("myDIV5").style.display="none";
    x.style.display = "block";
  }
}

function myFunction4() {
  var x = document.getElementById("myDIV4");
  if (x.style.display === "none") {
    document.getElementById("line").style.display="block";
    document.getElementById("myDIV").style.display="none";
    document.getElementById("myDIV2").style.display="none";
    document.getElementById("myDIV3").style.display="none";
    document.getElementById("myDIV5").style.display="none";
    x.style.display = "block";
  }
}

function myFunction5() {
  var x = document.getElementById("myDIV5");
  if (x.style.display === "none") {
    document.getElementById("line").style.display="none";
    document.getElementById("myDIV").style.display="none";
    document.getElementById("myDIV2").style.display="none";
    document.getElementById("myDIV3").style.display="none";
    document.getElementById("myDIV4").style.display="none";
    x.style.display = "block";
  }
}

// ------------------fade out projects---------------------------------

AOS.init({
      startEvent: 'someCoolEvent'
    });

// ------------------------------contact form------------------------------

function myFunction7() {
  var x = document.getElementById("show");
  if (x.style.display === "none") {
    document.getElementById("contact").style.height = "1240px";
    x.style.display = "block";
    window.scrollBy(0, 300);
  } else {
    document.getElementById("contact").style.height = "500px";
    window.scrollBy(0, 540);
    x.style.display = "none";
  }
}
