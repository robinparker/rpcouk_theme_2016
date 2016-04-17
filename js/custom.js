$(function() {

  $('.full-width-3.work, .full-width-3.blog').slick({
    centerMode: true,
    centerPadding: '40px',
    speed: 250,
    slidesToShow: 1,
    mobileFirst: true,
    prevArrow: '<button type="button" class="slick-prev"><svg role="img"><use xlink:href="#chevronleft"></use></svg></button>',
    nextArrow: '<button type="button" class="slick-next"><svg role="img"><use xlink:href="#chevronright"></use></svg></button>',
    responsive: [
      {
        breakpoint: 700,
        settings: 'unslick'
      },
      {
        breakpoint: 300,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '40px',
          speed: 250,
          slidesToShow: 1
        }
      }
    ]
  });


});
