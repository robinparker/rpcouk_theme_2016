$(function() {

if ( $('body').hasClass('page-template-star-wars-mode') ) {
  console.log('star wars mode');
  $('.theme').get(0).play();
  $('.theme').bind('ended', function() {
    // $('.end-msg').show();
  });
}

  $('.mobile-menu-toggle').on('click', function() {
    if ( $(this).hasClass('is-active') ) {
      $(this).removeClass('is-active');
      $('.main-navigation ul').removeClass('is-active');
    } else {
      $(this).addClass('is-active');
      $('.main-navigation ul').addClass('is-active');
    }
  });

  $('.full-width-3').slick({
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

  var rrFacts = ['I share my birthday with Howie Dorough of Backstreet Boys',
                'I once accidentally wandered onto the stage during a live Sooty & Sweep show',
                'I once appeared on national TV dressed as Robin the boy wonder',
                'The first gig I ever went to was Bucks Fizz at Deeside Leisure Centre',
                'I quite like Star Wars'];
  var rrNum = Math.floor((Math.random() * 4) + 1);
  $('.rrf-fact').text(rrFacts[rrNum]);


});
