function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  var h1 = document.querySelector("h1");

h1.addEventListener("input", function() {
    this.setAttribute("data-heading", this.innerText);
});
//Fixed Menu Scroll
// $(window).scroll(function() {

//   if ($("#myHeader").scrollTop() > 100) {
//       $('.header').addClass('sticky');
//   } else {
//       $('.header').removeClass('sticky');
//   }
// });
//Morphext
$("#js-rotating").Morphext({
  // The [in] animation type. Refer to Animate.css for a list of available animations.
  animation: "bounceIn",
  // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
  separator: ",",
  // The delay between the changing of each phrase in milliseconds.
  speed: 2000,
  complete: function () {
      // Called after the entrance animation is executed.
  }
});

// Scroll PAge
$(function() {
  $('.scroll-down').click (function() {
    $('html, body').animate({scrollTop: $('.about-me').offset().top }, 'slow');
    return false;
  });
});

//Skills
var skills = {
  ht: 75,
  jq: 25,
  php: 60,
  ph: 75,
  il: 90,
  in: 85,
  fl: 75
};

$.each(skills, function(key, value) {
  var skillbar = $("." + key);

  skillbar.animate(
    {
      width: value + "%"
    },
    3000,
    function() {
      $(".speech-bubble").fadeIn();
    }
  );
}); 

// BACK TO TOP BUTTON
var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

//Time line
var timelineSwiper = new Swiper ('.timeline .swiper-container', {
  direction: 'vertical',
  loop: false,
  speed: 4000,
  spaceBetween: 0,
  pagination: '.swiper-pagination',
  paginationBulletRender: function (swiper, index, className) {
    var year = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-year');
    return '<span class="' + className + '">' + year + '</span>';
  },
  paginationClickable: true,
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
  autoplay: {
    delay: 5000,
  },
  // breakpoints: {
  //   768: {
  //     direction: 'horizontal',
  //   }
  // }
});
// var mySwiper = document.querySelector('.timeline .swiper-container').swiper
// mySwiper.slideNext();
$('.filters ul li').click(function(){
  $('.filters ul li').removeClass('active');
  $(this).addClass('active');
  
  var data = $(this).attr('data-filter');
  $grid.isotope({
    filter: data
  })
});

var $grid = $(".grid").isotope({
  itemSelector: ".all",
  percentPosition: true,
  masonry: {
    columnWidth: ".all"
  }
})

