 

/*============================= Back To Top Button Script ========================*/
var mybutton = document.getElementById("backTop");
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
  if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
    mybutton.style.display = "flex";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


(function ($) { 
  // detect scroll top or down
  if ($('.smart-scroll').length > 0) { // check if element exists
    var last_scroll_top = 0;
    $(window).on('scroll', function() {
        scroll_top = $(this).scrollTop();
        // console.log(scroll_top);
        if (scroll_top < last_scroll_top) {
            $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
        } else {
            $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
        }
        if (scroll_top === 0) {
          $('.smart-scroll').removeClass('scrolled-down').removeClass('scrolled-up');
        }
        last_scroll_top = scroll_top;
    });
  }



  // Main Header Nav links Active Class Genaretor
  $("#mainNav .navbar-nav li a").filter(function () {
    return this.href == location.href.replace(/#.*/, "");
  }).parents("li").addClass("active");
 

  // Bottom Section Service Slider Activaton Script (Homepage)
  $(".courseCarousel").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 15,
    items: 3,
    nav: false,
    dots: true,
    responsiveClass: true, 
    responsive: { 
        0: { items: 1, margin: 8 },
        576: { items: 2, margin: 10  },
        768: { items: 2, margin: 15  },
        992: { items: 2, margin: 15  }, 
        1200: { items: 3, margin: 15 }, 
    } 
  });
 
  
  
    
  $(".blogSlider").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 15,
    items: 3,
    nav: false,
    dots: true, 
    responsiveClass: true, 
    responsive: { 
        0: { items: 1 },
        576: { items: 1  },
        768: { items: 2 },
        992: { items: 2 }, 
        1200: { items: 3 },  
    } 
  });




  $(".serviceTopslider").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 15,
    items: 3,
    nav: false,
    dots: true, 
    responsiveClass: true, 
    responsive: { 
        0: { items: 1 },
        576: { items: 1  },
        768: { items: 1 },
        992: { items: 2 }, 
        1200: { items: 3 },  
    } 
  });

  $(".serviceBotslider").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: false,
    items: 3,
    nav: false,
    dots: false, 
    responsiveClass: true, 
    responsive: { 
        0: { items: 1 },
        576: { items: 1  },
        768: { items: 1 },
        992: { items: 2 }, 
        1200: { items: 3 },  
    } 
  });


  $(".authorSlider").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 10,
    items: 3,
    nav: false,
    dots: false, 
    responsiveClass: true, 
    responsive: { 
        0: { items: 1 },
        576: { items: 1  },
        768: { items: 1 },
        992: { items: 2 }, 
        1200: { items: 5 },  
    } 
  });


    
  $(".serviceSlider").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 20,
    items: 2,
    nav: false,
    dots: true, 
    responsiveClass: true, 
    responsive: { 
        0: { items: 1 },
        576: { items: 1  },
        768: { items: 2 },
        992: { items: 2 }, 
        1200: { items: 2 },  
    } 
  });
    
  

  
  $(".testimonialSlider").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 15,
    items: 2.5,
    nav: false,
    dots: true, 
    responsiveClass: true, 
    responsive: { 
        0: { items: 1 },
        576: { items: 1  },
        768: { items: 1 },
        992: { items: 1.5 }, 
        1200: { items: 1.75, center: true },  
    } 
  });

  
  

  // Modal Quick Enquery Form Set Blank When Modal Is Close
  // var enquirModal = document.getElementById("bookingModal");
  // enquirModal.addEventListener('hidden.bs.modal', function(e) {
  //   $("#mfull_name, #memail_address, #mphone_no, #mtravel_date, #mno_of_people, #mno_of_adult, #mno_of_child").val('');
  //   $("#mfull_name, #memail_address, #mphone_no, #mtravel_date, #mno_of_people, #mno_of_adult, #mno_of_child").css('border-color', '#ced4da');
  //   $("#mfull_name_error, #memail_address_error, #mphone_no_error, #mtravel_date_error, #mno_of_people_error, #mno_of_adult_error, #mno_of_child_error").html('');
  // });

 
 
 
})(jQuery);
 

 