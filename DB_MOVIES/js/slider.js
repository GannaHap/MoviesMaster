// Slider Carousel

// Display Awal
var owl = $('.owl-carousel.content-display').owlCarousel({
  // items:6,
  loop:true,
  margin:10,
  autoplay:true,
  autoplayTimeout:1200,
  autoplayHoverPause:true,
  rtl:false,
  nav:true,
  responsive:{
      0:{
          items:4
      },
      600:{
          items:5
      },
      1000:{
          items:6
      }
  }
});


$('.play').on('click',function(){
  owl.trigger('play.owl.autoplay',[1200])
})
$('.stop').on('click',function(){
  owl.trigger('stop.owl.autoplay')
})


$('.owl-carousel').css({
  "position": "relative",
  "display": "grid",
  "justifyContent": "center"
});

$('.owl-dots').css({
  "marginBottom": "20px",
  "marginTop": "10px"
})

$('.owl-nav').css({
  "display": "flex",
  "position": "absolute",
  "justifyContent": "space-between",
  "padding": "0px 10px",
  "bottom": 0,
  "right": 0,
  "left": 0
});

$('.owl-next').html(`<div class="r">Next</div>`);
$('.owl-prev').html(`<div class="l">Prev</div>`);


// Display Populer
var owlPop = $('.owl-carousel.content-populer').owlCarousel({
  rtl:false,
  loop:false,
  margin:10,
  nav:true,
  responsive:{
      0:{
          items:4
      },
      600:{
          items:5
      },
      1000:{
          items:6
      }
  }
});

$('.owl-carousel').css({
  "position": "relative",
  "display": "grid",
  "justifyContent": "center"
});

$('.owl-dots').css({
  "marginBottom": "20px",
  "marginTop": "10px"
})

$('.owl-nav').css({
  "display": "flex",
  "position": "absolute",
  "justifyContent": "space-between",
  "padding": "0px 10px",
  "bottom": 0,
  "right": 0,
  "left": 0
});

$('.owl-prev').html(`<div class="l">Prev</div>`);
$('.owl-next').html(`<div class="r">Next</div>`);